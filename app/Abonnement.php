<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Abonnement extends Model
{
    protected $fillable = [

        'client_id','product_id', 'expiration'

    ];
}
