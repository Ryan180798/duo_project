@extends('adminlte::page')

@section('content')

<div class="container mt-5 pt-5">
    <h1 class="text-center mt-5 pt-5">La Team</h1>


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