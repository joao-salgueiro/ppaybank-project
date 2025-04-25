<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transactions extends Model
{
    protected $fillable = [
        'payer_id',
        'payee_id',
        'amount',
        'status',
        'timestamps'
    ];
}
