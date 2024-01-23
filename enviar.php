<?php
$destino = "jesmtz25.zar@gmail.com";
$name = $_POST['name'];
$email = $_POST['email'];
$direccion = $_POST['direccion'];
$phone = $_POST['phone'];
$mensaje = $_POST['mensaje'];
$contenido = "Nombre:" . $nombre ."\nCorreo:" . $correo .  "\Telefono:" . $telefono . "\Mensaje:" .  $mensaje;
mail($destino, "Contacto", $contenido );
header ("location:gracias.html");
?>