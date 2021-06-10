<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Tabela de imagens</title>
    <link rel="stylesheet" href="estilo.css">
</head>

<body>
    <div class="container border p-2">
        <h1 class="text-center">Tabela de Imagens</h1>

        <form action="tabela.php" method="POST">

            <p class="font-weight-bold">Preencha a quantidade de colunas:<input type="number" name="colunas" min="1" max="5" value="1"></p>
            <button class="btn btn-primary" type="submit">Enviar</button>
            <button class="btn btn-primary" type="reset">Limpar</button>

        </form>



    </div>
</body>

</html>