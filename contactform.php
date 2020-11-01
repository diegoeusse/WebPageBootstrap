<?php

if(isset($_POST['submit'])){
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
    $direccion = $_POST['direccion'];
    $asunto = $_POST['asunto'];
    $mensaje = $_POST['mensaje'];

    $mailTo = "deussen@unal.edu.co";
    $headers = "De: ".$email;
    $txt = "Recibiste un correo electrónico de: ".$nombre." ".$apellido.".\n\n".$mensaje;
    
    mail($mailTo, $asunto, $mensaje, $headers);
    header("Location: index.html?mailsend");
}