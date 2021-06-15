<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    use HasFactory;

    protected $table = 'jadwal';
    protected $fillable = ['hari', 'jam', 'ruang', 'terisi'];
    public $timestamps = false;

    public function praktikum()
    {
        return $this->hasOne(Praktikum::class, 'id_jadwal');
    }
}