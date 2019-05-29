<!doctype html>
<html lang="pt-br">
  <head>
  <title>CRUD - Listagem</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style1.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
    <body>
    <?php require_once 'process.php'; ?>
  <?php
            if (isset($_SESSION['message'])): ?>
<?php
  echo $_SESSION['message'];
  unset($_SESSION['message']);
  ?>
  </div>
<?php endif?>
  <div class="container">
    <?php
            $mysqli = new mysqli('localhost', 'root', '', 'crud') or die(mysqli_error($mysqli));
            $result = $mysqli->query("SELECT * FROM data") or die($mysqli->error);
            //pre_r($result);
?>
  <div class="row justify-content-center">
    <table class="table">
      <thead>
                 <tr>
                        <th>Nome</th>
                        <th>Série</th>
                        <th colspan="2">Ação</th>
                </tr>
        </thead>
      <?php
            while ($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['serie']; ?></td>
                <td>
                  <a href="cadastrar.php?=<?php echo $row ['id']; ?>"
                class="btn btn-info">Editar</a>
                  <a href="process.php?delete=<?php echo $row['id']; ?>"
                class="btn btn-danger">Deletar</a>
              </td>
              </tr>
      <?php endwhile; ?>
  </table>
</div>
<?php
            function pre_r( $array ){
        echo '<pre>';
        print_r($array);
        echo '</pre>';
            }
    ?>
<div class="<row justify-content-center">
        <a href="cadastrar.php" class="btn btn-black">Voltar</a>
</div>
        </div>
</html>