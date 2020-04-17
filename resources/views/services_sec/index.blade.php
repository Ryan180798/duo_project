@extends('adminlte::page')

@section('content')
    <div class="container">
        <h1 class="text-center mt-5 pt-5">Les services</h1>
        <a href="{{route('services.create')}}">
            <button class="btn btn-primary d-block mx-auto mb-5">Add</button>
        </a>
        <table class="table">
            <thead> 
                <tr>
                <th scope="col">Icon</th>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                </tr>
            </thead>
        <tbody>
            @foreach ($services as $service)
                <tr>
                    <td><i class="{{$service->icon_path}}"></i></td>
                    <td>{{$service->title}}</td>
                    <td>{{$service->description}}</td>
                    <td class="d-flex">
                        <a href="{{route('services.edit',$service->id)}}">
                            <button class="btn btn-warning">Edit</button>
                        </a>
                        <form action="{{route('services.destroy',$service->id)}}" method="post">
                            @csrf
                            @method('delete')
                                <button class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
        </table>

    </div>
    
@endsection