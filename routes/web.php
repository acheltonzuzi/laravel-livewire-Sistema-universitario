<?php

use App\Http\Controllers\PrincipalController;
use App\Http\Livewire\Actividade;
use App\Http\Livewire\Admin;
use App\Http\Livewire\FicheiroUpload;
use App\Http\Livewire\Inicio;
use App\Http\Livewire\TemasCrud;
use App\Http\Livewire\UserCrud;
use App\Http\Livewire\VerActividades;
use App\Http\Livewire\VerMonografias;
use App\Http\Livewire\VerTemas;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/', function () {
        return redirect('/redirect');
    })->name('dashboard');
});
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/', function () {
        return redirect('/redirect');
    })->name('dashboard');
    Route::get("home/",Inicio::class);
    Route::get("actividade/",Actividade::class);
    Route::get("upload/",FicheiroUpload::class);
    Route::get("temas/",TemasCrud::class);
    Route::get("verTemas/",VerTemas::class);
    Route::get("verMonografia/",VerMonografias::class);
    Route::get("verActividades/",VerActividades::class)->name("actividades");
});
Route::get("crud/",UserCrud::class);
Route::get("download/{id}",[PrincipalController::class,"download"])->name("download");


Route::get("/redirect",function(){
    if(Auth()->user()->perfil=="Estudante"){
        return redirect("/home");
    }
    elseif(Auth()->user()->perfil=="Professor"){
        return redirect("/home");
    }
    else{
        return redirect("/crud");
    }

    
});