<?php

namespace App\Http\Livewire;

use App\Models\Actividade;
use App\Models\Tema;
use App\Models\Upload;
use App\Models\User;
use Livewire\Component;

class Inicio extends Component
{
    public function render()
    {
        $estudantes = User::where("perfil", "Estudante")->count();
        $tutores = User::where("perfil", "Professor")->count();
        $temas = Tema::all()->count();
        $actividades = Actividade::all()->count();
        $ficheiros = Upload::all()->count();
        return view('livewire.inicio', compact("estudantes","tutores","temas","actividades","ficheiros"));
    }
}
