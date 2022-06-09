<?php

namespace App\Http\Livewire;

use App\Models\Upload;
use Faker\Core\File;
use Illuminate\Http\Client\Request;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class FicheiroUpload extends Component
{
    public $categoria = "";
    public $nome = "";
    use WithFileUploads;
    public function render()
    {
        $uploads = Upload::all();
        return view('livewire.ficheiro-upload', compact("uploads"))->layout("layouts.base");
    }

    public function upload()
    {
        $this->validate([
            "categoria" => "required",
            "nome" => "required",
        ]);
        $nomePdf = $this->nome->getClientOriginalName();
        $extensao = $this->nome->getClientOriginalExtension();
        if ($extensao != "pdf") {
            Session()->flash("extensao", "so podes fazer upload de ficheiros em formato 'pdf'");
        } else {
            $this->nome->storeAs('store', $nomePdf);
            $upload = new Upload();
            $upload->categoria = $this->categoria;
            $upload->nome = $nomePdf;
            $upload->save();
            $this->reset();
            Session()->flash("sucesso", "upload feito com sucesso");
        }
    }
    public function deleteFile($id)
    {
        $file=Upload::find($id);
        $file->delete();
        Session()->flash("apagar","ficheiro apagado com sucesso");
        unlink(storage_path('app/store/'.$file->nome));
    }
}
