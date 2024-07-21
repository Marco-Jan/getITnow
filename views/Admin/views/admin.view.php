<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../style.css">
    <title>Document</title>
</head>

<body>
    <div id="navbar">
        <ul>
            <li><a href="/views/login.view.php">Login</a></li>
            <li><a href="/views/categories.view.php">Kategorie</a></li>
            <li><a href="/views/products.view.php">Produkte</a></li>
        </ul>
    </div>

    <h1 style="margin: 20px;">Admin Bereich</h1>

    <?php if (isset($_GET['success'])): ?>
        <p>Produkt erfolgreich hinzugefügt!</p>
    <?php elseif (isset($_GET['error'])): ?>
        <p>Fehler beim Hinzufügen des Produkts. Bitte alle Felder ausfüllen.</p>
    <?php endif; ?>

    <form action="../../controller/productController.php" method="POST" enctype="multipart/form-data">
        <label for="name">Produktname</label>
        <input type="text" name="name" id="name">

        <label for="description">Beschreibung</label>
        <textarea name="description" id="description"></textarea>

        <label for="price">Preis</label>
        <input type="text" name="price" id="price">

        <label for="quantity">Menge</label>
        <input type="text" name="quantity" id="quantity">

        <button type="submit">Produkt hinzufügen</button>
    </form>
</body>

</html>