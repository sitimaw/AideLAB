<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PraktikanPraktikum extends Model
{
    use HasFactory;

    protected $table = 'praktikan_praktikum';
    protected $fillable = ['nilai_absen', 'nilai_tugas', 'nilai_uts', 'nilai_uas'];
    public $timestamps = false;
    protected $casts = [
        'nilai_absen' => 'array',
        'nilai_tugas' => 'array',
    ];
}
