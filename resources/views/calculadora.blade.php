@extends('layouts.layout-calculadora')
@section('title','calculadora')

<!-- donde quires que vaya y lo que quieres -->

	@section('content')
	<div class="content">
		<h2>Esta es la calculadora de {{$nombre}}</h2>
	<form action="/calcular" method="post" class="form-group">
			@csrf
			<label for="exampleInputEmail1">Numero 1:</label><br>
			<input type="number" name="numero1"><br>
			<label for="exampleInputEmail1">Numero 2:</label>
			<br>
			<input type="number" name="numero2"><br>
			<input type="hidden" name="nombre" value="{{$nombre}}">
			<!-- metes el nombre en un hidden para guardarlo-->
			<br>
			<button type="radio" name="operacion" value="sumar" class="btn btn-primary"  class="form-control" >sumar</button>
			<button type="radio" name="operacion" value="restar" class="btn btn-secondary"  class="form-control" >restar</button>
			<button type="radio" name="operacion" value="multiplicar" class="btn btn-success"  class="form-control" >multiplicar</button>
			<button type="radio" name="operacion" value="dividir" class="btn btn-warning"  class="form-control" >dividir</button>
			<br>
			<h3>Resultado:</h3>
			<br> <!-- isset te devuelve un boolean -->
			@if(isset($resultado))
			<p>{{$resultado}}</p>
			@endif
		</form>
	</div>
@endsection
