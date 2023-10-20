<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;


    protected $fillable=[
        'name',
        'image',
        'place',
        'course_descr',
    ];

    public function trainers(){
        return $this->hasMany(Trainer::class);
    }
    public function event(){
        return $this->belongsTo(Event::class);
    }
}
