<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>f</title>
</head>
<body>
	<h1>Formulario de operaciones</h1>
	<form action="operacion" method="get">
		<label for="oper1">Operando 1:</label>
		<input type="text" name="oper1">
		<br>
		<label for="oper2">Operando 2:</label>
		<input type="text" name="oper2">
		<br>
		<input type="radio" id="s" value="sum" name="operacion">
		<label for="s">suma</label><br>
		<input type="radio" id="r" value="res" name="operacion">
		<label for="r">resta</label><br>
		<input type="radio" id="m" value="mul" name="operacion">
		<label for="m">multiplicacion</label><br>
		<input type="radio" id="d" value="div" name="operacion">
		<label for="d">division</label><br>
		<input type="submit" name="dale">
	</form>
</body>
</html>