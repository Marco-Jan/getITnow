<?php
require_once '../config/autoloader.php';
require_once '../config/db_connect.php';
require_once '../config/functions.php';
require_once '../models/Category.php';

$categories = Category::getAll($db);
$title = e("Produkt Kategorien");

?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="../style.css">

    <title><?= $title ?>
    </title>
</head>
<div id="navbar">
    <ul>
        <li><a href="/views/index.view.php">Home</a></li>
        <li><a href="/views/products.view.php">Produkte</a></li>
        <li><a href="/views/categories.view.php">Kategorie</a></li>
        <li><a href="/views/login.view.php">Login</a></li>
    </ul>
</div>
<h1><?= $title ?></h1>

<ul>
    <?php foreach ($categories as $category): ?>
        <li><?= $category->getName() ?></li>
    <?php endforeach; ?>
</ul>
</body>

</html>