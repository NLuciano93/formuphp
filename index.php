<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="css/estilos.css">
</head>
<body>

	<?php
		include("header.php");
		$nombre ="Pablo";
		$num1= 10;
		$num2= 50;
		$suma = $num1 + $num2;
		echo $suma;
	?>
	<article>
		Contenido del index
	</article>

	<?php
		include("footer.php")
	?>
	
</body>
</html>