<?php 
$name = $_GET['name'];
$age = $_GET['age'];
$email = $_GET['email'];
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="get">
        <label for="info">Inserisci le tue informazioni:</label>
        <div>
        <input type="text" name="name" id="name" placeholder="name">
        <input type="text" name="age" id="age" placeholder="age">
        <input type="text" name="email" id="email" placeholder="email">
        <button>Invia</button>
        </div>

    </form>
    <?php 
    $name_leng = strlen($name);
    $testNumber = is_numeric($age);
    if ($name_leng > 3 && $testNumber == true && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Accesso riuscito";
    } else {
        echo "Acceso negato";
    }
    ?>
    
</body>
</html>