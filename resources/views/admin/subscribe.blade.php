@extends('adminlte::page')

@section('content')
<div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Dashboard</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                <li class="breadcrumb-item active">Section Subscribe</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <div class="container">
        <h1 class="text-center mb-5">Section Subscribe</h1>
       <form action="{{route('subscribe.update')}}" method="post" >
            @csrf
            <div class="row">
                <div class="col-6 form-group">
                    <label for="link">Link section or url</label>
                    <input type="text" name="link" id="link" value="{{!empty($subscribe) ? $subscribe->link:""}}">
                </div>
            </div>
           <button type="submit" class="d-block mx-auto btn btn-primary">Submit</button>
       </form>
    </div>
    
@endsection