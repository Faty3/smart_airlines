<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vol extends Model
{
    use HasFactory;

    protected $fillable = ['code_vol', 'date_depart', 'heure_depart', 'np_classe_a', 'np_classe_b', 'prix_classe_a', 'prix_classe_b'];
}
