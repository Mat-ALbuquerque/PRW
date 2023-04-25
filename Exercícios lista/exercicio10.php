<?php
    $quantpequenas = $_GET['quantpequenas'];
    $quantmedio = $_GET['quantmedio'];
    $quantgrande = $_GET['quantgrande'];

    $pequena = 10;
    $medio = 12;
    $grande = 15;

    $valor = ($quantpequenas * $pequena) + ($quantmedio * $medio) + ($quantgrande * $grande);
    echo "Valor da compra: R$$valor\n";
?>