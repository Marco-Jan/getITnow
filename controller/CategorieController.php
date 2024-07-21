<?php

class CategorieController {
    public function getALLCategories($db){

        $categories = Category::getAll($db);

        require 'views/categories.view.php';
    }
}