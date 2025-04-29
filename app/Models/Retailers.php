<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Wallets;


use Illuminate\Foundation\Auth\User as Authenticatable;

class Retailers extends Authenticatable
{    
    use HasFactory;


    protected $primaryKey = 'id';
    public $incrementing = false; 
    protected $keyType = 'string'; 


    protected $fillable = [
        'name',
        'document_id',
        'email',
    ];

    protected $hidden = [
        'password'
    ];

    public function wallet()
    {
        return $this->hasOne(Wallets::class, 'retailer_id', 'id');
    }
}
