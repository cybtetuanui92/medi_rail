<?php
    $host = "localhost";
    $dbname = "medi_rail";
    $user = "root";
    $password = "Free_je_suis_94";

    try {
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
        // echo 'Connexion réussie à la base de données<br>';
    } catch (PDOException $e) {
        echo 'Erreur de connexion : ' . $e->getMessage();
    }
?>
