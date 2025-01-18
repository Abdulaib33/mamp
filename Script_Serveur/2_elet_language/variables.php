<?php 

$prenom = "Abdoulaye";
echo $prenom; // Abdoulaye
var_dump($prenom); // string(9)


echo "<h1>Bonjour $prenom</h1>"; // Bonjour Abdoulaye

echo '<h1>Bonjour $prenom</h1>'; // Bonjour $prenom

$products = ["Pomme", "Genou", "Barre"];

echo "<h1>>Produit 1  $products[0]</h1>"; // Produit 1 Pomme
echo "<h1>>Produit 2  $products[1]</h1>"; // Produit 2 Genou
echo "<h1>>Produit 3  $products[2]</h1>"; // Produit 3 Barre

// 4 - Définissez un tableau indexé nommé 'produits' avec comme valeurs :

//     Bouée
//     Télésiège
//     Gaufre
//     Tapis
//     Composant électronique
//     Chaussettes

// Affichez le contenu de tous les tiroirs dans un ul > li
// Astuce : mettez un ul avec un echo à l'extérieur de la boucle foreach

    $produits = [
        "Bouée",
        "Télésiège",
        "Gaufre",
        "Tapis",
        "Composant électronique",
        "Chaussettes"

    ];

    echo "<ul>";
        foreach($produits as $guinée) {
            echo "<li>$guinée</li>";
        }
    echo "</ul>";

    // foreach ( $produits as $produit ) {
    //     echo "<ul>";
    //         echo "<li>$produit</li>";
    //     echo "</ul>";
    // };



// 1. Définissez un tableau associatif nommé 'monProduit' avec comme contenu :

//     nom : Composant électronique
//     prix: 59.90
//     quantite: 56

// Affichez le contenu du tiroir 'prix'

// 2. Avec le même tableau, affichez le nom du produit dans un h1
// 3. Avec le même tableau, affichez tous les éléments du client dans un ul>li


 $atelier04 = [
    "nom" => "Composant électronique",
    "Prix" => 59.90,
    "quantité" => 56
 ];


 echo "<h1>" . $atelier04["nom"] . "</h1>";
 echo "<h1>{$atelier04["nom"]}</h1>";

 echo "<ul>";
    foreach ($atelier04 as $k => $j) {
        echo "<li>$k : $j</li>";
    };
 echo "</ul>";
