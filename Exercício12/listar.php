<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <title>Notícias</title>
</head>

<body>
    <div class="container border m-4 p-4 mx-auto">
        <?php
        $sobreNoticias = $_POST['noticias'];
        include "Matriz_Noticias.inc";

        ?>
        <h1 class='p-2 m-2 bg-info text-white text-center'>Notícias sobre Tecnologia - <span class="text-warning"><?= $sobreNoticias ?></span></h1>
        <div class='row'>
            <?php

            for ($i = 0; $i < count($matriz_noticias); $i++) {
                if ($sobreNoticias == $matriz_noticias[$i][0]) {
                    echo ("<div class='col text-center'>");
                    echo ("<p class='font-weight-bold text-primary mt-2'><a href='detalhes.php?pagina=$i'>" . $matriz_noticias[$i][1] . "'</a></p>");
                    echo ("<img class='img-thumbnail' src='" . $matriz_noticias[$i][3] . "' alt='Foto da Notícia'/>");
                    echo ("<p class='text-justify mt-2'>" . $matriz_noticias[$i][2] . "</p>");
                    echo ("</div>");
                }
            }
            ?>

        </div>
        <button class="btn btn-primary mt-2" onclick="history.go(-1)">Voltar</button>
    </div>
</body>

</html>