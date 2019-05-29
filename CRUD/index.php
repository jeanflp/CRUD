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
      <title> CRUD- Login</title>
      <meta chartset="utf-8">
</head>
<body>

<h1> Login </h1>
<form action="" method="POST">
Login: <input type="text" name="login"><br>
Senha: <input type="password" name="senha"><br>
<button type="submit" name="btn-entrar"> Entrar </button>
</form>
</body>
</html>