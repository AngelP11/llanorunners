<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Competitor extends Model
{
    protected $fillable = [
    	'name',
    	'identification',
    	'birthdate',
    	'gender',
    	'telephone',
    	'email',
    	'club',
        'amount',
    	'references_number',
    	'payment_date',
    ];
}
