<?php

session_start();

$mysqli = new mysqli('localhost', 'root', '', 'crud') or die(mysqli_error($mysqli));

if (isset($_POST['salvar'])){
    $name = $_POST['name'];
    $serie = $_POST['serie'];

    $mysqli->query("INSERT INTO data (name, serie) VALUES ('$name', '$serie')") or 
            die($mysqli->error);

            $_SESSION['message'] = '<div class="alert alert-success" role="alert">Usuário salvo com sucesso!';

            header("location: cadastrar.php");

} 

if (isset($_GET['delete'])){
    $id = $_GET['delete'];
    $mysqli->query("DELETE FROM data WHERE id=$id") or die($mysqli->error());

    $_SESSION['message'] = '<div class="alert alert-danger" role="alert">Usuário deletado com sucesso!';

    header("location: listagem.php");

}