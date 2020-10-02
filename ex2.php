<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio02</title>
</head>
<body>
    <?php
    $peso = $_GET['peso'];

    $altura = $_GET['altura'];
    
    $resultado = $peso / ($altura * $altura);

    echo "Seu Imc é: ", $resultado; 
    echo "<br><br>";

    if ($resultado > 25 ){
        echo "você está acima do peso";
    }
    
    else if ($resultado <= 25){
        echo "Você está saudavel";
    }

    ?>
</body>
</html>