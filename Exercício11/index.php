<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <title>Banco de Imagens</title>
</head>

<body>
    <div class="container border m-4 p-4 mx-auto">
        <h1 class='p-2 m-2 bg-info text-write'>Banco de Imagens</h1>

        <form action="detalhes.php" method="POST">
           </br>
            <select name="regioes" class="form-select" aria-label="Default select example" required>
                <option value="" disabled selected>Selecione uma Região</option>
                <option value="Centro-Oeste" selected>Centro-Oeste</option>
                <option value="Nordeste" selected>Nordeste</option>
                <option value="Norte" selected>Norte</option>
                <option value="Sudeste" selected>Sudeste</option>
                <option value="Sul" selected>Sul</option>            
            </select>

            </br></br>
            <button type="submit" class="btn btn-primary">Detalhar</button>


        </form>



    </div>

</body>

</html>