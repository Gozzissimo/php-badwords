<!-- // Descrizione:
// Creare una variabile con un paragrafo di testo a vostra scelta.
// Stampare a schermo il paragrafo e la sua lunghezza.
// Una parola da censurare viene passata dall’utente tramite parametro GET.
// Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare. -->

<?php
    $filastrocca = "Apelle, figlio di Apollo, fece una palla di pelle di pollo. Tutti i pesci vennero a galla, per vedere la palla di pelle di pollo, fatta da Apelle, figlio di Apollo.";

    // parola da censurare
    $parolaCensurata = $_GET["word"];

    $censoredFilastrocca = str_replace("$parolaCensurata", "***", trim($filastrocca));


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
    <p><?= $filastrocca ?></p>
    <p><?= "Contiene ".strlen($filastrocca)." caratteri" ?></p>

    <p><?= $censoredFilastrocca ?></p>
    <p><?= "Contiene ".strlen($censoredFilastrocca)." caratteri" ?></p>
    
</body>
</html>