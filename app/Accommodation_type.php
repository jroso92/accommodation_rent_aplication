<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Accommodation_type extends Model
{
    protected $fillable = [
        'name',
    ];

    public function accommodations() {return $this->hasMany(Accommodation::class);}

}
