<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <title>Produto</title>
</head>
<body>
  <div class="container">
    <form class="border p-3 mt-3" method="post" action="total.php">
      <h1>Preencha os dados do Produto</h1>
      <div class="mb-3 col-md-6">
        <label for="exampleInputEmail1" class="form-label">Nome do produto:</label>
        <input type="text" class="form-control" id="exampleInputEmail1" name="nome" aria-describedby="emailHelp" required>
      </div>
      <div class="mb-3 col-md-1">
        <label for="exampleInputEmail1" class="form-label">Valor:</label>
        <input type="number" class="form-control" id="exampleInputEmail1" name="valor" aria-describedby="emailHelp" required>
      </div>
      <div class="mb-3 col-md-1">
        <label for="exampleInputEmail1" class="form-label">Quantidade:</label>
        <input type="number" class="form-control" id="exampleInputEmail1" name="quantidade" aria-describedby="emailHelp" required>
      </div>
      <div class="mb-3">
        Pagamento:
      </div>
      <div class="mb-3">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="pagamento" value="vista" id="disabledFieldsetCheck" checked>
          <label class="form-check-label" for="disabledFieldsetCheck">
            À Vista (10% desconto)
          </label>
        </div>
      </div>
      <div class="mb-3">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="pagamento" value="parcelado" id="disabledFieldsetCheck">
          <label class="form-check-label" for="disabledFieldsetCheck">
            Parcelado em 2x
          </label>
        </div>
      </div>
      <div>
        <button type="submit" class="btn btn-primary col-md-1">Enviar</button>
      </div>
    </form>
  </div>
</body>
</html>