<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materi extends Model
{
    use HasFactory;

    protected $table = 'materi';
    protected $fillable = ['id_praktikum', 'judul', 'slug', 'nama_file', 'path_file', 'ukuran_file', 'extension_file'];

    public function praktikum()
    {
        return $this->belongsTo(Praktikum::class, 'id_praktikum');
    }
}
