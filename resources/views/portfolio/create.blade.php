@extends('layout.app')

@section('content')


@include('templates.nav')


<div class="container mt-5 pt-5">
    <h1 class="text-center mt-5 pt-5">tous mes portfolios</h1>


    <form action="{{route('portfolio.store')}}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="nom">nom du portfolio:</label>
            <input type="text" id="nom" name="nom" class="form-control">
        </div>
        
        <div class="form-group">
            <label for="img">image:</label>
            <input type="file" id="img" name="img" class="form-control">
        </div>

        <div class="form-group">
            <label for="description">description:</label>
            <textarea type="text" name="description" id="description" class="form-control" cols="30" rows="10"></textarea>
        </div>

        <button type="submit" class="btn btn-primary d-block mx-auto">Ajouter</button>
    </form>

</div>


@endsection