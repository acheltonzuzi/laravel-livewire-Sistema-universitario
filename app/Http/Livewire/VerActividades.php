<?php

namespace App\Http\Livewire;

use App\Models\Actividade;
use Livewire\Component;
use Livewire\WithPagination;

class VerActividades extends Component
{
    use WithPagination;
    public $nome;
    public function render()
    {
        $actividade=Actividade::where("nome_estudante","like","%".$this->nome."%")->orderBy("id","desc")->paginate(20);
        return view('livewire.ver-actividades',compact("actividade"));
    }
}
