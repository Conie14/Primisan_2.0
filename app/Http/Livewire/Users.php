<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\User;

class Users extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $name, $apellidop, $apellidom, $telefono, $email, $password;
    public $updateMode = false;

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';
        return view('livewire.users.view', [
            'users' => User::latest()
						->orWhere('name', 'LIKE', $keyWord)
						->orWhere('apellidop', 'LIKE', $keyWord)
						->orWhere('apellidom', 'LIKE', $keyWord)
						->orWhere('telefono', 'LIKE', $keyWord)
						->orWhere('email', 'LIKE', $keyWord)
                        ->orWhere('password', 'LIKE', $keyWord)
						->paginate(10),
        ]);
    }
	
    public function cancel()
    {
        $this->resetInput();
        $this->updateMode = false;
    }
	
    private function resetInput()
    {		
		$this->name = null;
		$this->apellidop = null;
		$this->apellidom = null;
		$this->telefono = null;
		$this->email = null;
        $this->password = null;
    }

    public function store()
    {
        $this->validate([
		'name' => 'required',
		'apellidop' => 'required',
		'apellidom' => 'required',
		'telefono' => 'required',
		'email' => 'required',
        'password' => 'required',
        
        ]);

        User::create([ 
			'name' => $this-> name,
			'apellidop' => $this-> apellidop,
			'apellidom' => $this-> apellidom,
			'telefono' => $this-> telefono,
			'email' => $this-> email,
            'password' => $this->password,
        ]);
        
        $this->resetInput();
		$this->emit('closeModal');
		session()->flash('message', 'User Successfully created.');
    }

    public function edit($id)
    {
        $record = User::findOrFail($id);

        $this->selected_id = $id; 
		$this->name = $record-> name;
		$this->apellidop = $record-> apellidop;
		$this->apellidom = $record-> apellidom;
		$this->telefono = $record-> telefono;
		$this->email = $record-> email;
		$this->password = $record-> password;
        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate([
		'name' => 'required',
		'apellidop' => 'required',
		'apellidom' => 'required',
		'telefono' => 'required',
		'email' => 'required',
        'password' => 'required',
        ]);

        if ($this->selected_id) {
			$record = User::find($this->selected_id);
            $record->update([ 
			'name' => $this-> name,
			'apellidop' => $this-> apellidop,
			'apellidom' => $this-> apellidom,
			'telefono' => $this-> telefono,
			'email' => $this-> email,
            'password' => $this-> password
            ]);

            $this->resetInput();
            $this->updateMode = false;
			session()->flash('message', 'User Successfully updated.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            $record = User::where('id', $id);
            $record->delete();
        }
    }
}
