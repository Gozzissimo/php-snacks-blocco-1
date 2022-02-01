<?php
    ## Snack 2
// Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”

$userName = $_GET["name"];
$userEmail = $_GET["email"];
$userAge = $_GET["age"];

$messagge = "Parametri non inseriti";

if (!empty($name) && !empty($email) && !empty($age) 
&& strlen($name) > 3 && strpos($email, "@") > 0 && strpos($email, ".") > 0 && is_numeric($age)) {
    $messagge "Accesso Riuscito";
} else {
    $messagge = "Accesso Negato";
    }

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
    <?php
        echo $messagge;
    ?>
</body>
</html>