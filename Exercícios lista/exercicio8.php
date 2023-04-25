<?php
     $multiplica = $_GET['multiplica'];

     for ($i=1; $i <= 10; $i++)
     {
        $pos = $multiplica * $i;
        
        echo "$multiplica x $i = $pos <br>";
     }
?>