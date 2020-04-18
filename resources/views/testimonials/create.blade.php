@extends('adminlte::page')

@section('content')

    <div class="container mt-5 pt-5">
        <h1 class="text-center mt-5 pt-5">Add a Testimonial</h1>
        <form action="{{route('testimonials.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="img">Profil Picture</label>
                <input type="file" name="img" id='img' class="form-control">
            </div>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id='name' class="form-control">
            </div>
            <div class="form-group">
                <label for="entreprise">Entreprise</label>
                <input type="text" name="entreprise" id='entreprise' class="form-control">
            </div>
            <div class="form-group">
                <label for="temoignage">Temoignage</label>
                <textarea name="temoignage" id="temoignage" cols="30" rows="10"></textarea>
            </div>
            <button type="submit" class="d-block mx-auto btn btn-primary">submit</button>
        </form>
       
    </div>
    
@endsection