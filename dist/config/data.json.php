<?php
    require_once 'data.php';
    header('Content-Type: application/json');
    echo json_encode($articles);
    exit();
?>