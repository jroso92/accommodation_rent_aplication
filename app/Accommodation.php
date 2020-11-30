<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Accommodation extends Model
{
    protected $fillable = [
        'name',
        'description',
        'address',
        'room_count',
        'bed_count',
        'max_person_count',
        'is_available',
        'price_per_night',
        'type_id',
        'city_id'
    ];
}
