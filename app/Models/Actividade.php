<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actividade extends Model
{
    use HasFactory;
    protected $fillable=[
        "nome_estudante",
        "data",
        "hora",
        "sala",
        "tema"
    ];
}
