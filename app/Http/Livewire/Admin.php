<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Admin extends Component
{   
    public $nome="Achelton";
    public function render()
    {
        return view('livewire.admin');
    }
}
