<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable; // <-- importante
use Illuminate\Database\Eloquent\Model;

class Users extends Authenticatable  {

    public $incrementing = false;


    protected $fillable = [
        'id',
        'name',
        'document_id',
        'email',
    ];

    protected $hidden = [
        'password'
    ];
}
