<?php
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $fecha = $_POST['fecha'];
    $fecha_salida = $_POST['fecha-salida'];
    $sexo = $_POST['sexo'];

    echo "Tu nombre es: $nombre, email: $email, fecha de entrada: $fecha, fecha de salida $fecha_salida";
    echo "Sexo: $sexo";
?>