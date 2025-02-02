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

    <h1>Liste de nos users</h1>
    <ul>
        <?php foreach ($users as $user):?>
        <li>
            <a href="details.php?userID=<?php echo $user['id']?>">
                <?php echo $user['pseudo'] ?>
            </a>
        </li>
        <?php endforeach?>
    </ul>

    <p>Requete qui devrait s'executer cic:</p>
    <pre>
        SELECT id, pseudo
        FROM users
        ORDER BY pseudo ASC
    </pre>

</body>
</html>