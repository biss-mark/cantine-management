<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Repas extends Model
{
    /** @use HasFactory<\Database\Factories\RepasFactory> */
    use HasFactory;
    protected $table = 'repas';
    protected $fillable = [
        'name',
        'category',
        'image',
        'description',
        'ingredient',
    ];
}
