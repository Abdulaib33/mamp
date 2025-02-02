<!-- PARTIE TEMPLATE -->
<?php 
// ROUTER

// ROUTE CONTACTS
// PATTERN: ?contacts
if (isset($_GET['contacts'])):
    $content = "
    <h2>Contactez-nous</h2>
    <p>Pour nous contacter ...</p>
    ";


//ROUTE détail d'un produit
// PATTERN: ?productID=x
elseif(isset($_GET['productID'])):
    $content = "
        <h2>Détail du produit n° {$_GET['productID']}</h2>
    ";


// ROUTE PAR DEFAUT
// PATTERN: ?
// ul>li>a avec les products
else:
        
    
    $content = "
        <h2>Listes des produits</h2>
        <ul>
            <li>
                <a href='?productID=1'>Produit 1</a>
            </li>
            <li>
                <a href='?productID=2'>Produit 2</a>
            </li>
            <li>
                <a href='?productID=3'>Produit 3</a>
            </li>
        </ul>
    
    ";
    
endif;

$test = [
    ["id" => "1", "product" => "Produit 1"],
    ["id" => "2", "product" => "Produit 2"],
    ["id" => "2", "product" => "Produit 3"]

]

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="shortcut icon" href="image.png" type="image/x-icon">
      <!-- Compiled and minified CSS -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>
<body class="container">

<style>
        body {
        background-color: darkslategray;
        color: wheat;
        
    }

    * {
        text-decoration: none;
        color: wheat;
    }
</style>


<nav>
    <div class="nav-wrapper container">
      <a href="#" class="brand-logo">Logo</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="?">Products</a></li>
        <li><a href="?contacts">Contacts</a></li>
      </ul>
    </div>
  </nav>

  <main>
    <!-- ZONE DYNAMIQUE content -->
    <?php echo $content?>
  </main>

  <footer>
    <hr>
    <div>EAFC 2025</div>
  </footer>

</body>
</html>