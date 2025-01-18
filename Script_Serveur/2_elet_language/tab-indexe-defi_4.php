<?php 

$produits = [
    "Bouée",
    "Télésiège",
    "Gaufre",
    "Tapis",
    "Composant électronique",
    "Chaussettes"

];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau </title>
</head>
<body>

    <ul>
            <?php 
                foreach ($produits as $coucou) {
                    echo "<li> $coucou </li>";
                };
            ?>
    </ul>

</body>
</html>