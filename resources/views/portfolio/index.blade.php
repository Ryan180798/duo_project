@extends('adminlte::page')

@section('content')


@include('templates.nav')


<div class="container ">
    <h1 class="text-center">Tous mes portfolios</h1>
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Dashboard</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                <li class="breadcrumb-item active">Section Portfolios</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

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
                <td>{{$portfolio->description}}</td>
                <td>
                    <a href="{{route('portfolio.edit',$portfolio->id)}}">
                        <button class="btn btn-primary">Modifier</button>
                        </a>
                    <form action="{{route('portfolio.destroy',$portfolio->id)}}" method="post">
                      @csrf
                      @method('delete')
                        <button class="btn btn-danger">Supprimer</button>
                    </form>
                </td>
        
        @endforeach
    </tbody>
    </table>
</div>


@endsection