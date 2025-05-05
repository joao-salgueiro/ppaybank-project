<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Wallets;


use Illuminate\Foundation\Auth\User as Authenticatable;

class Retailers extends Authenticatable
{    
    use HasFactory;


    public $incrementing = false; 


    protected $fillable = [
        'id',
        'name',
        'document_id',
        'email',
        'password'
    ];

    protected $hidden = [
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

    // protected static function boot()
    // {
    //     parent::boot();

    //     static::creating(function ($model) {
    //         if (empty($model->id)) {
    //             $model->id = (string) \Illuminate\Support\Str::uuid();
    //         }
    //     });
    // }

    public function wallet()
    {
        return $this->hasOne(Wallets::class, 'retailer_id', 'id');
    }
}
