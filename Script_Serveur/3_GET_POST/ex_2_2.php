<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <style>
        body {
        background-color: darkslategray;
        color: wheat;
    }
    a {
        text-decoration: none;
    }
    </style>
        <h1>Page de détails du produit n° <?php echo $_GET['id']?></h1>

        <h2>Requete qui devrai s'exécuter ici</h2>
        <pre>
            SELECT * 
            FROM products
            WHERE id = <?php echo $_GET['id'] ?>
        </pre>
</body>
</html>