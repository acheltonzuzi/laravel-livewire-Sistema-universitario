<?php

namespace App\Http\Controllers;

use App\Models\Upload;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\File\File as File;

class PrincipalController extends Controller
{
    public function download($id){
        $file=Upload::find($id);
        return response()->download(storage_path('app/store/'.$file->nome));
    }
}
