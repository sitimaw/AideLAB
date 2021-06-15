<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matakuliah extends Model
{
    use HasFactory;

    protected $table = 'matakuliah';
    protected $fillable = ['kd_mk', 'nama', 'kelas'];
    public $timestamps = false;

    public function aslab()
    {
        return $this->belongsToMany(Aslab::class, 'aslab_matakuliah', 'id_matakuliah', 'npm')
                    ->withPivot(['status']);
    }

    public function dosen()
    {
        return $this->belongsToMany(Dosen::class, 'dosen_matakuliah', 'id_matakuliah', 'nip');
    }

    public function praktikum()
    {
        return $this->hasOne(Praktikum::class, 'id_matakuliah');
    }
}
