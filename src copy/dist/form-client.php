<?php
    // var_dump($_POST);
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nom = $_POST['firstname'];
        $prenom = $_POST['name'];
        $email = $_POST['email'];
        $choixDest = $_POST['destination'];
        $choixArt = $_POST['article'];
        $message = $_POST['message'];
    };

    

?>