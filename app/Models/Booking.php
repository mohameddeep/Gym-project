<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;


    protected $fillable = [
        'fname',
        'lname',
        'email',
        'address',
        'company_name',
        'phone',
        'user_id',
        'pricing_id',
        'card_number',
        'card_name',
        'epiration_date',
        'security_code',
        'payment',
    ];


    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
    public function pricing(){
        return $this->belongsTo(Pricing::class,'pricing_id');
    }

}
