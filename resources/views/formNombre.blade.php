@extends('layouts.layout-calculadora')
@section('title','formPedirNombre')

<!-- donde quires que vaya y lo que quieres -->

	@section('content')
	<div class="content">
	<h1>Reto Calculadora</h1>
	<form action="/pasarNombre" method="post">
			<input type="hidden" name="_token" value="{{ csrf_token() }}"><br>
			<label for="exampleInputEmail1">Introduce tu nombre:</label><br>
			<input type="text" name="nombre"><br>
			<p>El nombre introducido aparecera en la calculadora</p>
			<button type="submit"  class="btn btn-success">Enviar</button>
		</form>
	</div>
@endsection
