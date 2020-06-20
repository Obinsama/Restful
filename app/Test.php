<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [

        'transaction_id', 'client_id', 'unique_id', 'numero_tel', 'montant', 'motif', 'date_et_heure', 'statut'

    ];


}
