<?php

namespace App\Http\Livewire;

use App\Models\Upload;
use Livewire\Component;
use Livewire\WithPagination;

class VerMonografias extends Component
{
    use WithPagination;
    public function render()
    {
        $monografias=Upload::paginate(15);
        return view('livewire.ver-monografias',compact("monografias"));
    }
}
