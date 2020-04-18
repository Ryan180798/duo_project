@extends('adminlte::page')

@section('content')

    <div class="container mt-5 pt-5">
        <h1 class="text-center mt-5 pt-5">Add a Testimonial</h1>
        <form action="{{route('testimonials.update',$testimonial->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="form-group">
                <label for="img">Profil Picture</label>
                <input type="file" name="img" id='img' class="form-control" value="{{$testimonial->img_path}}">
            </div>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id='name' class="form-control" value="{{$testimonial->name}}">
            </div>
            <div class="form-group">
                <label for="entreprise">Entreprise</label>
                <input type="text" name="entreprise" id='entreprise' class="form-control" value="{{$testimonial->entreprise}}">
            </div>
            <div class="form-group">
                <label for="temoignage">Temoignage</label>
                <textarea name="temoignage" id="temoignage" cols="30" rows="10">{{$testimonial->temoignage}}</textarea>
            </div>
            <button type="submit" class="d-block mx-auto btn btn-primary">submit</button>
        </form>
       
    </div>
    
@endsection