<?php

session_start();

$mysqli = new mysqli('localhost', 'root', '', 'crud') or die(mysqli_error($mysqli));

if (isset($_POST['salvar'])){
    $name = $_POST['name'];
    $escola = $_POST['escola'];

    $mysqli->query("INSERT INTO data (name, escola) VALUES ('$name', '$escola')") or 
            die($mysqli->error);

            $_SESSION['message'] = '<div class="alert alert-success" role="alert">Usuário salvo com sucesso!';

            header("location: index.php");

} 

if (isset($_GET['delete'])){
    $id = $_GET['delete'];
    $mysqli->query("DELETE FROM data WHERE id=$id") or die($mysqli->error());

    $_SESSION['message'] = '<div class="alert alert-danger" role="alert">Usuário deletado com sucesso!';

    header("location: index.php");

}