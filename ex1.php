<!DOCTYPE html>
<html lang="br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex 1</title>
</head>
<body>
    <?php

    $base = $_GET['base'];
    echo "Base: ", $base, "<br>";

    $altura = $_GET['altura'];

    echo "Altura: ", $altura, "<br>";
    echo "Área: ",$base * $altura, "<br>";
    echo "Perímetro: ", $base + $base + $altura + $altura;

    ?>
</body>
</html>