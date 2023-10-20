<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Trainer;
use Illuminate\Http\Request;

class TrainerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $trainers=Trainer::get();
        return view('admin.pages.trainers.index',compact('trainers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $classes=Course::get();
        return view('admin.pages.trainers.create',compact('classes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validation=$request->validate([
            'name'=>['required','min:3','max:20'],
            'email'=>['required','email','unique:trainers,email'],
            'phone'=>['nullable'],
            'password'=>['required','min:5','max:20'],
            'qualification'=>['required'],
            'description'=>['nullable'],
            'specality'=>['required'],
            'course_id'=>['nullable'],
            'image'=>['required','image','mimes:png,jpg,jpeg,webp'],

        ]);
        $text=$request->file('image')->getClientOriginalExtension();
        $imagename='trainer'. time() . rand(100,10000) . '.' . $text;
        $request->file('image')->move(public_path('front/images/trainer'),$imagename);

        Trainer::create([
            'image'=>$imagename,
            'name'=>$validation['name'],
            'email'=>$validation['email'],
            'phone'=>$validation['phone'],
            'password'=>$validation['password'],
            'qualification'=>$validation['qualification'],
            'description'=>$validation['description'],
            'specality'=>$validation['specality'],
            'course_id'=>$validation['course_id'],
        ]);
        return back()->with('success','created successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $trainer=Trainer::findOrFail($id);

        return view('admin.pages.trainers.show',compact('trainer'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $trainer=Trainer::findOrFail($id);
        $classes=Course::get();

        return view('admin.pages.trainers.edit',compact('trainer','classes'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $trainer=Trainer::findOrFail($id);

        $validation=$request->validate([
            'name'=>['required','min:3','max:20'],
            'email'=>['required','email','unique:trainers,email'],
            'phone'=>['nullable'],
            'password'=>['required','min:5','max:20'],
            'qualification'=>['required'],
            'description'=>['nullable'],
            'course_id'=>['nullable'],
            'specality'=>['required'],
            'image'=>['required','image','mimes:png,jpg,jpeg,webp'],

        ]);
        $text=$request->file('image')->getClientOriginalExtension();
        $imagename='trainer'. time() . rand(100,10000) . '.' . $text;
        $request->file('image')->move(public_path('front/images/trainer'),$imagename);


        $trainer->update([
            'image'=>$imagename,
            'name'=>$validation['name'],
            'email'=>$validation['email'],
            'phone'=>$validation['phone'],
            'password'=>$validation['password'],
            'qualification'=>$validation['qualification'],
            'description'=>$validation['description'],
            'course_id'=>$validation['course_id'],
            'specality'=>$validation['specality'],
        ]);

        return back()->with('success','updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $trainer=Trainer::findOrFail($id);
        $trainer->delete();
        return back()->with('success','deleted successfully');
    }
}
