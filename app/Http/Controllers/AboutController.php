<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\About;

class AboutController extends Controller
{
    public function edit(){
        
        $about = About::find(1);

        if ($about != null) {
            return view('admin.about', compact('about'));
         } 
            else {
            return view('admin.about');
            }


        return view('admin.about');
    }



    public function update(){

        $about = About::find(1);

        if ($about != null) {


                if(request('image_gauche') != null){
                    $about->img_gauche = request('image_gauche')->store('img');
                }


                $about->text_droite = request('text_droite');
        
                $about->save();
                return redirect()->route('admin');
            }
            else {
                $about = new About();

                $about->img_gauche = request('image_gauche')->store('img');
                $about->text_droite = request('text_droite');
        
                $about->save();
        
                return redirect()->route('admin');

            }
}
}
