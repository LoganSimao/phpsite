<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio03</title>
</head>
<body> 
    <?php

    $login = $_GET['Login'];

    $senha = $_GET['Senha'];

    if ($login == "etecia" && $senha == "etecia238"){
        echo "Autenticação realizada com sucesso!";
    }
    else{
        echo "Desculpe você não tem permissão de visualizar essa página!";
    }

    ?>

</body>
</html>