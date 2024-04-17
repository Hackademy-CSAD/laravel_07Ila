<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animals extends Model
{
    use HasFactory;
    // nelle quadre è un array delle colonne in stringhe
    protected $fillable = ['name','animal_age','img'];
}
// dopodiche implemento il metodo store in AnimalController