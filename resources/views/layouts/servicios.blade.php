@extends('index')
@section('content')

<div class="background-services">
  <div class="container servicios">
    <div class="row">
        <div class="col-sm">
            <h1 class="text-center"><strong>SERVICIOS</strong></h1>
        </div>
    </div>
  </div>
</div>
<div class="content-tabs-services">
    <div class="container  services-nav">

        <ul class="menu-items menu-services pt-5">
            <li class="nav-item" openOp="#universal">
              <a class="nav-link" href="javascript:void(0)" >UNIVERSAL ACADEMY</a>
            </li>
            <li class="nav-item" openOp="#clup">
              <a class="nav-link" href="javascript:void(0)">CLUP</a>
            </li>
            <li class="nav-item" openOp="#pro">
              <a class="nav-link" href="javascript:void(0)" >PRO INVESTOR </a>
            </li>
            
          </ul>
        
    </div>


    <div class="container content-height ocultar" id="universal">
        <div class="row justify-content-end">
            <div class="col-sm col-md-5 offset-md-1">
                
                    <p class="text-team-content">Universal acadmy es una plataforma e-learning por medio de la cual llos empresarios encontrarán diferentes categorías de formación en hablidades blandas y técnicas. </p>
                
            </div>
            <div class="col-sm col-md-6 rigt-text-services">
                
                <h4 class="text-center strac-services">LA ACADEMIA DEL FUTURO</h4>
            </div>
            

        </div>

        <div class="content-img">
            <img src="https://dummyimage.com/600x400/00aaaa/0011ff" class="img-fluid" alt="Responsive image">
        </div>


    </div><!-- End container -->


    <div class="container content-height ocultar" id="clup">
        <div class="row justify-content-end">


            <div class="col-sm col-md-6 rigt-text-services">
                
                <h4 class="text-center strac-services">LA ACADEMIA DEL FUTURO</h4>
            </div>
            <div class="col-sm col-md-5 offset-md-1">
                
                    <p class="text-team-content">Clup es la plataforma a nivel tecnologíco donde el usuario podrá hacer uso de las herramientas para la construcción de equipos a través del modlo de MLM</p>
                
            </div>
            
            

        </div>

        <div class="content-img-clu">
            <img src="https://dummyimage.com/600x400/00aaaa/0011ff" class="img-fluid" alt="Responsive image">
        </div>
        

    </div><!-- End container -->

    <div class="container content-height ocultar" id="pro">
        <div class="row justify-content-end">
            <div class="col-sm col-md-5 offset-md-1">
                
                    <p class="text-team-content">Elite es un servicio de universal profits con el cual nuestros usuarios pueden conocer de los servicios externos que también aceptan como método de pago o consumo los upoint.</p>
                
            </div>
            <div class="col-sm col-md-6 rigt-text-services-pro">
                
                <h5 class="text-center strac-services">TODO UN UNIVERSO</h5>
            </div>
            

        </div>

        <div class="content-img-pro">
            <img src="https://dummyimage.com/600x400/00aaaa/0011ff" class="img-fluid" alt="Responsive image">
        </div>


    </div><!-- End container -->


<div class="cotainer">
    <div class="row">
        <div class="col mt-5 my-1">
            <h4 class="text-center">SIGN UP</h4>
            <hr class="line-services">
        </div>
    </div>
</div>
    
</div>





@endsection