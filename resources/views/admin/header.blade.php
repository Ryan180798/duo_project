@extends('layout.app')

@section('content')

@include('templates.nav')

<div class="container mt-5 pt-5">
    <h1 class="text-center mt-5 pt-5">Section header</h1>  

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