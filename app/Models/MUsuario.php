<?php
/* ================================
        MODELO USUARIO ADMIN
============================== */

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MUsuario extends Model
{
    use HasFactory;
    protected $table = 'users';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
    ];
}