<?php

    require_once 'header.php';
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
    
    require 'path/to/PHPMailer/src/Exception.php';
    require 'path/to/PHPMailer/src/PHPMailer.php';
    require 'path/to/PHPMailer/src/SMTP.php';
    
    // var_dump($_POST);
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nom = $_POST['firstname'];
        $prenom = $_POST['name'];
        $email = $_POST['email'];
        $choixDest = $_POST['destination'];
        $choixArt = $_POST['article'];
        $message = $_POST['message'];

        // ! utilisation de l'interface PHP : PHPMailer (bibliothèque php)
        $mail = new PHPMailer(true);
        $host = 'smtp.elasticemail.com';
        $username = 'mateau.tetuanui@gmail.com'; 
        $password = '8FC11B7D64CFDD30F008414DBE0F35E2D427';

        try {
            //Configuration du serveur
            $mail->isSMTP();
            $mail->Host       = $host;
            $mail->SMTPAuth   = true;
            $mail->Username   = $username;
            $mail->Password   = $password;
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port       = 2525;

            //Destinataires
            $mail->setFrom('cyb92.cybanui@hotmail.com', 'MEDIRAIL');
            $mail->addAddress('tetuanui@hotmail.fr', 'Client test'); // Ajouter un destinataire

            //Contenu
            $mail->isHTML(true);
            $mail->Subject = 'Sujet de l\'email : Demande client ' . $nom . $prenom;
            $mail->Body    = 'Ceci est le corps de l\'email en HTML <b>' . $choixArt . $choixDest . $email . $message . '</b>';
            $mail->AltBody = 'Ceci est le corps en texte brut pour les clients de messagerie non HTML :' . $message .
            'Choix de l\'article CLIENT : ' . $choixArt . 'Choix de destination CLIENT : ' . $choixDest;

            $mail->send();
            echo 'Message envoyé';
        } catch (Exception $e) {
            echo "Le message n'a pas pu être envoyé. Mailer Error: {$mail->ErrorInfo}";
        }
    };


?>