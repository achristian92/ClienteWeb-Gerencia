@extends('layouts.app')
@section('content')
<style >
	body{
		background-color: #b7dfe7!important;
	}
</style>

	<div class="container">
		<div class="row">
			<div class="col-md-6" align="right" >
				<img src="img/error/imagenerror404.png" style="margin-right: 25px">		
			</div>
			<div class="col-md-6" align="right" style="width: 35%">
				<h1 style="padding-top: 65px;">
					Lo sentimos, 
				</h1>
				<h2>
					página no encontrada
				</h2>
			</div>
		</div>

		<CENTER>
		<div class="botonregresar" style="padding-top: 50px">
		<a href="{{ url('/') }}" class="btn btn-info" style="font-weight: bold;">
			REGRESAR
		</a>
	</div>	

		</CENTER>
	</div>
@endsection
