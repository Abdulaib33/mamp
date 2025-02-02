<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>HEHEHEHEH <?php echo $_GET['userID']?></h1>

    <h1>SOOOOO EASY LOOK DOWN 👀</h1>
    <ul>
        <li><?php echo $_GET['pseudo']?></li>
    </ul>
    <h1>WE ALL HAVE SEEN IT</h1>
    <p>Requete qui devrait s'executer ici:</p>
    <pre>
        SELECT *
        FROM users
        WHERE id = <?php echo $_GET['userID']?>
    </pre>
</body>
</html>