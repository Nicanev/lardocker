<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Passenger extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'phone',
        'document_number',
        'birth_date'
    ];

    public function booking()
    {
        return $this->belongsTo(Booking::class);
    }
}
