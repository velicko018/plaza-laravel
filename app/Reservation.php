<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Reservation extends Eloquent
{
    protected $fillable = [
        'number_of_guests',
        'arrival_date',
        'departure_date',
        'status'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function room()
    {
        return $this->belongsTo(Room::class);
    }
}
