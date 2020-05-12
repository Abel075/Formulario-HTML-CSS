<?php
    $destino= "ebaspino@gmail.com";
    $nombre = $_POST["nombre"];
    $asunto = $_POST["asunto"];
    $email = $_POST["email"];
    $consulta = $_POST["consulta"];
    $contenido = "Nombre: " . $nombre  .  "\nAsunto: " . $asunto . "\nEmail" . $email . "\nConsulta" . $consulta;
    mail($destino,"Contacto", $Contenido);
    header("Location:Gracias.html");


?>