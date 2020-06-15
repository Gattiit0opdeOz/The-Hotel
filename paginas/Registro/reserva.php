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
        
        $user = 'root';
        $password = '';
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
							<span>Hola $nombre!</span>
							<p>
								Tu reserva: 
								<ul>
									<li>Tipo de habitación: $habitacion</li>
									<li>Fecha de entrada: $fecha_entrada</li>
									<li>Fecha de salida: $fecha_salida</li>
								</ul>
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