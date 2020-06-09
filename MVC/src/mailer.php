<?php

// Import de PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Validation du formulaire via $_POST["input-name"]
// Connexion
$email = "allubet@edenschool.fr";                           // L'adresse email (1)
$mdp = "alann1806";                                         // Le mot de passe de l'email (1)
$smtp_port = 465;                                           // Le port du smtp (1) (ici de gmail)
$smtp_host = 'smtp.gmail.com';                              // Service SMTP de l'hébergeur ou du serveur (1) (ici de gmail)
$connexion = 'ssl';                                         // Par défaut 'ssl', conseillé (1)

// Dev mode
$mode_dev = true;                                           // false en phase de production pour éviter les logs.

// Message
$sujetDuMessage = "ÉOLE... dans le vent";        // Le sujet du message
$contentAlt = "alann.pro69@gmail.com";                                       // Le contenu en text brut
$content = "<h1>ERROR 503 this page is on maintenance<br>Vous avez reçu un mail de ÉOLE.</h1>";                                 // Le contenu en html (2)
$from = $email;                                             // A changer si tu veux (par exemple si l'utilisateur met son email).
$from_name = 'Équipe ÉOLE';                                            // Le nom de l'envoyeur, facultatif.
$to = $_POST["email"];                                                   // Destinataire
$to_name = $_POST["name"];                                              // Le nom du destinataire, facultatif.

// Redirections
$redirection = "/home";                                         // Redirection si le mail a bien été envoyé
$redirectionSiEchec = "/home";                        // Redirection si le mail n'a pas été envoyé

// (1) Image (OVH) non vérifiée par moi : https://aide.bobelweb.eu/bobbooking/wp-content/uploads/sites/5/2016/04/config-ovh-4.png
// (2) Aides
//      - Tuto :                           https://webdesign.tutsplus.com/fr/articles/build-an-html-email-template-from-scratch--webdesign-12770
//      - Styles disponnibles en email :   https://caniuse.email/



$mail=new PHPMailer($mode_dev); 
    //settings
    $mail->isSMTP();
    $mail->SMTPAuth=true;

    $mail->Host=$smtp_host;
    $mail->SMTPSecure=$connexion;
    $mail->SMTPDebug=$mode_dev ? 2 : 0;
    $mail->Port=$smtp_port;

    $mail->Username=$email;
    $mail->Password=$mdp;

    $mail->setFrom($from, $from_name);
    $mail->addAddress($to, $to_name);

    //content
    $mail->isHTML(true); // Set email format to HTML
    $mail->Subject=$sujetDuMessage;
    $mail->Body=$content;
    $mail->AltBody=$contentAlt;

    $mail->send();

$redirection;
