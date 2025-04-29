<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Wallets extends Model
{

    public $incrementing = false;
    protected $keyType = 'string';


    protected $fillable = [
        'user_id',
        'retailer_id',
        'balance'
    ];

    protected static function boot(){
        parent::boot();
        static::creating(function ($model) {
            $model->id = (string) \Illuminate\Support\Str::uuid();
        });
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(Users::class, 'user_id', 'id');
    }

   public function retailer(): BelongsTo
   {
       return $this->belongsTo(Retailers::class, 'retailer_id', 'id'); 
   }
}
