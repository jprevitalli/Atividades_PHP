<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boas Vindas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
    <div class="container border m-3">
       
    <form class="p-3" action="boasvindas.php" method="POST">
  <div class="row mb-3">
    <label for="nome" class="col-sm-2 col-form-label">Nome:</label>
    <div class="col-sm-10">
      <input type="text" name="nome" class="form-control" id="nome">
    </div>
  </div>
  <div class="row mb-3">
    <label for="idade" class="col-sm-2 col-form-label">Idade:</label>
    <div class="col-sm-10">
      <input type="number" min="1" max="150" name="idade" class="form-control" id="idade">
    </div>
  </div>
  <fieldset class="row mb-3">
    <legend class="col-form-label col-sm-2 pt-0">Sexo</legend>
    <div class="col-sm-10">
      <div class="form-check">
        <input class="form-check-input" type="radio" name="sexo" id="feminino" value="feminino" checked>
        <label class="form-check-label" for="feminino">
          Feminino
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="sexo" id="masculino" value="masculino">
        <label class="form-check-label" for="masculino">
          Masculino
        </label>
      </div>
</fieldset>
      
    
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>


    </div>    
    
</body>
</html>