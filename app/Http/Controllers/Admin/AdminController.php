<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $admins=Admin::get();
        return view('admin.pages.admins.index',compact('admins'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.admins.create');
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
            'image'=>['required','image','mimes:png,jpg,jpeg,webp'],

        ]);
        $text=$request->file('image')->getClientOriginalExtension();
        $imagename='admin'. time() . rand(100,10000) . '.' . $text;
        $request->file('image')->move(public_path('front/images/admin'),$imagename);

        Admin::create([
            'image'=>$imagename,
            'name'=>$validation['name'],
            'email'=>$validation['email'],
            'phone'=>$validation['phone'],
            'password'=>$validation['password'],
        ]);
        return back()->with('success','created successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $admin=Admin::findOrFail($id);

        return view('admin.pages.admins.show',compact('admin'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $admin=Admin::findOrFail($id);
        return view('admin.pages.admins.edit',compact('admin'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $admin=Admin::findOrFail($id);

        $validation=$request->validate([
            'name'=>['required','min:3','max:20'],
            'email'=>['required','email','unique:trainers,email'],
            'phone'=>['nullable'],
            'password'=>['required','min:5','max:20'],
            'image'=>['required','image','mimes:png,jpg,jpeg,webp'],

        ]);
        $text=$request->file('image')->getClientOriginalExtension();
        $imagename='admin'. time() . rand(100,10000) . '.' . $text;
        $request->file('image')->move(public_path('front/images/admin'),$imagename);


        $admin->update([
            'image'=>$imagename,
            'name'=>$validation['name'],
            'email'=>$validation['email'],
            'phone'=>$validation['phone'],
            'password'=>$validation['password'],
        ]);

        return back()->with('success','updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $admin=Admin::findOrFail($id);
        $admin->delete();
        return back()->with('success','deleted successfully');
    }
}
