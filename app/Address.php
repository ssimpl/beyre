<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $table = 'address';

    protected $fillable = [
        'user_id', 'address1', 'address2', 'state', 'city', 'zip_code',
    ];
}