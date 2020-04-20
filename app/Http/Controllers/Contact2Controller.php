<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact2;

class Contact2Controller extends Controller
{
    public function edit(){

        $contact2 = Contact2::find(1);

        if ($contact2 != null) {
            return view ('admin.contact2',compact('contact2'));
        } else {
            return view ('admin.contact2');
        }   
    }

    public function update(){

        $contact2 = Contact2::find(1);

        if ($contact2 != null) {
            $contact2->adresse = request('adresse');
            $contact2->email = request('email');
            $contact2->telephone = request('telephone');
    
            $contact2->save();
    
            return redirect()->route('admin');
        } else {
            $contact2 = New contact2(); 
            
            $contact2->adresse = request('adresse');
            $contact2->email = request('email');
            $contact2->telephone = request('telephone');
    
            $contact2->save();
    
            return redirect()->route('admin');
        }
    }   
}

