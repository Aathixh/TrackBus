<?php

namespace App\Http\Controllers;

use App\Models\book;
use Illuminate\Http\Request;

class BookingControler extends Controller
{
    //
    public function search(Request $request)
    {
        $from_address = $request->input('from_address');
        $to_address = $request->input('to_address');

        // Query the database with the addresses
        $buses = book::where('from_address', $from_address)
            ->where('to_address', $to_address)
            ->get();

        // Pass the data to the view
        return view('book', ['buses' => $buses]);
    }
}
