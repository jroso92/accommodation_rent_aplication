<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = [
        'review',
        'accommodation_id'
    ];

    public function accommodation() {return $this->belongsTo(Accommodation::class);}

}
