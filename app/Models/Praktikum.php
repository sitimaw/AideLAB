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

    public function aslab()
    {
        return $this->belongsToMany(Aslab::class, 'aslab_praktikum', 'id_praktikum', 'npm');
    }

    public function matakuliah()
    {
        return $this->belongsTo(Matakuliah::class, 'id_matakuliah');
    }

    public function jadwal()
    {
        return $this->belongsTo(Jadwal::class, 'id_jadwal');
    }

    public function praktikan()
    {
        return $this->belongsToMany(Praktikan::class, 'praktikan_praktikum', 'id_praktikum', 'npm')
                    ->withPivot(['nilai_absen', 'nilai_tugas', 'nilai_uts', 'nilai_uas']);
    }

    public function persentaseNilai()
    {
        return $this->hasOne(PersentaseNilai::class, 'id_praktikum');
    }

    public function materi()
    {
        return $this->hasMany(Materi::class, 'id_praktikum');
    }
}