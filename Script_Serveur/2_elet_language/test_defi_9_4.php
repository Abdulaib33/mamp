<?php 

/* Créez un tableau indexé $products avec dedans,
   3 tableaux associatifs ayant comme tiroirs :
	name
	price
	isAvailable 0/1

    Faire un foreach sur le li et n'afficher que les produits disponibles (if)
*/


$products = [
    [
        'name' => 'Laptop',
        'price' => 899.99,
        'isAvailable' => 1
    ],
    [
        'name' => 'Smartphone',
        'price' => 599.50,
        'isAvailable' => 0
    ],
    [
        'name' => 'Headphones',
        'price' => 149.99,
        'isAvailable' => 1
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products List</title>
</head>
<body>
<style>
    body {
        background-color: darkslategray;
        color: wheat;
    }
    .price {
        color: lightgreen;
        font-weight: bold;
    }
</style>

    <h1>Listes des produits disponibles</h1>

    <ul>
    <?php foreach ($products as $product) { ?>
        <?php if ($product['isAvailable']) { ?>
            <li>
                <?php echo $product['name']; ?> - 
                <span class="price">$<?php echo number_format($product['price'], 2); ?></span>
            </li>
        <?php } ?>
    <?php } ?>
    </ul>

    <ul>
        <?php foreach($products as $product): ?>
            <?php if($product['isAvailable']): ?>
                <li>
                    <?= $product['name'] ?> - 
                    <span class="price">$<?= number_format($product['price'], 2) ?></span>
                </li>
            <?php endif; ?>
        <?php endforeach; ?>
    </ul>

</body>
</html>