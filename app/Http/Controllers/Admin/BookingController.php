<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Pricing;
use App\Models\User;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders=Booking::get();
        return view('admin.pages.orders.index',compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users=User::get();
        $offers=Pricing::get();
        return view('admin.pages.orders.create',compact('users','offers'));
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
            'address'=>['required'],
            'user_id'=>['nullable'],
            'pricing_id'=>['nullable'],


        ]);


        Booking::create([
            'fname'=>$validation['fname'],
            'lname'=>$validation['lname'],
            'email'=>$validation['email'],
            'phone'=>$validation['phone'],
            'company_name'=>$validation['company_name'],
            'address'=>$validation['address'],
            'user_id'=>$validation['user_id'],
            'pricing_id'=>$validation['pricing_id'],


        ]);
        return back()->with('success','created successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $order=Booking::findOrFail($id);

        return view('admin.pages.orders.show',compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $order=Booking::findOrFail($id);
        $users=User::get();
        return view('admin.pages.orders.edit',compact('order','users'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $order=Booking::findOrFail($id);

        $validation=$request->validate([
            'fname'=>['required','min:3','max:20'],
            'lname'=>['required','min:3','max:20'],
            'email'=>['required','email'],
            'phone'=>['nullable'],
            'company_name'=>['nullable'],
            'address'=>['required'],
            'user_id'=>['nullable'],

        ]);


        $order->update([
            'fname'=>$validation['fname'],
            'lname'=>$validation['lname'],
            'email'=>$validation['email'],
            'phone'=>$validation['phone'],
            'company_name'=>$validation['company_name'],
            'address'=>$validation['address'],
            'user_id'=>$validation['user_id'],
        ]);

        return back()->with('success','updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $order=Booking::findOrFail($id);
        $order->delete();
        return back()->with('success','deleted successfully');
    }
}
