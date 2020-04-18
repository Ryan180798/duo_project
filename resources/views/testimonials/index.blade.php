@extends('adminlte::page')

@section('content')
    {{-- @include('templates.navbar') --}}

    <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Testimonials</h3>

                <a href="{{route('testimonials.create')}}">
                    <button class="btn btn-success d-block mx-auto">Add</button>
                </a>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                        <th scope="col">Image</th>
                        <th scope="col">Name</th>
                        <th scope="col">Entreprise</th>
                        <th scope="col">Temoignage</th>
                        <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($testimonials as $testimonial)
                    <tr>
                        <td><img src="{{asset('storage/'.$testimonial->img_path)}}" class="img-fluid" style="width: 50px;" /></td>
                        <td>{{$testimonial->name}}</td>
                        <td>{{$testimonial->entreprise}}</td>
                        <td>{{$testimonial->temoignage}}</td>
                        <td class="d-flex">
                            <a href="{{route('testimonials.edit', $testimonial->id)}}">
                                <button class="btn btn-warning">Edit</button>
                            </a>
                            <form action="{{route('testimonials.destroy',$testimonial->id)}}" method="post">
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
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>  
@endsection