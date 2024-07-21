<?php

require_once '../config/autoloader.php';
require_once '../config/db_connect.php';
require_once '../models/Product.php';


$products = Product::getAllProducts($db);


?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="../style.css">

    <title>Produkte</title>
</head>
<div id="navbar">
    <ul>
        <li><a href="/views/index.view.php">Home</a></li>
        <li><a href="/views/products.view.php">Produkte</a></li>
        <li><a href="/views/categories.view.php">Kategorie</a></li>
        <li><a href="/views/login.view.php">Login</a></li>
    </ul>
</div>

<body>
    <h1>Unsere Produkte</h1>
    <ul>
        <div class="productCard">
            <?php foreach ($products as $product): ?>
                <div class="productCard">
                    <li><?= $product->getName() . " - " . $product->getPrice() . "€" ?></li>
                    <br>
                    <li><?= '(' . $product->getDescription() . ')'; ?></li>
                </div>
            <?php endforeach; ?>
        </div>
    </ul>
</body>

</html>