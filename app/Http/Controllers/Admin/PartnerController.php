<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Partner;
use Illuminate\Http\Request;

class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $partners=Partner::get();
        return view('admin.pages.partners.index',compact('partners'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.partners.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validation=$request->validate([
            'name'=>['nullable','min:3','max:20'],
            'status'=>['required','in:0,1'],
            'image'=>['required','image','mimes:png,jpg,jpeg,webp'],

        ]);
        $text=$request->file('image')->getClientOriginalExtension();
        $imagename='partner'. time() . rand(100,10000) . '.' . $text;
        $request->file('image')->move(public_path('front/images/partner'),$imagename);

        Partner::create([
            'image'=>$imagename,
            'name'=>$validation['name'],
            'status'=>$validation['status'],

        ]);
        return back()->with('success','created successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $partner=Partner::findOrFail($id);

        return view('admin.pages.partners.show',compact('partner'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $partner=Partner::findOrFail($id);
        return view('admin.pages.partners.edit',compact('partner'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $partner=Partner::findOrFail($id);

        $validation=$request->validate([
            'name'=>['nullable','min:3','max:20'],
            'status'=>['required','in:0,1'],
            'image'=>['required','image','mimes:png,jpg,jpeg,webp'],


        ]);
        $text=$request->file('image')->getClientOriginalExtension();
        $imagename='partner'. time() . rand(100,10000) . '.' . $text;
        $request->file('image')->move(public_path('front/images/partner'),$imagename);


        $partner->update([
            'image'=>$imagename,
            'name'=>$validation['name'],
            'status'=>$validation['status'],

        ]);

        return back()->with('success','updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $partner=Partner::findOrFail($id);
        $partner->delete();
        return back()->with('success','deleted successfully');
    }
}
