@extends('adminlte::page')

@section('content')

    <div class="container mt-5 pt-5">
        <h1 class="text-center mt-5 pt-5">Add a Service</h1>
        <form action="{{route('services.store')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Service Icon</label>
                <div>
                    <input type="radio" name="icon_path" id="" value="fa fa-desktop" checked>
                    <i class="fa fa-desktop"> Web Development</i>
                </div>
                <div>
                    <input type="radio" name="icon_path" id="" value="fas fa-chart-bar">
                    <i class="fas fa-chart-bar"> : Analytics</i>
                </div>
                <div>
                    <input type="radio" name="icon_path" id="" value="fas fa-pencil-ruler">
                    <i class="fas fa-pencil-ruler"> : Web Design</i>
                </div>
                <div>
                    <input type="radio" name="icon_path" id="" value="fas fa-mobile-alt">
                    <i class="fas fa-mobile-alt"> : Responsive/Mobile apps</i>
                </div>
                <div>
                    <input type="radio" name="icon_path" id="" value="fas fa-wrench">
                    <i class="fas fa-wrench"> : Maintenance</i>
                </div>
                <div>
                    <input type="radio" name="icon_path" id="" value="fas fa-camera">
                    <i class="fas fa-camera"> : Photography</i>
                </div>
            </div>
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" id='title' class="form-control">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" id="description" cols="30" rows="10"></textarea>
            </div>
            <button type="submit" class="d-block mx-auto btn btn-primary">submit</button>
        </form>
       
    </div>
    
@endsection