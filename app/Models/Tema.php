<?php

namespace App\Models;

use App\Http\Livewire\TemasCrud;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tema extends Model
{
    use HasFactory;
   
    protected $table = "temas";
    protected $fillable = [
        "tema",
        "categoria",
        "user_id"
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
}
