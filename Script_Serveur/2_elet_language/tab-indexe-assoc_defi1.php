<?php 

// Votre tableau indexé de tableax associatifs
// 1. Définissez un tableau indexé nommé 'produits' contenant :

//     nom : Composant électronique
//     prix: 59.90
//     quantite: 56

//     nom: Bouée
//     prix: 29.90
//     quantite: 5

//     nom: Gaufre
//     prix: 2.00
//     quantite: 7


// Affichez le nom et le prix du premier tiroir dans un div comme suit :
// <div>Composant électronique: 59.90€</div>

// 2. Avec le même tableau, affichez tous les noms de produits dans un ul >li

$produits = [
    [   
        "nom" => "Composant electronique",
        "prix" => 59.90,
        "quantite" => 56,
    ],
    [   
        "nom" => "Bouée",
        "prix" => 29,90,
        "quantite" => 5,
    ],
    [   
        "nom" => "Gauffre",
        "prix" => 2.00,
        "quantite" => 7,
    ],

    ["nom"=> "Composant electronique", "prix"=> 59.90, "quantite"=> 56],
    ["nom"=> "Bouée", "prix"=> 29.90, "quantite"=> 5],
    ["nom"=> "Gauffre", "prix"=> 2.00, "quantite"=> 7]
]

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listes des produits</title>
</head>
<body>
    
    <h1>Listes des produits</h1>

    <ul>

    </ul>

</body>
</html>