<?php

namespace App\Http\Livewire;

use App\Models\Tema;
use Livewire\Component;
use Livewire\WithPagination;

class VerTemas extends Component
{
    use WithPagination;
    public function render()
    {
        $temas=Tema::paginate(9);
        return view('livewire.ver-temas',compact("temas"));
    }
}
