<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <title>Banco de Imagens</title>
</head>

<body>
    <div class="container border m-4 p-4 mx-auto">
        <?php
        $nestado = $_POST['estados'];
        include "Matriz_Estados.inc";

        ?>
        <h1 class='p-2 m-2 bg-info text-write'>Estado: <?= $estados[$nestado][1] ?></h1>
    </div>

    <div class='container'>
        <div class='row'>
            <div class='col my-auto'>
                <h4 class="text-muted">Sigla: <span class="text-info"><?= $estados[$nestado][0] ?></span></h4>
                <h4 class="text-muted">Capital: <span class="text-info"><?= $estados[$nestado][2] ?></span></h4>
                <h4 class="text-muted">Região: <span class="text-info"><?= $estados[$nestado][3] ?></span></h4>
            </div>
            <div class='col'>
                <img class='w-75 border d-block mx-auto' src='Imagens/<?=$estados[$nestado][4]?>' alt='Bandeira do Estado'/>
            </div>
        </div>
        <div>
    <input type ="submit" class="btn btn-primary" value="Voltar" onclick="history.go(-1)">
    </div>
    </div>
    
</body>

</html>