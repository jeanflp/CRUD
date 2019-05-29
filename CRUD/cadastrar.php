<!doctype html>
<html lang="pt-br">
  <head>
  <title>CRUD - Cadastro</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style1.css">
    <link rel="stylesheet" href="css/style6.css">
    <script src="css/animate.js"></script>
</head>
</div>
    <body>
    <?php require_once 'process.php'; ?>

    <div class="row justify-content-center">
        <form action="" method="POST">
        <div class="form-group">
        <label>Nome
        </label>
        <input type="text" name="name" class="form-control" value="Digite o nome completo.">
        </div>
        <div class="form-group">
       <label>Série</label>
       <input type="text" name="serie" class="form-control" value="Digite a série.">
        </div>
        <div class="form-group">
        <button type="submit" class="btn btn-black" name="salvar">Salvar</button>
        <a href="listagem.php" class="btn btn-secondary">Listagem</a>
</div>
        </form>
        </div>
        </div>
        </div>
</body>
</html>