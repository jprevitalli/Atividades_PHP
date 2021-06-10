<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Tabela de Imagens</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
<div class="container border p-2">
    <h1 class="text-center">Tabela de Imagens</h1>

<table class="table ">
<?php
$colunas = $_POST['colunas'];
$a = 0;
for($i=1; $i <= 20; $i++){

    if($a == 0){
    echo("<tr>");
}

echo("<th class='text-center'> <img src='Imagens/$i.png'/> </th>");
$a++;

if($a==$colunas){
    echo("</tr>");
    $a=0;
}
}

?>
</table>
<div class="text-center">
<button class="btn btn-danger" type="submit" onclick="history.go(-1)">Voltar</button>
</div>
</div>   
</body>
</html>