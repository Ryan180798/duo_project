@extends('adminlte::page')

@section('content')

    {{-- @include('templates.navbar') --}}

    <div class="container">
        <h1 class="text-center">Edit Contact</h1>
        <div class="content-header">
            <div class="container-fluid">
              <div class="row mb-2">
                <div class="col-sm-6">
                  <h1 class="m-0 text-dark">Dashboard</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                  <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                    <li class="breadcrumb-item active">Section Contact</li>
                  </ol>
                </div><!-- /.col -->
              </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
       <form action="{{route('contact2.update')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="adresse">Adresse</label>
                <input type="text" name="adresse" id="adresse" class="form-control" value="{{!empty($contact2) ? $contact2->adresse : ''}}">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" name="email" id="email" class="form-control" value="{{!empty($contact2) ? $contact2->email : ''}}">
            </div>
            <div class="form-group">
                <label for="telephone">Telephone</label>
                <input type="text" name="telephone" id="telephone" class="form-control" value="{{!empty($contact2) ? $contact2->telephone : ''}}">
            </div>
            <button type="submit" class="btn btn-primary d-block mx-auto">Modifier</button>
           {{-- <button type="submit" class="d-block mx-auto btn btn-primary">Submit</button> --}}
       </form>
    </div>
    
@endsection