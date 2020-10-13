<?php

namespace App\Http\Controllers\Tables;

use App\Models\Table;
use App\Models\Booking;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TableController extends Controller
{

    public function __invoke(Request $request)
    {
        // $tables = Table::where("name", "Small Table")->first();
        // return $tables;
        $booking = Booking::where("id", 1)->first();
        $payload = [
            "booking" => $booking,
            "table" => $booking->table,
            "status" => $booking->status
        ];
        return $payload;
    }

}