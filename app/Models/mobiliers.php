<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mobiliers extends Model
{
    use HasFactory;
    protected $fillable=
    [
        'nom',
        'description',
        'adresse',
        'prix',
        'taille',
        'image'
    ];
}
