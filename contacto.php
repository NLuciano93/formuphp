<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	<?php
		include("header.php");
	?>

	<article>
		<form action="login.php" method="GET">
			<label for="usuario">Usuario:</label>
			<input  name="usuario" type="text">
			<label for="pass">Contraseña:</label>
			<input name="pass" type="password">
			<input type="submit" value="Ingresar">

		</form>
		
	</article>

	<footer>
		Pie de la página
	</footer>
	
</body>
</html>
