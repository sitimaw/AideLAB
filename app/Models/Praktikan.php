<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Praktikan extends Model
{
    use HasFactory;

    protected $table = 'Praktikan';
    protected $fillable = ['npm', 'nama'];
}
