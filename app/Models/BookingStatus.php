<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class BookingStatus extends Model
{
    protected $table = 'booking_statuses';

    const STATUS_COMPLETED = [
        "name" => "completed",
        "title" => "Completed"
    ];
    const STATUS_CANCELLED = [
        "name" => "cancelled",
        "title" => "Cancelled"
    ];
    const STATUS_MOVED = [
        "name" => "moved",
        "title" => "Moved"
    ];

    const STATUSES = [
        self::STATUS_COMPLETED,
        self::STATUS_CANCELLED,
        self::STATUS_MOVED
    ];
}