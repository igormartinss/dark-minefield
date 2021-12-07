<?php
include('../conexao.php');


$username = mysqli_real_escape_string($conexao, $_POST['username']);
$password = mysqli_real_escape_string($conexao, $_POST['password']);

$query = "insert into user (username, password) values('{$username}', md5('${password}'))";


if($conexao->query($query) === TRUE) {
    header('Location: ../index.php');
} else {
    header('Location: register.php');
    exit();
}