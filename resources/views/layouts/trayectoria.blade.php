@extends('index')
@section('content')

<div class="background-hero">
  <div class="container trayectoria">
    <div class="row">
        <div class="col-sm">
            <h1 class="text-align-center"><strong>TRAYECTORIA</strong></h1>
        </div>
    </div>
  </div>
</div>

<div class="container">
    <div class="row quienes-somos">
        <div class="col-sm">
            <h1 class="text-center">QUIENES SOMOS</h1>
        </div>

    </div>
    
</div>

<div class="content-tabs-trayectoria">
    <div class="container quienes-nav">

        <ul class="nav justify-content-center sub-meenu-somos menu-trayectoria">
            <li class="nav-item" openOp="#equipo">
              <a class="nav-link " >NUESTRO EQUIPO UNIVERSAL</a>
            </li>
            <li class="nav-item" openOp="#donde">
              <a class="nav-link" >PAÍSES DONDE ESTAMOS</a>
            </li>
            <li class="nav-item" openOp="#mueve">
              <a class="nav-link" >LO QUE NOS MUEVE </a>
            </li>
            <li class="nav-item"  openOp="#equipo">
              <a class="nav-link" >ALIADOS</a>
            </li>
          </ul>
        
    </div>

    <div class="container content-height ocultar" id="equipo">
        <div class="row justify-content-end">
            <div class="col-sm col-md-4 offset-md-2">
                
                    <p class="text-team-content">Somos un equipo confirmado por profesionales en área de negocios, emprendemiento, finanzas, educación, y marketing con el objetivo en común de crear y evolucionar</p>
                
            </div>
            <div class="col-sm col-md-6 rigt-text-content">
                <img src="https://dummyimage.com/150x150/000/fff.jpg" class="img-thumbnail" alt="">
                <p class="text-center pt-4 strac">Juan Camilo Barrerra. Fundador</p>
            </div>

        </div>

    </div><!-- End content-height -->

    <div class="container content-height ocultar mt-5 my-2" id="donde">
        <div class="row justify-content-end">
            <div class="col">

                <img src="https://dummyimage.com/600x400/00aaaa/0011ff" class="img-fluid" alt="Responsive image">
               
            </div>

        </div>

    </div><!-- End content-height -->

    <div class="container content-height ocultar mt-5 my-2" id="mueve">
        <div class="d-flex flex-wrap justify-content-center">
            <div class="grid-images-trayectoria mr-4 mb-4">
                <img src="https://dummyimage.com/200x150/00aaaa/0011ff" class="img-fluid float-center" alt="Responsive image">
            </div>
            <div class="grid-images-trayectoria mr-4 mb-4">
                <img src="https://dummyimage.com/200x150/00aaaa/0011ff" class="img-fluid float-center" alt="Responsive image">
            </div>
            <div class="grid-images-trayectoria mr-4 mb-4">
                <img src="https://dummyimage.com/200x150/00aaaa/0011ff" class="img-fluid float-center" alt="Responsive image">
            </div>
        </div><!-- End flex -->

        <div class="d-flex flex-wrap justify-content-center">
            <div class="grid-images-trayectoria mr-4 mb-4">
                <img src="https://dummyimage.com/200x150/00aaaa/0011ff" class="img-fluid float-center" alt="Responsive image">
            </div>
            <div class="grid-images-trayectoria mr-4 mb-4">
                <img src="https://dummyimage.com/200x150/00aaaa/0011ff" class="img-fluid float-center" alt="Responsive image">
            </div>
            <div class="grid-images-trayectoria mr-4 mb-4">
                <img src="https://dummyimage.com/200x150/00aaaa/0011ff" class="img-fluid float-center" alt="Responsive image">
            </div>
        </div><!-- End flex -->

    </div><!-- End content-height -->

    <div class="containercontent-height ocultar" id="aliados">
        <div class="row justify-content-end">
            <div class="col-sm col-md-4 offset-md-2">
                
                    <p class="text-team-content-pro">Somos un fond de inversion capital mixt, con respaldo y presencia en Europa, Norteamérica y Colombia, que cubre operraciones globales para clientes de banca o comercio internacional.</p>
                
            </div>
            <div class="col-sm col-md-6 rigt-text-content">
                <img src="https://dummyimage.com/150x150/000/fff.jpg" class="img-thumbnail" alt="">
                <p class="text-center">Carlos Andrés Botero. Presidente</p>
            </div>

        </div>

    </div><!-- End content-height -->
    
</div><!-- End content-tabs-trayectoria -->


<div class="cotainer">
    <div class="row">
        <div class="col mt-5 my-1">
            <p class="text-center strac-f">Todo sobre el mundo de Universal Pofits</p>
        </div>
    </div>
</div>



     
@endsection
