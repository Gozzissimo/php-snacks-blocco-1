<?php
    // ## Snack 5
    // Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.
    $fullText = "In una caverna sotto terra viveva uno hobbit. Non era una caverna brutta, sporca, umida,
piena di resti di vermi e di trasudo fetido, e neanche una caverna arida, spoglia, sabbiosa, con
dentro niente per sedersi o da mangiare: era una caverna hobbit, cioè comodissima.
Aveva una porta perfettamente rotonda come un oblò, dipinta di verde, con un lucido pomello
d'ottone proprio nel mezzo. La porta si apriva su un ingresso a forma di tubo, come un tunnel:
un tunnel molto confortevole, senza fumo, con pareti foderate di legno e pavimento di
piastrelle ricoperto di tappeti, fornito di sedie lucidate, e di un gran numero di attaccapanni
per cappelli e cappotti: lo hobbit amava molto ricevere visite. Il tunnel si snodava, inoltrandosi profondamente anche se non in linea retta nel fianco della collina (o meglio la Collina,
come era chiamata da tutta la gente per molte miglia all'intorno) e molte porticine rotonde si
aprivano su di esso, prima da una parte e poi dall'altra. Niente piani superiori per lo hobbit: le
camere da letto, i bagni, le cantine, le dispense (molto numerose), i guardaroba (c'erano
camere intere destinate ai vestiti), le cucine, le sale da pranzo, erano tutte sullo stesso piano,
anzi sullo stesso corridoio. Le camere migliori erano tutte sul lato sinistro (entrando), perché
erano le sole ad avere finestre: finestre rotonde profondamente incassate che davano sul
giardino e sui campi dietro di esso, lentamente degradanti verso il fiume.
Questo hobbit era uno hobbit veramente benestante, e il suo nome era Baggins. I Baggins
avevano vissuto nella zona attorno alla Collina da tempi immemorabili, e la gente li
considerava molto rispettabili, non solo perché in generale erano molto ricchi, ma anche
perché non avevano mai avuto nessuna avventura né fatto niente di imprevedibile: si poteva
presupporre l'opinione di un Baggins su un problema qualsiasi senza che ci fosse bisogno di
chiedergliela. Questa è la storia di come un Baggins ebbe un'avventura e si trovò a fare e dire
cose del tutto imprevedibili.";

    $explodedText = explode('.', $fullText);
    
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
    <p><?php echo $fullText; ?></p>

    <?php foreach ($explodedText as $key => $value) {
        ?>
            <p><?php echo $value; ?></p>
        <?php
    } ?>
</body>
</html>