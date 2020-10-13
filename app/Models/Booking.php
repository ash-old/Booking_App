<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Booking extends Model
{
    protected $table = 'bookings';

    public function table()
    {
        return $this->hasOne(Table::class, "id", "table_id");
    }

    public function status()
    {
        return $this->hasOne(BookingStatus::class, "id", "status_id");
    }
}