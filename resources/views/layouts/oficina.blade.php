@extends('index')
@section('content')

<div class="background-oficina">
  <div class="container oficina">
    <div class="row">
        <div class="col-sm">
            <h1 class="text-right">Mi oficina</h1>
            {{-- <h1 class="text-align-center"><strong>UNIVERSAL </strong></h1> --}}
        </div>
    </div>
  </div>
</div>

<div class="bg-content">
    <div class="container pt-5 pb-5">
      <div class="row">
      	<div class="col-sm-12 col-md-6">
      		<div class="text-center oficine">
	      		<i class="social fab fa-whatsapp"></i><br>
      			<a href="javascript:void(0)">
	      			WHATSAPP DE ATENCIÓN
	      		</a>
      		</div>
      	</div><!-- End col -->
      	<div class="col-sm-12 col-md-6">
      		<div class="text-center oficine">
	      		<i class="social fas fa-phone"></i><br>
      			<a href="javascript:void(0)">
	      			LINEA DE ATENCIÓN
	      		</a>
      		</div>
      	</div><!-- End col -->
      </div>
    </div>

    
</div><!-- End content bg -->
@endsection