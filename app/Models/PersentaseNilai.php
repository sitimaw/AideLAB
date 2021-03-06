<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersentaseNilai extends Model
{
    use HasFactory;

    protected $table = 'persentase_nilai';
    protected $fillable = ['id_praktikum', 'absen', 'tugas', 'uts', 'uas'];
    public $timestamps = false;

    public function praktikum()
    {
        return $this->belongsTo(Praktikum::class, 'id_praktikum');
    }
}
