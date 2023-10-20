<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $events=Event::get();
        return view('admin.pages.event.index',compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.event.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validation=$request->validate([
            'topic'=>['required'],
            'event_descr'=>['required'],
            'event_date'=>['required','date_format:Y-m-d'],
            'event_time'=>['required'],
            'image'=>['required','image','mimes:png,jpg,jpeg,webp'],



        ]);
        $text=$request->file('image')->getClientOriginalExtension();
        $imagename='event'. time() . rand(100,10000) . '.' . $text;
        $request->file('image')->move(public_path('front/images/event'),$imagename);


        Event::create([
            'topic'=>$validation['topic'],
            'event_descr'=>$validation['event_descr'],
            'image'=>$imagename,
            'event_date'=>$validation['event_date'],
            'event_time'=>$validation['event_time'],

        ]);
        return back()->with('success','created successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $event=Event::findOrFail($id);

        return view('admin.pages.event.show',compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $event=Event::findOrFail($id);
        return view('admin.pages.event.edit',compact('event'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $event=Event::findOrFail($id);

        $validation=$request->validate([
            'topic'=>['required'],
            'event_descr'=>['required'],
            'image'=>['required','image','mimes:png,jpg,jpeg,webp'],
            'event_date'=>['required','date_format:Y-m-d'],
            'event_time'=>['required'],

        ]);
        $text=$request->file('image')->getClientOriginalExtension();
        $imagename='event'. time() . rand(100,10000) . '.' . $text;
        $request->file('image')->move(public_path('front/images/event'),$imagename);



        $event->update([
            'topic'=>$validation['topic'],
            'event_descr'=>$validation['event_descr'],
            'image'=>$imagename,
            'event_date'=>$validation['event_date'],
            'event_time'=>$validation['event_time'],

        ]);

        return back()->with('success','updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $event=Event::findOrFail($id);
        $event->delete();
        return back()->with('success','deleted successfully');
    }
}
