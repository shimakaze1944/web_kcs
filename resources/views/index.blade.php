@extends('layout/main')

@section('title', 'Home')

@section('container',)

    <div class="carousel slide text-truncate d-lg-flex align-items-lg-center" data-ride="carousel" id="carousel-1" style="height: 50px;">
        
    </div>
    <div class="testimonials-clean">
        <div class="container">
            <div class="intro">
                <h2 class="text-center">Penyanyi</h2>
                <p class="text-center">Untuk mendata semua musisi penyanyi di Indonesia</p>
            </div>
            <div class="row justify-content-center">
           <div class="row people">
                <div class="col-md-6 col-lg-4 item">
                    
                    <div class="author"><img class="rounded-circle" src="{{asset('img/1.jpg')}}">
                        <h5 class="name">Judika</h5>
                        
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 item">
                    
                    <div class="author"><img class="rounded-circle" src="{{asset('img/3.jpg')}}">
                        <h5 class="name">Ardito Pramono</h5>
                        
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 item">
                   
                    <div class="author"><img class="rounded-circle" src="{{asset('img/2.jpg')}}">
                        <h5 class="name">Raisa</h5>
                        
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>

@endsection
