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

<div class="container quienes-nav">

    <ul class="nav justify-content-center sub-meenu-somos ">
        <li class="nav-item active" id="eq-link">
          <a class="nav-link active" href="#equipo" onclick="showEquipo()" >NUESTRO EQUIPO UNIVERSAL</a>
        </li>
        <li class="nav-item" id="do-link">
          <a class="nav-link" href="#donde" onclick="showDonde()" >PAÍSES DONDE ESTAMOS</a>
        </li>
        <li class="nav-item" id="mu-link">
          <a class="nav-link" href="#mueve" onclick="showMueve()" >LO QUE NOS MUEVE </a>
        </li>
        <li class="nav-item" id="al-link">
          <a class="nav-link" href="#aliados" onclick="showAliados()" >ALIADOS</a>
        </li>
      </ul>
    
</div>

<div class="container " id="equipo">
    <div class="row justify-content-end">
        <div class="col-sm col-md-4 offset-md-2">
            
                <p class="text-team-content">Somos un equipo confirmado por profesionales en área de negocios, emprendemiento, finanzas, educación, y marketing con el objetivo en común de crear y evolucionar</p>
            
        </div>
        <div class="col-sm col-md-6 rigt-text-content">
            <img src="https://dummyimage.com/150x150/000/fff.jpg" class="img-thumbnail" alt="">
            <p class="text-center">Juan Camilo Barrerra. Fundador</p>
        </div>

    </div>

</div>

<div class="container mt-5 my-2" id="donde">
    <div class="row justify-content-end">
        <div class="col">

            <img src="https://dummyimage.com/600x400/00aaaa/0011ff" class="img-fluid" alt="Responsive image">
           
        </div>

    </div>

</div>

<div class="container mt-5 my-2" id="mueve">
    <div class="img-mueve ">
        

            
        <img src="https://dummyimage.com/200x150/00aaaa/0011ff" class="img-fluid float-center" alt="Responsive image">
        <img src="https://dummyimage.com/200x150/00aaaa/0011ff" class="img-fluid float-center" alt="Responsive image">
        <img src="https://dummyimage.com/200x150/00aaaa/0011ff" class="img-fluid float-center" alt="Responsive image">
    </div>
           
        

    <div class="img-mueve">
            <img src="https://dummyimage.com/200x150/00aaaa/0011ff" class="img-fluid" alt="Responsive image">
            <img src="https://dummyimage.com/200x150/00aaaa/0011ff" class="img-fluid" alt="Responsive image">
            <img src="https://dummyimage.com/200x150/00aaaa/0011ff" class="img-fluid" alt="Responsive image">

    </div> 

    </div>

</div>

<div class="container " id="aliados">
    <div class="row justify-content-end">
        <div class="col-sm col-md-4 offset-md-2">
            
                <p class="text-team-content-pro">Somos un fond de inversion capital mixt, con respaldo y presencia en Europa, Norteamérica y Colombia, que cubre operraciones globales para clientes de banca o comercio internacional.</p>
            
        </div>
        <div class="col-sm col-md-6 rigt-text-content">
            <img src="https://dummyimage.com/150x150/000/fff.jpg" class="img-thumbnail" alt="">
            <p class="text-center">Carlos Andrés Botero. Presidente</p>
        </div>

    </div>

</div>


<div class="cotainer">
    <div class="row">
        <div class="col mt-5 my-1">
            <p class="text-center">Todo sobre el mundo de Universal Pofits</p>
        </div>
    </div>
</div>



     
@endsection
