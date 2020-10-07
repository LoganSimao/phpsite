<?php
    $voto = $_GET['pesquisa'];

    if (!isset($_COOKIE['pesquisa'])){
        setcookie("pesquisa", $voto,time()+3600*24*31);

        $msg = "Obrigado por votar! ";
        $resultado = "";
    }

    else{
        $msg = "você já votou uma vez";
        $resultado = "<br> seu voto foi: ".$_COOKIE['pesquisa'];
    }
    
    echo $msg;
    echo $resultado;
?>