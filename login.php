<?php

		$usuarioGuardado="pablo";
		$passwordGuardada="123456";
		$usuario=$_GET["usuario"];
		
		$password=$_GET["pass"];

		if ($usuarioGuardado==$usuario && $passwordGuardada==$password) {

			echo "HELLO" ." ". $usuario;
			# code...
		}
		else{ echo "<h1>Usuario y/o contraseña inválida</h1>";
	}
		//array superglobal
		


		// array asociativo
		//$personas= ["nombre"=>"Pablo"];
		// . para concatenar
		//echo "Hola " . "Pablo";
?>