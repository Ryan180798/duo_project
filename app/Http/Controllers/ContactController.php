<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class ContactController extends Controller
{
    public function index(){
        $contacts=Contact::all();

        return view('admin.contact',compact('contacts'));
    }


    public function store(){
        $contact= new Contact();

        $contact->name=request('name');
        $contact->email=request('email');
        $contact->subject=request('subject');
        $contact->message=request('message');

        $contact->save();

        return redirect()->back();
    }
}
