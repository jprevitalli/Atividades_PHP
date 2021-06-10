<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <title>Detalhes</title>
</head>

<body>
    <div class="container border m-4 p-4 mx-auto">
        <?php
        $imagens = $_POST['grupoImagens'];
        ?>
        <h1 class="p-2 mt-2 bg-info text-white">Imagens de <?php echo ("$imagens"); ?></h1>

        <div class="row">
            <?php
            for ($i = 1; $i <= 5; $i++) { ?>
                <div class='col view zoom'>
                    <img class='img-thumbnail' src='./Imagens/<?= $imagens . $i ?>.jpg' alt='Imagem de GRUPO DA IMAGEM' />
                </div>
            <?php
            }
            ?>
        </div>

        <button class="btn btn-primary mt-2" onclick="history.go(-1)">Voltar</button>
    </div>

</body>

</html>