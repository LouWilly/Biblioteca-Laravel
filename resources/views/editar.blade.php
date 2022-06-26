<!DOCTYPE html>
<html lang="pt">

<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Produtos - Editar</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</head>
<body>
      <div class="card" style="width: fit-content; margin: auto">
            <div class="card-header bg-dark text-white" style="text-align: center;">
                  <h1>Editar Produto</h1>
            </div>
            <div class="card-body">
                  <form id="form" action="/editar-produto/{{$produto->id}}" method="POST"
                        style="width: fit-content; text-align: center;">
                        @csrf
                        <div class="mb-3 row" style="text-align: left;">
                              <label class="col" for="labelNome">Nome:</label>
                              <input class="col" type="text" name="nome" value="{{$produto->nome}}">
                        </div>
                        <div class="mb-3 row" style="text-align: left;">
                              <label class="col" for="labelValor">Valor:</label>
                              <input class="col" type="text" name="valor" value="{{$produto->valor}}">
                        </div>
                        <div class="mb-3 row" style="text-align: left;">
                              <label class="col" for="labelQtd">Estoque:</label>
                              <input class="col" type="text" name="estoque" value="{{$produto->estoque}}">
                        </div>
                  </form>
            </div>
            <div class="card-footer bg-dark text-white" style="text-align: center;">
                  <button class="btn btn-light" type="submit" form="form">Editar</button>
                  <button class="btn btn-light" type="button" onclick="document.location='/deletar-produto/{{$produto->id}}'">Excluir</button>
            </div>
      </div>
</body>
</html>