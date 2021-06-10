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
            <p>Grupo de Imagens</p>
            <select name="estados" class="form-select" aria-label="Default select example" required>
                <option value="" disabled selected>Selecione</option>
                <?php 


                include "Matriz_Estados.inc";
                for($i=0 ; $i<count($estados); $i++){
                    echo("<option value='$i'>".$estados[$i][0]."</option>");
                }
                
                
                ?>
                
                
            </select>

            </br></br>
            <button type="submit" class="btn btn-primary">Detalhar</button>


        </form>



    </div>

</body>

</html>