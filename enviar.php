<?php

    
        $name = $_POST['name'];
        $subjet = $_POST['subject'];
        $mailFrom = $_POST['mail'];
        $message = $_POST['message'];    

        $mailTo = "debris.banda@gmail.com"
        $headers = "Correo: ".$mailFrom;
        $txt = "Mensaje enviado desde la pagina de débris por ".$name."\n\n".$message;

        mail($mailTo,$subjet,$message,$headers);
        header("Location: index.html");

   
    




?>