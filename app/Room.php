<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Room extends Eloquent
{
    protected $fillable = [
        'number',
        'floor'
    ];

    public function reservations()
    {
        return $this->embedsMany(Reservation::class);
    }

    public function roomType()
    {
        return $this->belongsTo(RoomType::class);
    }

    public function comments()
    {
        return $this->embedsMany(Comment::class);
    }

    public function metas()
    {
        return $this->embedsOne(RoomMetas::class);
    }
}
