<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $galleries=Gallery::get();
        return view('admin.pages.gallery.index',compact('galleries'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.gallery.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validation=$request->validate([
            'status'=>['required','in:0,1'],
            'image'=>['required','image','mimes:png,jpg,jpeg,webp'],

        ]);
        $text=$request->file('image')->getClientOriginalExtension();
        $imagename='galley'. time() . rand(100,10000) . '.' . $text;
        $request->file('image')->move(public_path('front/images/gallery'),$imagename);

        Gallery::create([
            'image'=>$imagename,
            'status'=>$validation['status'],

        ]);
        return back()->with('success','created successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $gallery=Gallery::findOrFail($id);

        return view('admin.pages.gallery.show',compact('gallery'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $gallery=Gallery::findOrFail($id);
        return view('admin.pages.gallery.edit',compact('gallery'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $gallery=Gallery::findOrFail($id);

        $validation=$request->validate([
            'status'=>['required','in:0,1'],
            'image'=>['required','image','mimes:png,jpg,jpeg,webp'],


        ]);
        $text=$request->file('image')->getClientOriginalExtension();
        $imagename='gallery'. time() . rand(100,10000) . '.' . $text;
        $request->file('image')->move(public_path('front/images/gallery'),$imagename);


        $gallery->update([
            'image'=>$imagename,
            'status'=>$validation['status'],

        ]);

        return back()->with('success','updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $gallery=Gallery::findOrFail($id);
        $gallery->delete();
        return back()->with('success','deleted successfully');
    }
}
