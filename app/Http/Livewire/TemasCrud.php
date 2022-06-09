<?php

namespace App\Http\Livewire;

use App\Models\Tema;
use Livewire\Component;

class TemasCrud extends Component
{
    public $tema = "";
    public $categoria = "";
    public function render()
    {
        $temas=Tema::where("user_id",auth()->user()->id)->get();
        return view('livewire.temas-crud',compact("temas"))->layout("layouts.base");
    }
    public function cadastrar()
    {   
        Tema::create([
            "tema" => $this->tema,
            "categoria" => $this->categoria,
            "user_id" => auth()->user()->id,
        ]);
        $this->reset();
    }
    public function apagar($id){
        $temas=Tema::find($id);
        $temas->delete();
    }
}
