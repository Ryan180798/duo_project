@extends('adminlte::page')

@section('content')

    <div class="container mt-5 pt-5">
        <h1 class="text-center mt-5 pt-5">Edit a Service</h1>
        <form action="{{route('services.update',$service->id)}}" method="POST">
            @csrf
            @method('put')
            <div class="form-group">
                <label for="name">Service Icon</label>
                <div>
                    @if ($service->icon_path=='fa fa-desktop')
                        <input type="radio" name="icon_path" id="" value="fa fa-desktop" checked>
                    @else
                        <input type="radio" name="icon_path" id="" value="fa fa-desktop">
                    @endif
                        <i class="fa fa-desktop"> Web Development</i>
                </div>
                <div>
                    @if ($service->icon_path=='fas fa-chart-bar')
                        <input type="radio" name="icon_path" id="" value="fas fa-chart-bar" checked>
                    @else
                        <input type="radio" name="icon_path" id="" value="fas fa-chart-bar">
                    @endif
                        <i class="fas fa-chart-bar"> : Analytics</i>
                </div>
                <div>
                    @if ($service->icon_path=='fas fa-pencil-ruler')
                        <input type="radio" name="icon_path" id="" value="fas fa-pencil-ruler" checked>
                    @else
                        <input type="radio" name="icon_path" id="" value="fas fa-pencil-ruler">
                    @endif
                        <i class="fas fa-pencil-ruler"> : Web Design</i>
                </div>
                <div>
                    @if ($service->icon_path=='fas fa-mobile-alt')
                        <input type="radio" name="icon_path" id="" value="fas fa-mobile-alt" checked>
                    @else
                        <input type="radio" name="icon_path" id="" value="fas fa-mobile-alt">
                    @endif
                        <i class="fas fa-mobile-alt"> : Responsive/Mobile apps</i>
                </div>
                <div>
                    @if ($service->icon_path=='fas fa-wrench')
                        <input type="radio" name="icon_path" id="" value="fas fa-wrench" checked>
                    @else
                       <input type="radio" name="icon_path" id="" value="fas fa-wrench"> 
                    @endif
                        <i class="fas fa-wrench"> : Maintenance</i>
                </div>
                <div>
                    @if ($service->icon_path=='fas fa-camera')
                        <input type="radio" name="icon_path" id="" value="fas fa-camera" checked>
                    @else      
                        <input type="radio" name="icon_path" id="" value="fas fa-camera">
                    @endif
                        <i class="fas fa-camera"> : Photography</i>
                </div>
            </div>
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" id='title' class="form-control" value="{{$service->title}}">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" id="description" cols="30" rows="10">{{$service->description}}</textarea>
            </div>
            <button type="submit" class="d-block mx-auto btn btn-primary">submit</button>
        </form>
       
    </div>
    
@endsection