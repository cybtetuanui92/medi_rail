<?php
<<<<<<< HEAD
    $host = "**********";
    $dbname = "*********";
    $user = "*********";
    $password = "***********";
=======
    $host = "*********";
    $dbname = "*********";
    $user = "*********";
    $password = "*********";
>>>>>>> abfbcc0 (update config db_medi_rail)

    try {
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
        // echo 'Connexion réussie à la base de données<br>';
    } catch (PDOException $e) {
        echo 'Erreur de connexion : ' . $e->getMessage();
    }
?>
