<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Testimonials;
use Illuminate\Support\Facades\Storage;

class TestimonialsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimonials = Testimonials::all();

        return view('testimonials.index',compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('testimonials.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $testimonial = new Testimonials();

        $testimonial->img_path=request('img')->store('img');
        $testimonial->name=request('name');
        $testimonial->entreprise=request('entreprise');
        $testimonial->temoignage=request('temoignage');

        $testimonial->save();

        return redirect()->route('testimonials.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $testimonial = Testimonials::find($id);

        return view('testimonials.edit',compact('testimonial'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $testimonial = Testimonials::find($id);

        if (!request('img')==null) {
            Storage::delete($testimonial->img_path);
            $testimonial->img_path=request('img')->store('img');
        }

        $testimonial->name=request('name');
        $testimonial->entreprise=request('entreprise');
        $testimonial->temoignage=request('temoignage');

        $testimonial->save();

        return redirect()->route('testimonials.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $testimonial=Testimonials::find($id);

       Storage::delete($testimonial->img_path);

       $testimonial->delete();

       return redirect()->back();
    }
}
