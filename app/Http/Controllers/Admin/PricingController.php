<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pricing;
use App\Models\User;
use Illuminate\Http\Request;

class PricingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $offers=Pricing::get();
        return view('admin.pages.pricing.index',compact('offers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users=User::get();
        return view('admin.pages.pricing.create',compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validation=$request->validate([
            'duration'=>['required'],
            'price'=>['required'],
            'options'=>['nullable'],


        ]);


        Pricing::create([
            'duration'=>$validation['duration'],
            'price'=>$validation['price'],
            'options'=>$validation['options'],
    

        ]);
        return back()->with('success','created successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $offer=Pricing::findOrFail($id);

        return view('admin.pages.pricing.show',compact('offer'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $offer=Pricing::findOrFail($id);
        return view('admin.pages.pricing.edit',compact('offer'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $offer=pricing::findOrFail($id);

        $validation=$request->validate([
            'duration'=>['required'],
            'price'=>['required'],
            'options'=>['nullable'],

        ]);


        $offer->update([
            'duration'=>$validation['duration'],
            'price'=>$validation['price'],
            'options'=>$validation['options'],

        ]);

        return back()->with('success','updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $offer=Pricing::findOrFail($id);
        $offer->delete();
        return back()->with('success','deleted successfully');
    }
}
