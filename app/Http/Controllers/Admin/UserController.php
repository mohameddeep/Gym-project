<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Trainer;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users=User::get();
        return view('admin.pages.users.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()

    {
        $trainers=Trainer::get();
        return view('admin.pages.users.create',compact('trainers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validation=$request->validate([
            'fname'=>['required','min:3','max:20'],
            'lname'=>['required','min:3','max:20'],
            'email'=>['required','email','unique:trainers,email'],
            'phone'=>['nullable'],
            'password'=>['required','min:5','max:20'],
            'trainer_id'=>['nullable'],
            'image'=>['required','image','mimes:png,jpg,jpeg,webp'],

        ]);
        $text=$request->file('image')->getClientOriginalExtension();
        $imagename='user'. time() . rand(100,10000) . '.' . $text;
        $request->file('image')->move(public_path('front/images/user'),$imagename);

        User::create([
            'image'=>$imagename,
            'fname'=>$validation['fname'],
            'lname'=>$validation['lname'],
            'email'=>$validation['email'],
            'phone'=>$validation['phone'],
            'password'=>$validation['password'],
            'trainer_id'=>$validation['trainer_id'],
        ]);
        return back()->with('success','created successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user=User::findOrFail($id);

        return view('admin.pages.users.show',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user=User::findOrFail($id);
        $trainers=Trainer::get();

        return view('admin.pages.users.edit',compact('user','trainers'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user=User::findOrFail($id);

        $validation=$request->validate([
            'fname'=>['required','min:3','max:20'],
            'lname'=>['required','min:3','max:20'],
            'email'=>['required','email','unique:trainers,email'],
            'phone'=>['nullable'],
            'password'=>['required','min:5','max:20'],
            'trainer_id'=>['nullable'],
            'image'=>['required','image','mimes:png,jpg,jpeg,webp'],

        ]);
        $text=$request->file('image')->getClientOriginalExtension();
        $imagename='user'. time() . rand(100,10000) . '.' . $text;
        $request->file('image')->move(public_path('front/images/user'),$imagename);


        $user->update([
            'image'=>$imagename,
            'fname'=>$validation['fname'],
            'lname'=>$validation['lname'],
            'email'=>$validation['email'],
            'phone'=>$validation['phone'],
            'password'=>$validation['password'],
            'trainer_id'=>$validation['trainer_id'],
        ]);

        return back()->with('success','updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user=User::findOrFail($id);
        $user->delete();
        return back()->with('success','deleted successfully');
    }
}
