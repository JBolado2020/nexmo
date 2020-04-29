<?php

    $oJson = '';
    $body = $_REQUEST['body'];
    $email = 'ventas@tercerescalon.com';
    $from_email = $_REQUEST['email'];
    $subject = "Solicitud de producto Portal tercer escalón";
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "From: $from_email"."\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    $message = '
    <html lang="es">
        <head>
            <meta charset="UTF-8">
            <title>Solicitud de producto en Web Site</title>
        </head>
        <body>
                <article>
                    <h2>'.$body.'</h2>    
                </article>
     
            
        </body>
    </html>
    ';
    
            $oJson = '{
                "success": true,
                "respu": "Mensaje de correo enviado"
            }';
            mail($email, $subject, $message, $headers);
        
    header('Content-type: application/json');
    echo $oJson;
?>