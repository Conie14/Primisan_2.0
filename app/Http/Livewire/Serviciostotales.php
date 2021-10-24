<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Serviciostotale;

class Serviciostotales extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $nombre, $idarea;
    public $updateMode = false;

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';
        return view('livewire.serviciostotales.view', [
            'serviciostotales' => Serviciostotale::latest()
						->orWhere('nombre', 'LIKE', $keyWord)
						->orWhere('idarea', 'LIKE', $keyWord)
						->paginate(30),
        ]);
    }
	
    public function cancel()
    {
        $this->resetInput();
        $this->updateMode = false;
    }
	
    private function resetInput()
    {		
		$this->nombre = null;
		$this->idarea = null;
    }

    public function store()
    {
        $this->validate([
		'nombre' => 'required',
		'idarea' => 'required',
        ]);

        Serviciostotale::create([ 
			'nombre' => $this-> nombre,
			'idarea' => $this-> idarea
        ]);
        
        $this->resetInput();
		$this->emit('closeModal');
		session()->flash('message', 'Serviciostotale Successfully created.');
    }

    public function edit($id)
    {
        $record = Serviciostotale::findOrFail($id);

        $this->selected_id = $id; 
		$this->nombre = $record-> nombre;
		$this->idarea = $record-> idarea;
		
        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate([
		'nombre' => 'required',
		'idarea' => 'required',
        ]);

        if ($this->selected_id) {
			$record = Serviciostotale::find($this->selected_id);
            $record->update([ 
			'nombre' => $this-> nombre,
			'idarea' => $this-> idarea
            ]);

            $this->resetInput();
            $this->updateMode = false;
			session()->flash('message', 'Serviciostotale Successfully updated.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            $record = Serviciostotale::where('id', $id);
            $record->delete();
        }
    }
}
