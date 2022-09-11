<?php

namespace App\Http\Controllers;

use App\Http\Resources\BookingResource;
use App\Models\Booking;
use App\Models\Flight;
use App\Models\Passenger;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BookingController extends Controller
{
    public function createBooking(Request $request)
    {
        $booking = Booking::create([
            'code' => Str::random(5)
        ]);
        $flights = Flight::find([$request->flight_from['id'], $request->flight_back['id']]);
        $booking->flights()->attach($flights);

        $booking->passengers()->createMany($request->passengers);

        return BookingResource::make($booking);
    }
}
