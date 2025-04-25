<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;


use Illuminate\Foundation\Auth\User as Authenticatable;

class Retailers extends Authenticatable
{    
    use HasFactory;


    protected $primaryKey = 'id';
    public $incrementing = false; // Desativa auto-incremento
    protected $keyType = 'string'; // Define que o tipo da chave é string (UUID)


    protected $fillable = [
        'name',
        'document_id',
        'email',
    ];

    protected $hidden = [
        'password'
    ];
}
