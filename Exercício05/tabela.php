<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Tabela</title>
</head>

<body>
    <div class="container border p-3 mt-3">
        <?php
        $checkbox = $_POST['radio'];
        $colunas = $_POST['coluna2'];
        $linhas = $_POST['linhas2'];
        $linhas2 = $_POST['linhas1'];
        $t = 1;

        if ($checkbox == "bi") {
            echo '<h1>Tabela com ' . $linhas . ' linhas(s) e ' . $colunas . ' Coluna(s)</h1>';
            echo '<table class="table table-striped table-dark">';
            echo '<thead>';
            echo '<tr>';
            for ($i = 1; $i < $colunas + 1; $i++) {
                echo '<th scope="col">Coluna ' . $i . '</th>';
            }
            echo '</tr>';
            echo '</thead>';
            echo '<tbody>';
            for ($i = 1; $i < $linhas + 1; $i++) {
                echo '<tr>';
                for ($e = 0; $e < $colunas; $e++) {
                    echo '<td>Celula ' . $t . '</td>';
                    $t++;
                }
                echo '</tr>';
            }
            echo '</tbody>';
            echo '</table >';
        }
        if ($checkbox == "uni") {
            echo '<h1>Tabela Unidimensional com ' . $linhas2 . ' linha(s)</h1>';
            echo '<table class="table  table-striped table-dark">';
            echo '<thead>';
            echo '</thead>';
            echo '<tbody>';
            for ($i = 1; $i < $linhas2 + 1; $i++) {
                echo '<tr scope="row"><td>Linha ' . $i . '</tr>';
            }
            echo '</tbody>';
            echo '</table >';
        }
        ?>
        <button type="submit" class="btn btn-primary col-md-1 mt-1" onclick="history.go(-1)">Voltar</button>
    </div>

</body>

</html>