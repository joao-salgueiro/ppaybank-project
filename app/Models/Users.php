<?php

namespace App\Models;


use App\Models\Wallets;
use Illuminate\Foundation\Auth\User as Authenticatable; // <-- importante
use Illuminate\Database\Eloquent\Model;

class Users extends Authenticatable  {

    public $incrementing = false;


    protected $fillable = [
        'id',
        'name',
        'document_id',
        'email',
        'password'
    ];

    protected static function booted(): void
    {
        static::created(function ($user) {
            $user->wallet()->create([
                'balance' => 0,
            ]);
        });
    }

    protected $hidden = [
        'password'
    ];

    public function wallet()
    {
        return $this->hasOne(Wallets::class, 'user_id', 'id');
    }
}
