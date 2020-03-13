<?php
    $destino = "debris.banda@gmail.com";
    $nombre = $_POST["txtNombre"];
    $email = $_POST["txtEmail"];
    $mensaje = $_POST["txtMensaje"];
    $contenido = "Nombre: ". $nombre . "\nCorreo: " . $email . "\nMensaje: " . $mensaje;

    mail($destino,"Contacto desde DébrisPag",$contenido);
    header("Location:index.html");




?>