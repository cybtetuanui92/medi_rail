<?php
    require_once 'db.config.php';

    try {
        $sql = "SELECT * FROM articles";
        $stmt = $pdo->query($sql);

        $articles = $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo 'Aucune table de donnée récupérée : ' . $e->getMessage();
    }

    
    // !RECUP des TABLES de DONNEES OK (ici tabName -> $articles)
    // echo '<pre>';
    // print_r ($articles);
    // echo '</pre>';

?>