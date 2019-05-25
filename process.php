<?php

session_start();

$mysqli = new mysqli('localhost', 'root', '', 'crud') or die(mysqli_error($mysqli));

if (isset($_POST['salvar'])){
    $name = $_POST['name'];
    $escola = $_POST['escola'];

    $mysqli->query("INSERT INTO data (name, escola) VALUES ('$name', '$escola')") or 
            die($mysqli->error);

            $_SESSION['message'] = "Usuário salvo com sucesso!";
            $_SESSION['msg_type'] = "success";

            header("location: index.php");

} 

if (isset($_GET['delete'])){
    $id = $_GET['delete'];
    $mysqli->query("DELETE FROM data WHERE id=$id") or die($mysqli->error());

    $_SESSION['message'] = "Usuário deletado com sucesso!";
    $_SESSION['msg_type'] = "danger";

    header("location: index.php");

}