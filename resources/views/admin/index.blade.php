@extends('adminlte::page')

@section('content_header')
    {{-- <h1 class="text-center">Welcome to your Dashboard Admin.</h1>     --}}
@endsection
@section('content')
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Welcome to your Dashboard</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                {{-- <li class="breadcrumb-item active">Dashboard v1</li> --}}
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

   <div class="container">
        <div class="row">
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                      <div class="inner">
                            <h3>{{count($contacts)}}</h3>
                            <p>Messages</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-inbox"></i>
                        </div>
                        <a href="/admin/contact" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
        
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                        <h3>{{count($testimonials)}}</h3>
        
                        <p>Testimonials</p>
                        </div>
                        <div class="icon">
                        <i class="fas fa-quote-right"></i>
                        </div>
                        <a href="/admin/testimonials" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>     
            </div>
   </div>

@endsection