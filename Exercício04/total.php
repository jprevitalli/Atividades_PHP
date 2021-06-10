<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Exercicio 2</title>
</head>

<body>
    <div class="container">
        <form class="border p-3 mt-3" method="post" action="parimpar.php">
            <?php
            $nome = filter_input(INPUT_POST, "nome");
            $valor = filter_input(INPUT_POST, "valor");
            $quantidade = filter_input(INPUT_POST, "quantidade");
            $total = $valor * $quantidade;
            $vista = $total * 0.9;
            $parcelado = $total / 2;
            $pagamento = $_POST['pagamento'];

            if ($pagamento == "vista") {
                echo ("
                <h1>
                Produto: $nome </br>
                Valor: $valor </br>
                Quantidade: $quantidade </br>
                Total: $total </br>
                Total com desconto à vista : $vista
                </h1>
                <input type='button' class='btn btn-primary col-md-1' value='Voltar' onClick='history.go(-1)'>
            ");
            } else {
                echo ("
                <h1>
                Produto: $nome </br>
                Valor: $valor </br>
                Quantidade: $quantidade </br>
                Total: $total </br>
                Total parcelado: 2x de $parcelado
                </h1>
                <input type='button' class='btn btn-primary col-md-1' value='Voltar' onClick='history.go(-1)'>
            ");
            }
            ?>
        </form>
    </div>
</body>

</html>