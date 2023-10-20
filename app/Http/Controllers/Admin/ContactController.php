<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contacts=Contact::get();
        return view('admin.pages.contacts.index',compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.contacts.create');
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
        $contact=Contact::findOrFail($id);

        return view('admin.pages.contacts.show',compact('contact'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $contact=Contact::findOrFail($id);
        return view('admin.pages.contacts.edit',compact('contact'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $contact=Contact::findOrFail($id);

        $validation=$request->validate([
            'name'=>['required','min:3','max:20'],
            'email'=>['required','email'],
            'subject'=>['required'],
            'message'=>['nullable'],

        ]);



        $contact->update([
            'name'=>$validation['name'],
            'email'=>$validation['email'],
            'subject'=>$validation['subject'],
            'message'=>$validation['message'],
        ]);

        return back()->with('success','updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $contact=Contact::findOrFail($id);
        $contact->delete();
        return back()->with('success','deleted successfully');
    }
}
