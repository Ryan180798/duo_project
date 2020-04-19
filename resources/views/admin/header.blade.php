@extends('adminlte::page')

@section('content')

@include('templates.nav')

<div class="container">
    <h1 class="text-center ">Section header</h1>  
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Dashboard</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                <li class="breadcrumb-item active">Section Header</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <form action="{{route('header.update')}}" method="POST" enctype="multipart/form-data">
    @csrf

        <div class="form-group">
            <label for="image">image de Header:</label>
            <input type="file" name="image" id="image" class="form-control" >
            @if (!empty($header) != null)
                <img src="{{asset('storage/'.$header->img_path)}}" alt=""/>
            @endif
        </div>

        <button type="submit" class="btn btn-primary">Modifier</button>

    </form>
</div>

@endsection