<?php 

// if(isset($_POST['newsletter'])){
//     $newsletter = "1";
// }else{
//     $newsletter = "0"; #default value
// }


// Récupération de la checkbox 'newsletter'
$newsletter = isset($_POST['newsletter']) ? '1' : '0';

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
    <h1>Traitement de texte</h1>
    <p>Données envoyées</p>
    <ul>
        <li>
            Pseudo: <?php echo $_POST['pseudo']?>
        </li>
        <li>
            Coucou: <?php echo $_POST['coucou']?>
        </li>
        <li>
            Newsletter: <?php echo $newsletter?>
        </li>
    </ul>

    <p>Requête qui devrait s'executer ici:</p>
    <pre>
        INSERT INTO users
        SET pseudo = "Abdulaib33",
            newsletter = 0;
    </pre>
</body>
</html>