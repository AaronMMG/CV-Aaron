<?php
     //es para quien va el mensaje
    $destinatario='aaronmaldonado788@gmail.com';


        $nombre=$_POST['Nombre'];
        $asunto=$_POST['Asunto'];
        $correo=$_POST['Correo'];
        $mensaje=$_POST['Mensaje']; 
         $header="Enviado desde el formulario contacto";
    $mensajeCompleto=$mensaje."\nAtentamente: ".$nombre;

    mail($destinatario,$asunto,$correo,$mensajeCompleto,$header);

    echo "<script>alert('correo envinado exitosamente')</script>";
    echo "<script>setTimeout(\"location.href='../index.html'\",1000)</script>";

 
?>