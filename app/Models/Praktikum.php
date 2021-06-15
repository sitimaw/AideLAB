<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Praktikum extends Model
{
    use HasFactory;

    protected $table = 'Praktikum';
    protected $fillable = ['id_mk', 'id_jadwal', 'aturan'];
    public $timestamps = false;
}
