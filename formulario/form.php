<?php
    // $_GET obtém dado do formulário enviado via GET
    // $_POST obtém dado do formulário enviado via POST
    
    // nome entre '' deve ser igual ao name do input
    // definido no formulario html
    $nome = $_GET['nome']; 
    $idade = $_GET['idade'];
    echo "<h1>$nome</h1>";
    echo "<h2>$idade</h2>";
    echo "<input value=$idade>";
    if(strlen($nome) < 20)
    {
        echo "<h3>Nome deve conter no mínimo 20 caracteres</h3>";
    }
    if($idade > 18)
    {
        echo "<h3>Aluno maior de idade!</h3>";
    }
    else
    {
        echo "<h3>Aluno menor de idade!</h3>";
    }
?>
    <!-- Código HTML -->
    <a href='form.html'><button>Voltar</button></a>