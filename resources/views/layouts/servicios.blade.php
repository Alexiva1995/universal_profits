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
<div class="container mt-5 ml-5 services-nav">

    <ul class="nav justify-content-center sub-meenu-somos ">
        <li class="nav-item active" id="un-link">
          <a class="nav-link active" href="#universal" onclick="showUniversal()" >UNIVERSAL ACADEMY</a>
        </li>
        <li class="nav-item" id="cl-link">
          <a class="nav-link" href="#clup" onclick="showClup()" >CLUP</a>
        </li>
        <li class="nav-item" id="pr-link">
          <a class="nav-link" href="#pro" onclick="showPro()" >PRO INVESTOR </a>
        </li>
        
      </ul>
    
</div>


<div class="container " id="universal">
    <div class="row justify-content-end">
        <div class="col-sm col-md-5 offset-md-1">
            
                <p class="text-team-content">Universal acadmy es una plataforma e-learning por medio de la cual llos empresarios encontrarán diferentes categorías de formación en hablidades blandas y técnicas. </p>
            
        </div>
        <div class="col-sm col-md-6 rigt-text-services">
            
            <h4 class="text-center">LA ACADEMIA DEL FUTURO</h4>
        </div>
        

    </div>

    <div class="content-img">
        <img src="https://dummyimage.com/600x400/00aaaa/0011ff" class="img-fluid" alt="Responsive image">
    </div>


</div>


<div class="container " id="clup">
    <div class="row justify-content-end">


        <div class="col-sm col-md-6 rigt-text-services">
            
            <h4 class="text-center">LA ACADEMIA DEL FUTURO</h4>
        </div>
        <div class="col-sm col-md-5 offset-md-1">
            
                <p class="text-team-content">Clup es la plataforma a nivel tecnologíco donde el usuario podrá hacer uso de las herramientas para la construcción de equipos a través del modlo de MLM</p>
            
        </div>
        
        

    </div>

    <div class="content-img-clu">
        <img src="https://dummyimage.com/600x400/00aaaa/0011ff" class="img-fluid" alt="Responsive image">
    </div>
    

</div>

<div class="container " id="pro">
    <div class="row justify-content-end">
        <div class="col-sm col-md-5 offset-md-1">
            
                <p class="text-team-content-pro">Elite es un servicio de universal profits con el cual nuestros usuarios pueden conocer de los servicios externos que también aceptan como método de pago o consumo los upoint.</p>
            
        </div>
        <div class="col-sm col-md-6 rigt-text-services-pro">
            
            <h5 class="text-center">TODO UN UNIVERSO</h5>
        </div>
        

    </div>

    <div class="content-img-pro">
        <img src="https://dummyimage.com/600x400/00aaaa/0011ff" class="img-fluid" alt="Responsive image">
    </div>


</div>






<div class="cotainer">
    <div class="row">
        <div class="col mt-5 my-1">
            <h4 class="text-center">SIGN UP</h4>
            <hr class="line-services">
        </div>
    </div>
</div>

@endsection