<?php

class userController {

    public function getAlluser($db){
        $users = User::getAllUser($db);

        require 'views/index.php';
    }
}