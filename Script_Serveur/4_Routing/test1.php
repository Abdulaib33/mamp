<?php 


// ROUTER: remplir $content en fct des $_GET
// ROUTE QUI SOMMES NOUS
/// PATTERN: /?qui-somes-nous
if (isset($_GET['qui-sommes-nous'])):
    $content = "<h2>Accueil</h2><p>Lorem 2..</p>";

// ROUTES CONTACTS
// PATTERN: /?contacts
elseif (isset($_GET['contacts'])):
    $content = "<h2>Contacts</h2><p>Lorem 3...</p>";

// ROUTE PAR DEFAUT
// PATTERN: /
else :
    $content = "<h2>Accueil</h2><p>Lorem...</p>";
endif;





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

    * {
        text-decoration: none;
        color: wheat;
    }
</style>
    <h1>Test de routing</h1>
    <nav>
        <ul>
            <li><a href="test1.php">Accueil</a></li>
            <li><a href="test1.php?qui-sommes-nous">Qui sommes nous</a></li>
            <li><a href="test1.php?contacts">Contacts</a></li>
        </ul>
    </nav>
    <main>
        <?php echo $content?>
    </main>
</body>
</html>