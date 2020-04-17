@extends('adminlte::page')

@section('content')


@include('templates.nav')


<div class="container mt-5 pt-5">
    <h1 class="text-center mt-5 pt-5">tous mes portfolios</h1>

    <a href="{{route('portfolio.create')}}">Ajout</a>
    <table class='table'>
        <thead>
            <tr>
                <th scope="col">Nom</th>
                <th scope="col">Image</th>
                <th scope="col">Description</th>
                <th>Action</th>
            </tr>
        </thead>

        @foreach ($portfolios as $portfolio)
            <tbody>
                <td>{{$portfolio->nom}}</td>
                <td><img src="{{'storage/'.$portfolio->img_path}}"/></td>
                <td>{{$portfolio->description}}></td>
                <td>
                    <a href="{{route('portfolio.edit',$portfolio->id)}}">
                        <button class="btn btn-primary">Modifier</button>
                        </a>
                    <button class="btn btn-danger">Supprimer</button>
                </td>
        
        @endforeach
    </tbody>
    </table>
</div>


@endsection