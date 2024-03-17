<?php

require('../dist/config/db.config.php');

// var_dump($_POST);

// var_dump($id);
if ($_SERVER['REQUEST_METHOD']  == "POST") {
    $id = $_POST['id'];
    $url   =  $_POST['image'];
    $name  =  $_POST['name'];
    $info  =  $_POST['info'];
    $price =  $_POST['price'];
}


// $req = $db->prepare("UPDATE detail 
//             SET '$picture', '$title', '$description',  '$price',  '$image' WHERE id = '$id'");


$req = $pdo->prepare("UPDATE articles
SET image = '$url', name = '$name', info = '$info', price = '$price'
WHERE id = '$id'");


$req->execute();







header('location: detail.php?id=' . $id);
