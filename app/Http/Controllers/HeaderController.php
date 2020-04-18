<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Header;

class HeaderController extends Controller
{
    public function edit(){

        $header = Header::find(1);

        if ($header != null) {
            return view('admin.header', compact('header'));
         } 
            else {
            return view('admin.header');
            }


        return view('admin.header');
}

public function update(){

    $header = Header::find(1);

    if ($header != null) {
        //pour modifier
        if (request('image') != null) {
            $header->img_path = request('image')->store('img');
        }


        $header->save();
        return redirect()->route('admin');
     } 
        else {
            $header = new Header();
            $header->img_path = request('image')->store('img');    
            $header->save();
            return redirect()->route('admin');
        }




}
}
