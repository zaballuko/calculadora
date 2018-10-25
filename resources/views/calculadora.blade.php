<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Calculadora</title>
	
</head>
<body>
	<h2>Esta es la calculadora de {{$nombre}}</h2>
	<form action="/calcular" method="post">
			@csrf
			Numero 1:<br>
			<input type="number" name="numero1"><br>
			Numero 2:<br>
			<input type="number" name="numero2"><br>
			<input type="hidden" name="nombre" value="{{$nombre}}">
			<!-- metes el nombre en un hidden para guardarlo-->
			<br>
			<button type="radio" name="operacion" value="sumar">sumar</button>
			<button type="radio" name="operacion" value="restar">restar</button>
			<button type="radio" name="operacion" value="multiplicar">multiplicar</button>
			<button type="radio" name="operacion" value="dividir">dividir</button>
			<br>
			<h3>Resultado:</h3>
			<br> <!-- isset te devuelve un boolean -->
			@if(isset($resultado))
			<p>{{$resultado}}</p>
			@endif
		</form>
	

</body>
</html>