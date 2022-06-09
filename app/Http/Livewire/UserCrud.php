<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Livewire\WithPagination;

class UserCrud extends Component
{   
    
    public $ids = 0;
    public $ids2 = 0;
    public $nome = "";
    public $email = "";
    public $telefone = "";
    public $perfil = "";
    public $senha = "";
    public $Id = "";
    public $edit = false;
    public $search;
    public function render()
    {
        $Usuario = User::where("name","Like","%".$this->search."%")
        ->orWhere("email","Like","%".$this->search."%")
        ->orWhere("perfil","Like","%".$this->search."%")
        ->orWhere("telefone","Like","%".$this->search."%")
        ->orderBy("id","desc")->paginate(10);
        return view('livewire.user-crud', compact("Usuario"))->layout('layouts.base');
    }
    public function showModal()
    {
        $this->ids = 1;
    }
    public function confirModal()
    {
        $this->ids2 = 1;
    }
    public function cancelModal()
    {
        $this->reset();
    }
    public function cancelModal1()
    {
        $this->reset();
        $this->edit=false;
    }
    public function deletar($id)
    {
        $Usuario = User::find($id);
        $Usuario->delete();
        $this->reset();
    }

    public function add()
    {
        $this->edit = false;
        
            $this->validate([
             "nome" => "required",
             "email" => "required|email",
             "telefone" => "required",
             "perfil" => "required",
             "senha" => "required|min:8",
            ]);
            //code...
       
        User::create([
            "name" => $this->nome,
            "email" => $this->email,
            "telefone" => $this->telefone,
            "perfil" => $this->perfil,
            "password" => Hash::make($this->senha),
        ]);
        $this->reset();
        Session()->flash("usuario","Usuário cadastrado com sucesso");
    }
    public function editar($id)
    {
        $Usuario = User::find($id);
        $this->nome = $Usuario->name;
        $this->email = $Usuario->email;
        $this->perfil = $Usuario->perfil;
        $this->telefone = $Usuario->telefone;
        $this->senha = $Usuario->password;
        $this->Id = $Usuario->id;
        $this->ids = 1;
        $this->edit = true;
    }
    public function atualizar(){
        $this->validate([
            "nome" => "required",
            "email" => "required|email",
            "telefone" => "required",
            "perfil" => "required",
            "senha" => "required|min:8",
           ]);
           //code..
        $Usuario = User::find($this->Id);
        $Usuario->update([
            "name" => $this->nome,
            "email" => $this->email,
            "telefone" => $this->telefone,
            "perfil" => $this->perfil,
            "password" => $this->senha,
        ]);
        $this->reset();


    }
}
