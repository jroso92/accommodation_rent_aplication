<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [
        'reserved_at',
        'reserved_until',
        'adult_no',
        'child_no',
        'price',
        'accommodation_id'
    ];
}
