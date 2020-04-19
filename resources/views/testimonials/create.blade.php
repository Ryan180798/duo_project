@extends('adminlte::page')

@section('content')
<div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Dashboard</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                <li class="breadcrumb-item active">Add Testimonials</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <div class="container ">
        <h1 class="text-center ">Add a Testimonial</h1>
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