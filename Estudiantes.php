<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<div>
		<h1>RESGISTRAR ESTUDIANTE</h1>
	</div>
	<div>
	<form method="post" action="">
			<label>CANTIDAD DE ESTUDIANTES A REGISTRAR</label>
			<input type="number" name="cant" placeholder="CANTIDAD">
			<input type="submit" name="inputs" value="USUARIOS A REGISTRAR">
	</form>
	</div>

	<div>
		<?php
		if(isset($_POST['inputs'])){

			$cant = $_POST['cant'];

		for($j=0;$j<$cant;$j++){ ?>
			<form method="post" action="">

			<label for="nombre">NOMBRES</label>
			<input id="nombre" type="txt" name="name">

			<label for="apelllido">APELLIDOS</label>
			<input id="apelllido" type="txt" name="ape">

			<label for="fn">FECHA DE NACIMIENTO</label>
			<input id="fn" type="date" name="fnaci">

			<label for="cedu">NUMERO DE CEDULA</label>
			<input id="cedu" type="num" name="ced">

			<label for="email">CORREO ELECTRONICO</label>
			<input id="email" type="email" name="email">

			<label for="tele">NUMERO DE TELEFONO</label>
			<input id="tele" type="tel" name="phone">
		<?php
			}
			}
			?>
			<input type="submit" name="registrar" value="REGISTRAR">
			<input type="reset" name="" value="LIMPIAR">
				
			</form>	
	</div>

</body>
</html>
