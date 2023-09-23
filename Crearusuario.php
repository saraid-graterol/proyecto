<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/crearUsuario.css">
	<title>ESCUELA DEL TRANSPORTE-CREAR USUARIO</title>
</head>
<body>
	<div>
		<h1>CREAR USUARIO</h1>
	<form method="post" action="">
		<label>NOMBRE DE USUARIO</label><br>
		<input type="text" name="name"><br>
		<label>CONTRASEÑA</label><br>
		<input type="text" name="con"><br>
		<label>ROL EN EL SISTEMA</label><br>
		ADMINISTRADOR<input type="radio" name="tipo" value="admin">
		DIRECTORA<input type="radio" name="tipo" value="dire">
		SECRETARIA<input type="radio" name="tipo" value="secre">

		<br><button type="submit" name="crear"> Crear </button>
		<button type="reset"> limpiar </button>
	</form>
	</div>

	<div>
		<?php
		if(isset($_POST['crear'])){
			$codigo = rand(00,99);
			$usuario = $_POST['name'];
			$contraseña = $_POST['con'];
			$clase = $_POST['tipo'];

			//APERTURA DEL ARCHIVO 
	$arch= fopen("Usuarios.txt", "a+")
		or die ("PROBLEMAS AL CREAR EL ARCHIVO");
		//PPROCESAMOS LA INFORMACION
     	$cadena=$codigo.";".$usuario.";".$contraseña.";".$clase."\n";
     	fputs($arch,$cadena);
     	//CERRAR EL ARCHIVO
		fclose($arch);

 		echo "<a href='Menu.php'></a>";		}
		?>
	</div>
</body>
</html>