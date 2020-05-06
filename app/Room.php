<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $fillable=['name','description','services','price','available'];

    public function bookings()
    {
        return $this->hasMany(Booking::class);

    }
}
