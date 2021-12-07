<?php
session_start();
include('conexao.php');
if(empty($_POST['username']) || empty($_POST['password'])) {
    header('Location: index.php');
    exit();
}

$usuario = mysqli_real_escape_string($conexao, $_POST['username']);
$senha = mysqli_real_escape_string($conexao, $_POST['password']);

$query = "select user_id, username from user where username = '{$usuario}' and password = md5('${senha}')";

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

if($row == 1) {
    $_SESSION['username'] = $usuario;
    list($user_id, $username)=$result->fetch_row();

    $_SESSION['user_id'] = $user_id;

    header('Location: ranking/ranking.php');
} else {
    $_SESSION['nao_autenticado'] = true;
    header('Location: index.php');
    exit();
}