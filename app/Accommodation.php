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
        'accommodation_type_id',
        'city_id'
    ];
    public function review() {return $this->hasMany(Review::class);}

    public function accommodationType() {return $this->belongsTo(Accommodation_type::class, "accommodation_type_id");}

    public function city() {return $this->belongsTo(City::class);}

    public function bookings() {return $this->hasMany(Booking::class);}

    public function contents() {return $this->belongsToMany(Content::class);}

    public function activities() {return $this->belongsToMany(Activity::class);}

}
