<?php 

// Résultat de la requette SELECT id, pseudo FROM users ORDER BY pseudo ASC;

$users = [
    ["id" => "1", "pseudo" => "Bernadette"],
    ["id" => "2", "pseudo" => "Inge"],
    ["id" => "3", "pseudo" => "Roger"]
]

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
    
    <h1>Inscription sur notre site</h1>
    <form action="traitement2.php" method="post">
        <input type="text" name="pseudo" placeholder="Your pseudo"> <br>
        <input type="text" name="coucou" placeholder="ecirt coucou"> <br>
        <input type="checkbox" name="newsletter"> Je m'inscris à la newsletter <br>
        <input type="submit">
    </form>



</body>
</html>