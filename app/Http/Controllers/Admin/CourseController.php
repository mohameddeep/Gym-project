<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Event;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $classes=Course::get();
        return view('admin.pages.classes.index',compact('classes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $events=Event::get();
        return view('admin.pages.classes.create',compact('events'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validation=$request->validate([
            'name'=>['required','min:3','max:20'],
            'course_descr'=>['nullable'],
            'place'=>['nullable'],
            'image'=>['required','image','mimes:png,jpg,jpeg,webp'],

        ]);
        $text=$request->file('image')->getClientOriginalExtension();
        $imagename='class'. time() . rand(100,10000) . '.' . $text;
        $request->file('image')->move(public_path('front/images/class'),$imagename);

        Course::create([
            'image'=>$imagename,
            'name'=>$validation['name'],
            'place'=>$validation['place'],
            'course_descr'=>$validation['course_descr'],

        ]);
        return back()->with('success','created successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $class=Course::findOrFail($id);

        return view('admin.pages.classes.show',compact('class'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $class=Course::findOrFail($id);
        return view('admin.pages.classes.edit',compact('class'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $class=Course::findOrFail($id);

        $validation=$request->validate([
            'name'=>['required','min:3','max:20'],
            'course_descr'=>['nullable'],
            'place'=>['nullable'],
            'image'=>['required','image','mimes:png,jpg,jpeg,webp'],

        ]);
        $text=$request->file('image')->getClientOriginalExtension();
        $imagename='class'. time() . rand(100,10000) . '.' . $text;
        $request->file('image')->move(public_path('front/images/class'),$imagename);


        $class->update([
            'image'=>$imagename,
            'name'=>$validation['name'],
            'course_descr'=>$validation['course_descr'],
            'place'=>$validation['place'],

        ]);

        return back()->with('success','updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $class=Course::findOrFail($id);
        $class->delete();
        return back()->with('success','deleted successfully');
    }
}
