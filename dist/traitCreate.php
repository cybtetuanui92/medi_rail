<?php

// var_dump($_POST);

require('../dist/config/db.config.php');

if ($_SERVER['REQUEST_METHOD']  == "POST") {
    $url   =  $_POST['image'];
    $name  =  $_POST['name'];
    $info  =  $_POST['info'];
    $price =  $_POST['price'];
}


$insert = "INSERT INTO articles (image, name, info, price) VALUES (?, ?, ?, ?)";
$pre = $pdo->prepare($insert);
$pre->execute([$url, $name, $info, $price]);



header('location: total-product.php');