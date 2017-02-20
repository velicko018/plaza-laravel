<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class RoomMetas extends Eloquent
{
    protected $fillable = [
        'breakfast',
        'air_condition',
        'free_parking',
        'room_service',
        'gym',
        'tv',
        'wi-fi',
        'elevator'
    ];
}
