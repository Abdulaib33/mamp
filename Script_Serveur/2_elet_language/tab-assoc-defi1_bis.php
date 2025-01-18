<?php 

// Ceci est le resultat du 
// SELECT * FROM products WHERE id = 43;

 $product = [
    "nom" => "Composant électronique",
    "Prix" => 59.90,
    "quantité" => 56
 ];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Magasin - <?php echo $product["nom"]?></title>
</head>
<body>
    
    <h1><?php echo $product["nom"]?></h1>
    <p>Description :</p>
    <div>
        Prix: <?php echo $product["Prix"]?> € <br>
        Quantité disponible: <?php echo $product["quantité"]?>
    </div>

</body>
</html>