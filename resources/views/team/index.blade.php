@extends('adminlte::page')

@section('content')

<div class="container">
    <h1 class="text-center">La Team</h1>
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Dashboard</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                <li class="breadcrumb-item active">Section Team</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>


    @if (count($teams)<4)
        <a href="{{route('team.create')}}">Ajout</a>
    @endif
    

    <table class='table'>
        <thead>
            <tr>
                <th scope="col">Nom</th>
                <th scope="col">Image</th>
                <th scope="col">Description</th>
                <th>Action</th>
            </tr>
        </thead>

        @foreach ($teams as $team)
            <tbody>
                <td>{{$team->nom}}</td>
                <td><img src="{{asset('storage/'.$team->img_path)}}"/></td>
                <td>{{$team->description}}></td>
                <td>
                    <a href="{{route('team.edit',$team->id)}}">
                        <button class="btn btn-primary">Modifier</button>
                        </a>
                    <form action="{{route('team.destroy',$team->id)}}" method="POST">
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