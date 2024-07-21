<?php

require_once '../models/Product.php';
require_once '../config/db_connect.php';
require_once '../config/functions.php';

class ProductController
{
    public function getAllProducts($db)
    {

        $products = Product::getALLProducts($db);

        require 'views/products.view.php';

    }


}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = e($_POST['name']) ?? '';
    $description = e($_POST['description']) ?? '';
    $price = (float) e($_POST['price']) ?? 0.0;
    $quantity = (int) e($_POST['quantity']) ?? 0;

    if ($name && $description && $price && $quantity) {
        Product::addProduct($db, $name, $description, $price, $quantity);
        header("Location: /views/Admin/views/admin.view.php?success=1");
        exit;
    } else {
        header("Location: /views/Admin/views/admin.view.php?error=1");
        exit;
    }
}