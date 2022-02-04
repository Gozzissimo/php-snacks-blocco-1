<!-- SNACK
Creiamo un array consentente dei prodotti con
Nome
Prezzo
Immagine
Tipologia
Stampiamo tutti i nostri prodotti in pagina
Poi con una select filtriamo i nostri prodotti per prezzo o per tipologia -->

<?php
    $cart = [
        [
            "nome" => "zucchine",
            "prezzo" => "2,00",
            "immagine" => "img/zucchina.jpg",
            "tipologia" => "verdura",
        ],
        [
            "nome" => "branzino",
            "prezzo" => "24,00",
            "immagine" => "img/branzino.jpg",
            "tipologia" => "pesce",
        ],
        [
            "nome" => "prosciutto crudo",
            "prezzo" => "35,00",
            "immagine" => "img/prosciutto crudo.jpg",
            "tipologia" => "affettati",
        ],
        [
            "nome" => "forentina",
            "prezzo" => "45,00",
            "immagine" => "img/fiorentina.jpg",
            "tipologia" => "carne",
        ],
        [
            "nome" => "sgrassatore chanteclair",
            "prezzo" => "1,50",
            "immagine" => "img/sgrassatore.jpg",
            "tipologia" => "pulizia casa",
        ],
        [
            "nome" => "meloni",
            "prezzo" => "4,00",
            "immagine" => "img/melone.jpg",
            "tipologia" => "frutta",
        ],
    ];

    $filteredCart = $cart;
    
    if (isset($_GET['tipologia']) !== false) {
        $tipologia =$_GET['tipologia'];
        if ($tipologia === 'All') {
            $filteredCart = $cart;
        } else {
            foreach ($cart as $item) {
                if ($item['tipologia'] === $tipologia) {
                    $filteredCart = [];
                    $filteredCart[] = $item;
                }
            }
        }
    } else {
        $filteredCart = $cart;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="GET">
        <select name="tipologia" id="tipologia">
            <option value="all">All</option>
            <option value="verdura">verdura</option>
            <option value="pesce">pesce</option>
            <option value="affettati">affettati</option>
            <option value="carne">carne</option>
            <option value="pulizia casa">pulizia casa</option>
            <option value="frutta">frutta</option>
        </select>
        <button>Cerca</button>
    </form>

    <div class="container">
        <?php
            foreach ($filteredCart as $item) { ?>
                <div>
                    <div class="img">
                        <img src="<?= $item['immagine']?>" alt="<?= $item['nome']?>">
                    </div>
                    <div> <?= $item['nome']?> </div>
                    <div> <?= $item['prezzo']?> </div>
                    <div> <?= $item['tipologia']?> </div>
                </div>
            <?php } 
        ?>
    </div>
</body>
</html>