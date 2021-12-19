<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Construccione;

class Construcciones extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $nombre, $email, $telefono, $servicio, $mensaje, $idservicio;
    public $updateMode = false;

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';
        return view('livewire.construcciones.view', [
            'construcciones' => Construccione::latest()
						->orWhere('nombre', 'LIKE', $keyWord)
						->orWhere('email', 'LIKE', $keyWord)
						->orWhere('telefono', 'LIKE', $keyWord)
						->orWhere('servicio', 'LIKE', $keyWord)
						->orWhere('mensaje', 'LIKE', $keyWord)
						->orWhere('idservicio', 'LIKE', $keyWord)
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
		$this->nombre = null;
		$this->email = null;
		$this->telefono = null;
		$this->servicio = null;
		$this->mensaje = null;
		$this->idservicio = null;
    }

    public function store()
    {
        $this->validate([
		'nombre' => 'required',
		'email' => 'required',
		'telefono' => 'required',
		'servicio' => 'required',
		'mensaje' => 'required',
		'idservicio' => 'required',
        ]);

        Construccione::create([ 
			'nombre' => $this-> nombre,
			'email' => $this-> email,
			'telefono' => $this-> telefono,
			'servicio' => $this-> servicio,
			'mensaje' => $this-> mensaje,
			'idservicio' => $this-> idservicio
        ]);
        
        $this->resetInput();
		$this->emit('closeModal');
		session()->flash('message', 'Construccione Successfully created.');
    }

    public function edit($id)
    {
        $record = Construccione::findOrFail($id);

        $this->selected_id = $id; 
		$this->nombre = $record-> nombre;
		$this->email = $record-> email;
		$this->telefono = $record-> telefono;
		$this->servicio = $record-> servicio;
		$this->mensaje = $record-> mensaje;
		$this->idservicio = $record-> idservicio;
		
        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate([
		'nombre' => 'required',
		'email' => 'required',
		'telefono' => 'required',
		'servicio' => 'required',
		'mensaje' => 'required',
		'idservicio' => 'required',
        ]);

        if ($this->selected_id) {
			$record = Construccione::find($this->selected_id);
            $record->update([ 
			'nombre' => $this-> nombre,
			'email' => $this-> email,
			'telefono' => $this-> telefono,
			'servicio' => $this-> servicio,
			'mensaje' => $this-> mensaje,
			'idservicio' => $this-> idservicio
            ]);

            $this->resetInput();
            $this->updateMode = false;
			session()->flash('message', 'Construccione Successfully updated.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            $record = Construccione::where('id', $id);
            $record->delete();
        }
    }
}
