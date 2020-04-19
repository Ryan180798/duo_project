@extends('layout.app')

@section('content')

<div class="container mt-5 pt-5">
    <h1 class="text-center mt-5 pt-5">Section About</h1>  

<form action="{{route('about.update')}}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="row">
        <div class="col-6 form-group">
            <label for="image_gauche">image de gauche</label>
            <input name="image_gauche" type='file' id="image_gauche" cols="30" rows="10" class="form-control">{{!empty($about) ?$about->image_gauche : ''}}</>
            </div>

        <div class="col-6 form-group">
            <label for="text_droite">texte de droite</label>
            <textarea name="text_droite" id="text_droite" cols="30" rows="10" class="form-control">{{!empty($about)?$about->text_droite : ''}}</textarea>
            </div>
    </div>

    <button type="submit" class="btn btn-primary d-block mx-auto">Modifier</button>

</form>
</div>

@endsection