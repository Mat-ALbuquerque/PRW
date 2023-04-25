<?php 
    $nome = $_GET['nome'];
    $nota1 = $_GET['nota1'];
    $nota2 = $_GET['nota2'];
    $frequencia = $_GET['frequencia'];

    $media= ($nota1 * $nota2)/2;

    if($media < 5)
    {
        echo "<color='#ff0000'> Reprovado por nota";
    }
    else if($frequencia < 75)
    {
        echo "<color='#ff0000'> Reprovado por frequência";
    }
    else 
    {
        echo "Aprovado";
    }
?>