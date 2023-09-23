<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú</title>
    <link rel="stylesheet" href="./estilos.css">
</head>
<body>
    <?php
    $usuario = $_POST['usuario'];

    $arch=fopen("Usuarios.txt", "r+")
        or die("ERROR AL ABRIL EL ARCHIVO");
    while(!feof($arch))
        {   
            $linea=fgets($arch);
            $v=explode(";", $linea);
                if($v[0]==true && $v[1]==$usuario){
            echo'

     <nav class="nav">

        <div class="nav__container">

            <a href="#menu" class="nav__menu">
                <img src="./assets/menu1.svg" class="nav__icon">
            </a>

            <a href="#" class="nav__menu nav__menu--second">
                <img src="./assets/close.svg" class="nav__icon ">
            </a>

            <img src="unetrans1.png" width="200" alt="nav__title">

            <ul class="dropdown" id="menu">

                <li class="dropdown__list">
                    <a href="#" class="dropdown__link">
                        
                        <span class="dropdown__span">Usario</span>
                        <img src="./assets/down.svg" class="dropdown__arrow">

                        <input type="checkbox" class="dropdown__check">
                    </a>

                    <div class="dropdown__content">

                        <ul class="dropdown__sub">

                            <li class="dropdown__li">
                                <a href="Crearusuario.php" class="dropdown__anchor">Resgitrar</a>
                            </li>
                            <li class="dropdown__li">
                                <a href="catalogousuarios.php" class="dropdown__anchor">Consultar</a>
                            </li>

                        </ul>

                <li class="dropdown__list">
                    <a href="#" class="dropdown__link">
                        
                        <span class="dropdown__span">Cursos</span>
                        <img src="./assets/down.svg" class="dropdown__arrow">

                        <input type="checkbox" class="dropdown__check">
                    </a>

                    <div class="dropdown__content">

                        <ul class="dropdown__sub">

                            <li class="dropdown__li">
                                <a href="#" class="dropdown__anchor">Resgitrar</a>
                            </li>
                            <li class="dropdown__li">
                                <a href="#" class="dropdown__anchor">Consultar</a>
                            </li>

                        </ul>

                    </div>
                </li>

                <li class="dropdown__list">
                    <a href="#" class="dropdown__link">
                        <span class="dropdown__span">Estudiante</span>
                        <img src="./assets/down.svg" class="dropdown__arrow">

                        <input type="checkbox" class="dropdown__check">
                    </a>

                    <div class="dropdown__content">

                        <ul class="dropdown__sub">

                            <li class="dropdown__li">
                                <a href="Crearestudiante.php" class="dropdown__anchor">Resgitrar</a>
                            </li>
                            <li class="dropdown__li">
                                <a href="#" class="dropdown__anchor">Consultar</a>
                            </li>
                          

                        </ul>

                    </div>

                </li>
                 <li class="dropdown__list">
                    <a href="#" class="dropdown__link">
                        <span class="dropdown__span">Control de Estudios</span>
                    </a>
                </li>

            </ul>

        </div>

    </nav>
    ';
   }
 }
?>
</body>
</html>