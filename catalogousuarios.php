<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PERSONAJES</title>
</head>
<body>
<form method="post" action="Perfilpersonaje.php">
	<div>
	<table>
		<tbody>
			<tr>
				<td>CODIGO</td>
				<td>NOMBRE DE USUARIO</td>
				<td>ROL EN EL SISTEMA</td>
			</tr>
		</tbody>
		<?php
			$arch=fopen("Usuarios.txt", "r+")
				or die("ERROR AL ABRIL EL ARCHIVO");
			while(!feof($arch))
			{
				$linea=fgets($arch);
				$v=explode(";", $linea);
					if($v[0]== true){
							$v[0];
				echo'
					<tr>
						<td>'.$v[0].'</td>
						<td>'.$v[1].'</td>
						<td>'.$v[3].'</td>
						<td> <button name="id" value='.$v[0].'>VER MAS</button> </td>
					</tr>
				';
				}

			}
			fclose($arch);
		?>				
	</table>
	</div>
</form>

	<div>
		<a href="Crearusuario.php"><button type="button">CREAR USUARIO</button></a>
	</div>

</body>
</html>