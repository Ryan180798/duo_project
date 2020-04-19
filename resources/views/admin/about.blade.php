@extends('adminlte::page')

@section('content')

<div class="container">
    <h1 class="text-center ">Section About</h1>  
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Dashboard</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                <li class="breadcrumb-item active">Section About</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

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