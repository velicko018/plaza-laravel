<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class RoomType extends Eloquent
{
    protected $fillable = [
        'max_guests',
        'total_rooms',
        'price',
        'name',
        'description'
    ];

    public function rooms()
    {
        return $this->hasMany(Room::class);
    }
}
