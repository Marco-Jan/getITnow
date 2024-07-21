<?php

require_once '../config/autoloader.php';
require_once '../config/db_connect.php';
require_once '../models/Product.php';
require_once '../models/User.php';

$products = Product::getAllProducts($db);
$users = User::getAllUser($db);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>getItnow</title>
</head>

<body>
    <div id="navbar">
        <ul>
            <li><a href="/views/products.view.php">Produkte</a></li>
            <li><a href="/views/categories.view.php">Kategorie</a></li>
            <li><a href="/views/login.view.php">Login</a></li>
        </ul>
    </div>
    <div id="container">
        <h2>Produkte:</h2>
        <ul>
            <?php foreach ($products as $product): ?>
                <li>
                    <div class="productCard">
                        <?= $product->getName() . ' - ' . $product->getDescription() ?>
                    </div>
                </li>
            <?php endforeach; ?>
        </ul>

        <h2>Benutzer:</h2>
        <ul>
            <?php foreach ($users as $user): ?>
                <li><?= $user->getName(); ?></li>
            <?php endforeach; ?>
        </ul>
    </div>

</body>

</html>