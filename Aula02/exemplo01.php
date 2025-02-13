<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exemplo 01 - PHP</title>
</head>
<body>
    <?php
    $nome = "Anderson";
    ?>

    <h1>Aula 02 INTRODUTORIA DE PHP<h1>
    <h2>Prof . Andersonh Vanin </h2>

    <p> Oi sou o prof Anderson</p>

    <?php
    echo"<p> Oi sou o prof Anderson </p>";
    echo "<p> Oi sou o prof $nome</p>";
    echo "<p> Oi sou o prof ".$nome."</p>";
    ?>

</body>
</html>