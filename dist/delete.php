<?php


require('../dist/config/db.config.php');


if (isset($_GET['id'])) {
    $id = htmlspecialchars($_GET['id']);
    $req = $pdo->prepare("DELETE FROM articles WHERE id = ? LIMIT 1");
    $req->execute([$id]);
    $post = $req->fetch();
    if (empty($post)) {
        header('location: total-product.php');
    }
}
