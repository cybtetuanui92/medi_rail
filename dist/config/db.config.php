<?php
    $host = "**********";
    $dbname = "*********";
    $user = "*********";
    $password = "***********";

    try {
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
        // echo 'Connexion réussie à la base de données<br>';
    } catch (PDOException $e) {
        echo 'Erreur de connexion : ' . $e->getMessage();
    }
?>
