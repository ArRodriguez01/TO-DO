<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarea extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo',
        'contenido',
<<<<<<< HEAD
=======
        'user_id',
        'user_name',
>>>>>>> eca8e4ac5aa223fb3a13f5d7e9ff00a9f8b4f8af
    ];
}
