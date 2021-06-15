<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Dosen extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $guard = 'dosen';

    protected $fillable = ['nip', 'nama', 'password', 'no_hp', 'email', 'path_foto'];

    protected $hidden = ['password'];

    protected $table = 'dosen';
    protected $primaryKey = 'nip';
    public $incrementing = false;

    public function matakuliah()
    {
        return $this->belongsToMany(Matakuliah::class, 'dosen_matakuliah', 'nip', 'id_matakuliah');
    }
}
