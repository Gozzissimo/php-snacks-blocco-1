<?php
    // ## Snack 4
    // Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta

    $array = [];
    
    while (count($array) < 15) {
        $rand = mt_rand(1,20);
        if (!in_array("$rand", $array)) {
            array_push($array, $rand);
        }
    }

    print_r( $array );

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
    
</body>
</html>