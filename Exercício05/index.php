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
  <div class="container">
    <form class="border p-3 mt-3" method="post" action="tabela.php">
      <h1>Montar Tabela</h1>
      <div class="mb-3">
        Selecione a dimensão:
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="radio" value="bi" onclick="radio2()" id="flexRadioDefault1" checked>
        <label class="form-check-label" for="flexRadioDefault1">
          Bidimensional (várias colunas)
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="radio" value="uni" onclick="radio1()" id="flexRadioDefault2">
        <label class="form-check-label" for="flexRadioDefault2">
          Unidimensional (uma coluna)
        </label>
      </div>
      <div class="w-75 container border m-2 p-2 hide" id="tabela1">
        <h3>Preencha as dimensões da Tabela:</h3>
        Quantidade de linhas<input type=number min="1" value="1" max="10" name="linhas1" class=" form-control" required>
      </div>
      <div class="w-75 container border m-2 p-2 hide" id="tabela2">
        <h3>Preencha as dimensões da Tabela:</h3>
        Quantidade de colunas<input type=number value="2" min="2" max="10" name="coluna2" class=" form-control" required>
        Quantidade de linhas<input type=number value="1" min="1" max="10" name="linhas2" class=" form-control" required>
      </div>
      <div>
        <button type="submit" class="btn btn-primary col-md-1 mt-2">Enviar</button>
      </div>
    </form>
  </div>
  <script>
    function radio1() {
      document.getElementById('tabela1').style.display = 'block'
      document.getElementById('tabela2').style.display = 'none'
    }
    function radio2() {
      document.getElementById('tabela1').style.display = 'none'
      document.getElementById('tabela2').style.display = 'block'
    }
  </script>
  <style>
    .hide {
      display: none;
    }
  </style>
</body>
</html>