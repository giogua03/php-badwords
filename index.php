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
    $testo = 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Omnis adipisci distinctio doloremque quibusdam est perspiciatis, eos, qui dolorum veritatis, aliquid consequatur veniam pariatur ullam consequuntur deleniti nihil sed quod magni!';
    $testoCens = str_ireplace($_GET['badword'], '***', $testo);
    $lunga = strlen($testoCens);
    ?>

    <p><?= $testoCens ?></p>
    <form method="GET" action="">
        <label for="parolaCens">Scrivi la parola da censurare</label>
        <input type="text" id="parolaCens" name="badword">
        <button>Censura!</button>
    </form>
    <span>Lunghezza paragrafo: </span>
    <span><?= $lunga ?> caratteri.</span>
</body>
</html>