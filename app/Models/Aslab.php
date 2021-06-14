<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Aslab extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $guard = 'aslab';

    protected $fillable = ['npm', 'nama', 'password', 'no_hp', 'email', 'path_foto'];

    protected $hidden = ['password'];

    protected $table = 'aslab';
    protected $primaryKey = 'npm';
    public $incrementing = false;
}
