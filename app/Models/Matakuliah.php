<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matakuliah extends Model
{
    use HasFactory;

    protected $table = 'matakuliah';
    protected $fillable = ['kd_mk', 'nama', 'kelas'];

    public function aslab()
    {
        return $this->belongsToMany(Aslab::class, 'aslab_matakuliah', 'id_matakuliah', 'npm');
    }
}
