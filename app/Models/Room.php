<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Room extends Model
{
    protected $fillable=[
        'room_type',
        'number',
        'bed_type',
        'room_floor',
        'status',
        'rate',
        'discount',
        'picture',
        'facilities'
    ];
    public function bookings() :HasMany{
        return $this->hasMany(Booking::class);
    }
}
