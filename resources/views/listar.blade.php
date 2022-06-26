<!DOCTYPE html>
<html lang="pt">

<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Produtos</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>

<body>
      <div class="container" style="background-color: rgba(0, 0, 0, 10%); padding: 5vh 0">
            <div style="width: fit-content; margin: auto;">
                  <button class='btn btn-dark' onclick="document.location = '/cadastrar';">Cadastrar Novo</button>
            </div>
            <br>
            @csrf
            <table style="width: 100%" class="table table-hover">
                  <thead class="table-dark">
                        <td>#</td>
                        <td>Nome</td>
                        <td>Valor</td>
                        <td>Estoque</td>
                        <td></td>
                  </thead>
                  <?php
                        foreach($produto as $element){
                              echo "<tr>";
                              echo "<td>$element->id</td>";
                              echo "<td>$element->nome</td>";
                              echo "<td>R$$element->valor</td>";
                              echo "<td>$element->estoque</td>";
                              echo "<td style='text-align: center'><button class='btn btn-dark' onclick='document.location=\"/editar/{$element->id}\"'>Editar</button></td>";
                              echo "</tr>";
                        }
                  ?>
            </table>
      </div>
</body>

</html>