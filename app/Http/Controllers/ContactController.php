<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactMessageRequest;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;


class ContactController extends Controller
{
    function index()
    {
        return view('contact');
    }

    function submitContact(ContactMessageRequest $request)
    {
        $contacts = new Contact();
        $contacts->name = $request->name;
        $contacts->email = $request->email;
        $contacts->subject = $request->subject;
        $contacts->message = $request->message;
        $contacts->save();
        // return redirect()->route('contact.message');



        // Contact::create($request->validate());
        // return redirect()->route('contact.message');
        return response()->json(['success' => true, 'message' => 'Form submitted successfully!']);


        // dd($request->all());
        // echo $request->name;
        // dd(request()->all());
    }
    function message()
    {
        $messages = Contact::all();
        return view('message', compact('messages'));
    }
}
