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
  //Conexion a ka base de datos
  $conexion=@mysqli_connect("Localhost","u499272619_Administrador","Laclavej4j4","u499272619_TheHotelReserv");
  
  $nombre= trim($_POST['nombre']);
  $correo= trim($_POST['correo']);
  $contra= trim($_POST['contra']);
  $habitacion= trim($_POST['habitacion']);
  $contra = (isset($_POST['contraseña'])) ? password_hash($_POST['contraseña'], PASSWORD_BCRYPT) : '';
  $habitacion = (isset($_POST['habitacion'])) ? $_POST['habitacion'] : '';
  $fecha_llegada = (isset($_POST['fecha'])) ? $_POST['fecha'] : '';
  $fecha_salida = (isset($_POST['fecha-salida'])) ? $_POST['fecha-salida'] : '';
  $sexo= trim($_POST['sexo']);
  
  $sql = "INSERT INTO reservas(ID, nombre, correo, contra, habitacion, fecha_llegada, fecha_salida, sexo) VALUES (NULL, '$nombre', '$correo', '$contra', '$habitacion', '$fecha_llegada', '$fecha_salida', '$sexo')";
  
  $agregar = mysqli_query($conexion, $sql);
  
  if(!agregar){
      echo "Hubo un error en agregar";
  } else {
      header('location: /../../index.html');
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
  //Conexion a ka base de datos
  $conexion=@mysqli_connect("Localhost","u499272619_Administrador","Laclavej4j4","u499272619_TheHotelReserv");
  
  $nombre= trim($_POST['nombre']);
  $correo= trim($_POST['correo']);
  $contra= trim($_POST['contra']);
  $habitacion= trim($_POST['habitacion']);
  $contra = (isset($_POST['contraseña'])) ? password_hash($_POST['contraseña'], PASSWORD_BCRYPT) : '';
  $habitacion = (isset($_POST['habitacion'])) ? $_POST['habitacion'] : '';
  $fecha_llegada = (isset($_POST['fecha'])) ? $_POST['fecha'] : '';
  $fecha_salida = (isset($_POST['fecha-salida'])) ? $_POST['fecha-salida'] : '';
  $sexo= trim($_POST['sexo']);
  
  $sql = "INSERT INTO reservas(ID, nombre, correo, contra, habitacion, fecha_llegada, fecha_salida, sexo) VALUES (NULL, '$nombre', '$correo', '$contra', '$habitacion', '$fecha_llegada', '$fecha_salida', '$sexo')";
  
  $agregar = mysqli_query($conexion, $sql);
  
  if(!agregar){
      echo "Hubo un error en agregar";
  } else {
      header('location: /../../index.html');
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
