<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Course;
use App\Models\Event;
use App\Models\Gallery;
use App\Models\Partner;
use App\Models\Pricing;
use App\Models\Trainer;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PricingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $classes=Course::get();
        $trainers=Trainer::get();
        $events=Event::get();
        $galleries=Gallery::get();
        $partners=Partner::get();
        $offers=Pricing::get();
        $users=User::get();
        return view('front.pages.pricing',compact('classes','trainers','events','galleries','partners','offers','users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validation=$request->validate([
            'fname'=>['required','min:3','max:20'],
            'lname'=>['required','min:3','max:20'],
            'email'=>['required','email'],
            'phone'=>['nullable'],
            'company_name'=>['nullable'],
            'payment'=>['nullable'],
            'card_number'=>['nullable'],
            'card_name'=>['nullable'],
            'epiration_date'=>['nullable'],
            'security_code'=>['nullable'],
            'address'=>['required'],



        ]);


        Booking::create([
            'fname'=>$validation['fname'],
            'lname'=>$validation['lname'],
            'email'=>$validation['email'],
            'phone'=>$validation['phone'],
            'company_name'=>$validation['company_name'],
            'payment'=>$validation['payment'],
            'card_number'=>$validation['card_number'],
            'card_name'=>$validation['card_name'],
            'epiration_date'=>$validation['epiration_date'],
            'security_code'=>$validation['security_code'],
            'address'=>$validation['address'],
            'user_id'=>Auth::user()->id,


        ]);
        return back()->with('success','created successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
