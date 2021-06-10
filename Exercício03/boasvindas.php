<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boas Vindas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
<div class="container border m-3">

<?php
    //$nome = $_POST['nome'];
    //$idade = filter_input(INPUT_POST, 'idade');
    extract($_REQUEST, EXTR_OVERWRITE);
    
    if($sexo == "feminino"){
    echo("<h3>Bem-Vinda $nome</h3>");    
    }else{
    echo("<h3>Bem-Vindo $nome</h3>");
    }

    if($idade < 16){
    echo("Seu voto é proibido");
    }elseif($idade >= 16 && $idade <18){
        echo("Seu voto é opcional");
    }elseif ($idade >=18 && $idade <=70){
        echo("Seu voto é obrigatório");
    }else{
        echo("Seu voto é opcional");
    }    
?>
<p class="p-3">

<button class="btn btn-primary" onclick="history.go(-1)">Voltar</button>

</p>

</div>    
    
</body>
</html>