<?php 
// Résultat de la requete SELECT * FROM products
$products = [
    ["id" => 1, "name"=> "Genou", "price" => 56],
    ["id" => 2, "name"=> "Composant", "price" => 65],
    ["id" => 3, "name"=> "Rond point", "price" => 78],
]
// Affichez ces produits dans le ul
?>

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
    <h1>Liste de nos produits</h1>
    <ul>    
        <?php foreach ($products as $produit):?>

        <li>
            <a href="ex_2_2.php?id=<?php echo $produit['id']?>">
                <?php echo $produit['name']?>
            </a>

        </li>
        <?php endforeach ?>
    </ul>

</body>
</html>