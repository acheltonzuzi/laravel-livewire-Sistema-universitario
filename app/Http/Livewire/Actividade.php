<?php

namespace App\Http\Livewire;

use App\Models\Actividade as ModelsActividade;
use Livewire\Component;

class Actividade extends Component
{
    public $nomeEstudante = "";
    public $tema = "";
    public $data = "";
    public $sala = "";
    public $hora = "";
    public function render()
    {
        $actividade=ModelsActividade::all();
        return view('livewire.actividade',compact("actividade"))->layout("layouts.base");
    }
    public function add(){
        ModelsActividade::create([
            "nome_estudante"=>$this->nomeEstudante,
            "tema"=>$this->tema,
            "data"=>$this->data,
            "sala"=>$this->sala,
            "hora"=>$this->hora,
        ]);
        $this->reset();
    }
    public function apagar($id){
        $actividade=ModelsActividade::find($id);
        $actividade->delete();
        Session()->flash("apagar","actividade apagada com sucesso");
    }
}
