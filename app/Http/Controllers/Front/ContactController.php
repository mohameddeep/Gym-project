<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Course;
use App\Models\Event;
use App\Models\Gallery;
use App\Models\Partner;
use App\Models\Trainer;
use Illuminate\Http\Request;

class ContactController extends Controller
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
        return view('front.pages.contact',compact('classes','trainers','events','galleries','partners'));
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
            'name'=>['required','min:3','max:20'],
            'email'=>['required','email'],
            'subject'=>['required'],
            'message'=>['nullable'],


        ]);


        Contact::create([
            'name'=>$validation['name'],
            'email'=>$validation['email'],
            'subject'=>$validation['subject'],
            'message'=>$validation['message'],
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
