<?php
session_start();
include('../conexao.php');

$points = mysqli_real_escape_string($conexao, $_POST['points']);
$time = mysqli_real_escape_string($conexao, $_POST['time']);
$date = date('d-m-y');
$user_id = $_SESSION['user_id'];
$user_name = $_SESSION['username'];

$query = "insert into play_history (user_id, date, points, time, user_name) values('{$user_id}', '{$date}', '{$points}', '${time}', '${user_name}')";


if($conexao->query($query) === TRUE) {
    header('Location: game.html');
    exit;
} else {
    header('Location: game.html');
    exit();
}