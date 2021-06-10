<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Par ou Impar</title>
    <link rel="stylesheet" href="style.css">
  
</head>
<body>
    <div class="container border m-3 text-center">
        <h1>Resultado</h1>
    <?php

    $valor = filter_input(INPUT_POST,"valor");

    if($valor % 2 ==0){
        echo("<h3>$valor é par</h3>");
    }else{
        echo("<h3>$valor é impar</h3>");
    }

    ?>
    </div>    
</body>
</html>