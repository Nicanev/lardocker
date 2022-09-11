<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    public function flights()
    {
        return $this->belongsToMany(Flight::class, 'booking_flights');
    }

    public function passengers()
    {
        return $this->hasMany(Passenger::class);
    }

    protected $fillable = [
        'code'
    ];
}
