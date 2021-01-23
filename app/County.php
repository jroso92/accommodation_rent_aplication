<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class County extends Model
{
    protected $fillable = [
        'name',
        'county_id',
    ];

    public function cities() {return $this->hasMany(City::class);}
}
