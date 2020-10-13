<?php

namespace Database\Seeders;

use App\Models\BookingStatus;
use Illuminate\Database\Seeder;

class AddBookingStatuses extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $statuses = BookingStatus::STATUSES;

        foreach ($statuses as $status) {
            $bookingStatus = new BookingStatus();
            $bookingStatus->name = $status['name'];
            $bookingStatus->title = $status['title'];
            $bookingStatus->save();
        }
    }

    
}
