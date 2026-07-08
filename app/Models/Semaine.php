<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Semaine extends Model
{
    /** @use HasFactory<\Database\Factories\SemaineFactory> */
    use HasFactory;
    protected $table = 'semaines';
    protected $fillable = [
        'libelle',
        'user_id'
    ];
}
