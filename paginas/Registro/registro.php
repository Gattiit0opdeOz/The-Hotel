<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="reserva.css">
	<link rel="stylesheet" href="../../css/fonts.css">
	<link rel="stylesheet" href="../../css/header_footer.css">
    <title>Reserva</title>
</head>
<body>
    <header class="header">
		<div class="container logo-nav-container">
			<a class="logo" href="../../index.html">The Hotel</a>
			
			<nav class="navegacion">
				<ul>
					<li class="icon-nav"><a href="../../index.html"><span class="icono"><i class="icon icon-home"></i> Habitaciones</a></li>

					<li class="icon-nav"><a href="../../index.html#restaurantes"><span class="icono"><i class="icon icon-spoon-knife"></i> Restaurantes</a></li>

					<li class="icon-nav"><a href="../../index.html#actividades_main"><span class="icono"><i class="icon icon-binoculars"></i> Actividades</a></li>

					<li class="icon-nav"><a href="../../index.html#ubicacion"><span class="icono"><i class="icon icon-location"></i> Ubicación</a></li>

					<li class="icon-nav"><a href="../../index.html#casino"><span class="icono"><i class="icon icon-spades"></i> Casino</a></li>

				</ul>
			</nav>
		</div> 
    </header>
    <main>

<?php
    try {
        //tomamos la información
        $nombre = (isset($_POST['nombre'])) ? $_POST['nombre'] : '';
        $correo = (isset($_POST['correo'])) ? $_POST['correo'] : '';
        $fecha = (isset($_POST['fecha'])) ? $_POST['fecha'] : '';
        $fecha_salida = (isset($_POST['fecha-salida'])) ? $_POST['fecha-salida'] : '';
        $sexo = (isset($_POST['sexo'])) ? $_POST['sexo'] : '';
        
        //comprobamos que todo se mando bien
        if($nombre == '' || $correo == '' || $fecha == '' || $fecha_salida == '' || $sexo == '') {
          throw new Exception();
        }

    }
    //por si algo sale mal
    catch (Exception $e) {
        //le damos un link para ir a la pagina de registro
        echo "<p class=\"error-message\">
            No se ha llenado el formulario, por favor dirigase a <a href=\"..//Registro\">Registro</a>
        </p>";
    }
?>

    </main>
    <footer id="footer">
		<div id="columnas-footer">
			<ul class="columna-footer">
				<li class="item-footer"><a href="#">Habitaciones</a></li>
				<li class="item-footer"><a href="#">Penthouse</a></li>
				<li class="item-footer"><a href="#">De lujo</a></li>
				<li class="item-footer"><a href="#">Doble</a></li>
				<li class="item-footer"><a href="#">Sencilla</a></li>
			</ul>
			<ul class="columna-footer">
				<li class="item-footer"><a href="#">Restaurantes</a></li>
				<li class="item-footer"><a href="#">Méxicano</a></li>
				<li class="item-footer"><a href="#">Italiano</a></li>
				<li class="item-footer"><a href="#">Chino</a></li>
			</ul>
			<ul class="columna-footer">
				<li class="item-footer"><a href="#">Actividades</a></li>
			</ul>
			<ul class="columna-footer">
				<li class="item-footer"><a href="#">Casino</a></li>
			</ul>
		</div>
		<hr>
		<div class="contenedor-derechos">
			<p>
				&copy; The Hotel SA
			</p>
		</div>
	</footer>
</body>
</html>