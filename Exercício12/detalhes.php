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
        $sobreNoticias = $_GET['pagina'];
        include "Matriz_Noticias.inc";

        ?>
        <h1 class='p-2 m-2 bg-info text-white text-center'>Notícias sobre Tecnologia</h1>
        <div class='row mt-5'>
            <div class="container w-75">
                <?php
                echo ("<div class='col text-center'>");
                echo ("<p class='font-weight-bold text-uppercase'>" . $matriz_noticias[$sobreNoticias][1] . "</p>");
                echo ("<img class='img-thumbnail' src='" . $matriz_noticias[$sobreNoticias][3] . "' alt='Foto da Notícia' />");
                echo ("<p class='text-justify mt-2'>" . $matriz_noticias[$sobreNoticias][2] . "</p>");
                echo ("</div>");
                ?>

            </div>

        </div>
        <button class=" btn btn-primary mt-2" onclick="history.go(-1)">Voltar</button>
    </div>

</body>

</html>