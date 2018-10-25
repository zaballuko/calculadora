<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>formNombre</title>
</head>
<body>
	<h1>Reto Calculadora</h1>
	<form action="/pasarNombre" method="post">
			<input type="hidden" name="_token" value="{{ csrf_token() }}"><br>
			Introduce tu nombre:<br>
			<input type="text" name="nombre"><br>
			<p>El nombre introducido aparecera en la calculadora</p><br>
			<button type="submit">Enviar</button>
		</form>
</body>
</html>