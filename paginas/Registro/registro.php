<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="reserva.css">
	<link rel="shortcut icon" href="../../img/icono.png" type="image/x-icon">
	<link rel="stylesheet" href="../../css/fonts.css">
	<link rel="stylesheet" href="../../css/header_footer.css">
    <title>Reserva</title>
</head>
<body>
    <header class="header">
		<div class="container logo-nav-container">
			<a class="logo" href="../../">The Hotel</a>
			
			<nav class="navegacion">
				<ul>
					<li class="icon-nav"><a href="../../"><span class="icono"><i class="icon icon-home"></i> Habitaciones</a></li>

					<li class="icon-nav"><a href="../../#restaurantes"><span class="icono"><i class="icon icon-spoon-knife"></i> Restaurantes</a></li>

					<li class="icon-nav"><a href="../../#actividades_main"><span class="icono"><i class="icon icon-binoculars"></i> Actividades</a></li>

					<li class="icon-nav"><a href="../../#ubicacion"><span class="icono"><i class="icon icon-location"></i> Ubicación</a></li>

					<li class="icon-nav"><a href="../../#casino"><span class="icono"><i class="icon icon-spades"></i> Casino</a></li>

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
		$contraseña = (isset($_POST['contraseña'])) ? password_hash($_POST['contraseña'], PASSWORD_BCRYPT) : '';
		$habitacion = (isset($_POST['habitacion'])) ? $_POST['habitacion'] : '';
        $fecha = (isset($_POST['fecha'])) ? $_POST['fecha'] : '';
        $fecha_salida = (isset($_POST['fecha-salida'])) ? $_POST['fecha-salida'] : '';
		$sexo = (isset($_POST['sexo'])) ? $_POST['sexo'] : '';
		
		$user = 'the_hotel_admin';
        $password = '\?~r{0~ji=0Bex^]';
        $server = 'localhost';
        $db = 'the_hotel'; 
		$conexion = mysqli_connect($server,$user,$password,$db);
		
		if(!$conexion) {
			throw new Exception();
		} else {
			//comprobamos que todo se mando bien
			if($nombre == '' || $correo == '' || $fecha == '' || $fecha_salida == '' || $sexo == '' || $contraseña == '') {
				throw new Exception();
			}
			//guardamos todo el base de datos
			$sql = "insert into reservas(id,nombre,correo,contraseña,habitacion,fecha_llegada,fecha_salida,sexo) values(null,'$nombre','$correo','$contraseña','$habitacion','$fecha','$fecha_salida','$sexo')";
			$agregar = $conexion->query($sql);
        	if(!$agregar){
        	    throw new Exception();
        	}else{
        	    //le damos un link para ir a la pagina de registro
				echo "<div class=\"img-fondo\">
					<div class=\"gracias-mensaje\">
						<span>Hola $nombre!</span> 
						<p>Gracias por elegir The Hotel  como tu mejor opcion <br>
						Puedes acceder <a href=\"reserva.html\">a tu reserva</a> con tu <br>
						correo electronico y tu contraseña <br>
						Se te mostrará información sobre esta misma y <br>
						un código QR, el cual debes mostrar en la recepción.</p>
					</div>
				</div>";
        	}
		}
	}
    //por si algo sale mal
    catch (Exception $e) {
        //Mandamos al usuario a la página de registro
        header('Location: ../Registro');
    }
?>

    </main>
    <footer id="footer">
		<div id="columnas-footer">
			<ul class="columna-footer">
				<li class="item-footer"><a href="../../#habitaciones">Habitaciones</a></li>
				<li class="item-footer"><a href="../habitaciones/pethouse.html">Penthouse</a></li>
				<li class="item-footer"><a href="../habitaciones/delujo.html">De lujo</a></li>
				<li class="item-footer"><a href="../habitaciones/doble.html">Doble</a></li>
				<li class="item-footer"><a href="../habitaciones/sencilla.html">Sencilla</a></li>
			</ul>
			<ul class="columna-footer">
				<li class="item-footer"><a href="../restaurant.html">Restaurantes</a></li>
				<li class="item-footer"><a href="../restaurantes/mexicanfood.html">Méxicano</a></li>
				<li class="item-footer"><a href="../restaurantes/italianfood.html">Italiano</a></li>
				<li class="item-footer"><a href="../restaurantes/chinesefood.html">Chino</a></li>
			</ul>
			<ul class="columna-footer">
				<li class="item-footer"><a href="../../#actividades">Actividades</a></li>
			</ul>
			<ul class="columna-footer">
				<li class="item-footer"><a href="../actividades/casino.html">Casino</a></li>
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
