<?php

require_once '../models/User.php';
require_once '../config/db_connect.php';
require_once '../config/functions.php';

$dbUser = User::getAllUser($db);

$isAdmin = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = e($_POST['Bname']) ?? '';
    $email = e($_POST['email']) ?? '';
    $password = e($_POST['password']) ?? '';


    

    foreach ($dbUser as $user) {

        if (
            $username === e($user->getName()) &&
            $email === ($user->getEmail()) &&
            $password === ($user->getPassword())

        ) {
            $userRole = $user->getRole();

            if ($userRole === 'admin') {
                header("Location: /../views/Admin/views/admin.view.php");
                exit;
            } else {
                header("Location: /../views/products.view.php");
            }
        }
    }
    if ($username !== $user->getName()) {
        echo "Ungültiger Benutzername";

    } elseif ($email !== $user->getEmail()) {
        echo "Ungültige E-Mail";

    } else {
        echo "Ungültiges Passwort.";

    }
    // users:
    // Marco
    // marco@mail.com
    // 12345678

    // Testuser2
    // test2@mail.com
    // 123456789

    // admin:
    // Admin 
    // admin@mail.com 
    // 1234
}