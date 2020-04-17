@extends('layout.app')

@section('content')


@include('templates.nav')

<div class="container mt-5 pt-5">
    <h1 class="text-center mt-5 pt-5">Ajout d' un portfolio</h1>
    
    <form action="{{route('portfolio.update', $portfolio->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')

        <div class="form-group">
            <label for="nom">nom du portfolio:</label>
            <input type="text" id="nom" name="nom" class="form-control" value="{{$portfolio->nom}}">
        </div>
        
        <div class="form-group">
            <label for="img">image:</label>
            <input type="file" id="img" name="img" class="form-control" value="{{$portfolio->img_path}}">
        </div>

        <div class="form-group">
            <label for="description">description:</label>
            <textarea type="text" name="description" id="description" class="form-control" cols="30" rows="10">{{$portfolio->description}}</textarea>
        </div>

        <button type="submit" class="btn btn-primary d-block mx-auto">Modifier</button>
    </form>

</div>


@endsection 