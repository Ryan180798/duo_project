@extends('adminlte::page')

@section('content')

    <div class="container pt-5 mt-5">
        <h1 class="text-center pt-5 mt-5">Section Subscribe</h1>
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