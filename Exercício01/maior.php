<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maior</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
<div class="container border m-3">
<h1> Resultado:</h1>

    <?php
        $valor1 = $_POST["valor1"];
        $valor2 = $_POST["valor2"];

       if($valor1 > $valor2){
           echo("$valor1 é maior que $valor2");
       }elseif($valor2 > $valor1){
           echo("$valor2 é maior que $valor1");
       }else{
           echo("$valor1 e $valor2 são iguais!");
       }

    ?>
</div>    
</body>
</html>