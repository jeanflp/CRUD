<?php
//Conexão com o BANCO DE DADOS
require_once 'conexao.php';

//Sessão
session_start();

//Botão enviar
if(isset($_POST['btn-entrar'])):
$erros = array();
$login = mysqli_scape_string($connect, $_POST['login']);
$senha = mysqli_scape_string($connect, $_POST['senha']);

endif;

if(empty($login) or empty($senha)):
   $erros[] = "<li> O campo login/senha precisa ser preenchido. </li>";
else:
endif;
?>

<html>
<head>
   <title>CRUD - Login</title>
<meta charset="utf-8">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" href="css/style1.css">
<script type="text/javascript"></script>
</head>
<!---------------->

<div class="sidenav">
         <div class="login-main-text">
            <h2>Obtenha acesso<br> ao sistema CRUD</h2>
            <p>Faça login para obter acesso ao conteúdo do sistema.</p>
         </div>
      </div>
      <div class="main">
         <div class="col-md-6 col-sm-12">
            <div class="login-form">
               <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                  <div class="form-group">
                     <label>ID</label>
                     <input type="text" name="login" class="form-control" placeholder="Digite seu ID.">
                  </div>
                  <div class="form-group">
                     <label>Senha</label>
                     <input type="password" name="senha" class="form-control" placeholder="Digite sua senha.">
                  </div>
                  <button type="submite" name="btn btn-entrar" class="btn btn-black"> Entrar </button>

<!----------------              

<input type="button" name="btn-entrar" class="btn btn-black" onclick="location.href='#';" value="Entrar" />

<button type="submit" class="btn btn-secondary">Registrar</button>

 ---------------->
               </form>
            </div>
         </div>
</div>
<html>