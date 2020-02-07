<?php

date_default_timezone_set('Europe/Paris');
require_once './function/classAutoLoader.php';
require_once './function/functionAutoLoader.php';
require('vendor/autoload.php');
spl_autoload_register('classAutoLoader');
spl_autoload_register('functionAutoLoader');



// Plusieurs destinataires
$to = 'stephanelemeilleut@free.fr'; // notez la virgule

// Sujet
$subject = utf8_decode('Combat du siècle');

// message
$message = '
     <html>
      <head>
       <title>Calendrier des anniversaires pour Août</title>
       <meta charset="UTF-8">
      </head>
      <body>
       <h1>CVTech vous remercie de votre participation </h1>
      </body>
     </html>
     ';

//Pour envoyer un mail HTML, l'en-tête Content-type doit être défini
$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/html; charset=iso-8859-1';

// En-têtes additionnels
$headers[] = 'To: MailDev <maildevestnul@wanadoo.fr';
$headers[] = 'From: Stephane le meilleur <stephanelemeilleut@free.fr>';

// Envoi
mail($to, $subject, $message, implode("\r\n", $headers));