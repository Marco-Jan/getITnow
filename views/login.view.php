

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="../style.css">

    <title>
        Login
    </title>
</head>

<body>
    <div id="navbar">
        <ul>
            <li><a href="/views/index.view.php">Home</a></li>
            <li><a href="/views/products.view.php">Produkte</a></li>
            <li><a href="/views/categories.view.php">Kategorie</a></li>
            <li><a href="/views/login.view.php">Login</a></li>
        </ul>
    </div>

    <form action="../controller/loginController.php" method="POST" id="loginForm">
        <label for="Bname">Benutzername</label>
        <input type="text" id="Bname" name="Bname">
        <label for="email">Email</label>
        <input type="email" id="email" name="email">
        <label for="password">Passwort</label>
        <input type="password" id="password" name="password">
        <button id="subBtn" type="submit">Login</button>
    </form>

</body>

</html>