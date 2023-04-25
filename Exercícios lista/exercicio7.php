<?php
    $nome = $_GET['nome'];
    $idade = $_GET['idade'];
    
    $ano = 365;
    $diasdevida = $ano * $idade;

    echo "$nome possui $diasdevida dias de vida!\n";
?>