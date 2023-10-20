<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pricing extends Model
{
    use HasFactory;

    protected $fillable=[
        'duration',
        'price',
        'options',

    ];

    // public function user(){
    //     return $this->belongsTo(User::class,'user_id');
    // }

    public function bookings(){
        return $this->hasMany(Booking::class);
    }
}
