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
		$correo = (isset($_POST['correo'])) ? $_POST['correo'] : '';
		$contraseña = (isset($_POST['contraseña'])) ? $_POST['contraseña'] : '';
        
        $user = 'the_hotel_admin';
        $password = '\?~r{0~ji=0Bex^]';
        $server = 'localhost';
        $db = 'the_hotel'; 
		$conexion = mysqli_connect($server,$user,$password,$db);
		
		if(!$conexion) {
			//por seguridad, si no está bien ningún dato lo mandaremos de regreso al formulario
            throw new Exception();
		} else {
			//comprobamos que todo se mando bien
			if($correo == '' || $contraseña == '') {
				throw new Exception();
			}
			//guardamos todo el base de datos
			$sql = "select * from reservas";
			$result = mysqli_query($conexion, $sql);
			if (mysqli_num_rows($result) > 0) {
				$row = mysqli_fetch_assoc($result);
				$id = $row['ID'];
				$nombre = $row['nombre'];
				$email = $row['correo'];
				$pass = $row['contraseña'];
				$habitacion = $row['habitacion'];
				$fecha_entrada = $row['fecha_llegada'];
				$fecha_salida = $row['fecha_salida'];
			 } else {
				throw new Exception();
			 }
			 
        	if(!$pass){
                //por seguridad, si no está bien ningún dato lo mandaremos de regreso al formulario
                throw new Exception();
        	}else{
                //validamos la contraseña
				$valid = password_verify($contraseña, $pass);
				if($valid) {
					//le mostramos la info
					echo "<div class=\"img-fondo\">
						<div class=\"gracias-mensaje\">
							<span id\"hola\">Hola $nombre!</span>
							<p>
								Tu reserva: 
								<ul>
									<li>ID de habitación: <span>$id</span></li>
									<li>Tipo de habitación: <span>$habitacion</span></li>
									<li>Fecha de entrada: <span>$fecha_entrada</span></li>
									<li>Fecha de salida: <span>$fecha_salida</span></li>
								</ul>
								<span id=\"span2\">Aviso: al pasar a la recepción te preguntarán por tu id de reserva</span>
							</p>
						</div>
					</div>";
				} else {
					throw new Exception();
				}
        	}
		}
	}
    //por si algo sale mal
    catch (Exception $e) {
        //Mandamos al usuario a la página de registro
        header('Location: ../Registro/reserva.html');
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
