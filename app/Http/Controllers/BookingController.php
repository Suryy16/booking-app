<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    public function book(Request $request)
    {
        // Validate input
        $validated = $request->validate([
            'booking_date' => 'required|date',
            'time_slot' => 'required|string',
        ]);

        // Create new booking record for the authenticated user
        $booking = new Booking();
        $booking->user_id = Auth::id(); // Assign the logged-in user's ID
        $booking->booking_date = $validated['booking_date'];
        $booking->time_slot = $validated['time_slot'];
        $booking->is_canceled = false; // Default value, assuming not canceled

        $booking->save();

        // Prepare data for receipt view
        $data = [
            'user' => Auth::user(),
            'booking' => $booking,
        ];

        // Redirect to receipt view with data
        return view('receipt', $data);
    }


    public function confirmPayment($id)
    {
        $booking = Booking::find($id);

        if (!$booking) {
            return response()->json(['error' => 'Booking not found'], 404);
        }

        $booking->is_paid = true;
        $booking->save();

        return response()->json(['message' => 'Payment confirmed', 'booking' => $booking]);
    }
}
