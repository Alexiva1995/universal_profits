@extends('index')
@section('content')
<div class="cotainer">
    <div class="row">
        <div class="col-sm">
            <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active" data-interval="10000">
                    <img src="{{asset('img/slider-home/slider01.jpg')}}" class="d-block w-100" alt="Slider01">
                    <div class="carousel-caption d-none d-md-block">
                        <h1><strong>ENTRE PRENEUR</strong></h1>                        
                    </div>
                  </div>
                  <div class="carousel-item" data-interval="2000">
                    <img src="{{asset('img/slider-home/slider02.jpg')}}" class="d-block w-100" alt="Slider02">
                    <div class="carousel-caption d-none d-md-block">
                        <h1><strong>ENTRE PRENEUR</strong></h1>                        
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="{{asset('img/slider-home/slider03.jpg')}}" class="d-block w-100" alt="Slider03">
                    <div class="carousel-caption d-none d-md-block">
                        <h1><strong>ENTRE PRENEUR</strong></h1>                        
                    </div>
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
        </div>
        
    </div>
</div>
@endsection
