<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    // Os campos que podem ser atribuídos em massa
    protected $fillable = [
        'nome',
        'descricao',
        'valor',
        'tipo',
    ];
}