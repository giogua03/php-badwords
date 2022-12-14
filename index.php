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
    $texto = 'La traduzione di un libro tocca corde sensibilissime nel cuore e nella mente dei lettori: si tratta di passare da una lingua all altra rispettandone
        «suoni e visioni» e mantenendo intatta la suggestione delle parole. In questo senso, la serie di Harry Potter ha comportato scelte editoriali molto delicate.
        In Harry Potter i nomi di persone o di luoghi contengono quasi sempre
        un allusione, una parodia, un gioco di parole. Molto spesso è stata mantenuta la forma inglese, perché più evocativa e immediata; altre volte si è
        scelta una traduzione che ricalcasse il significato dell originale o privilegiasse l assonanza; altre ancora un interpretazione che rendesse la suggestione comica o fiabesca o quotidiana del contesto. ';
        $testoCens = str_ireplace($_GET['censura'], '***', $texto);
        $lunga = strlen($testoCens);
    ?>

    <p><?= $testoCens?></p>
    <form method="GET" action="">
        <label for="parolaCens">Scrivi la parola da censurare</label>
        <input type="text" id="parolaCens" name="censura">
        <button>censura con ***</button>
    </form>
    <span>Lunghezza : </span>
    <span><?= $lunga ?> caratteri.</span>
</body>
</html>