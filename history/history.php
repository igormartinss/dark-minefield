<?php
include("../conexao.php");
include('../verifica_login.php');
$user_id =  $_SESSION['user_id'];
$query = mysqli_query($conexao, "SELECT * FROM play_history where user_id = $user_id");
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="history.css">
    <title>Dark Minefield - Histórico</title>
</head>

<body>
    <header>
        <div class="header">
            <span class="logo-header">
                <img src="../assets/imgs/logo.png" alt="Dark Minefield Logo">
            </span>
            <nav class="navigation">
                <ul>
                    <li><a href="../game/game.php">Jogo</a></li>
                    <li><a href="../history/history.php">Histórico</a></li>
                    <li><a href="../ranking/ranking.php">Ranking</a></li>
                </ul>
                </span>
            </nav>
    </header>
    <main>
        <div class="container">
            <div>
                <h1>Histórico</h1>
            </div>
            <div class="history-table">
                <table>
                    <thead>
                        <th>#</th>
                        <th>Pontuação</th>
                        <th>Tempo</th>
                        <th>Data</th>
                    </thead>
                    <tbody>
                        <?php
                            while ($row = mysqli_fetch_array($query)) {
                        ?>
                        <tr>
                            <td>#<?php echo $row["play_history_id"]; ?></td>
                            <td><?php echo $row["points"]; ?></td>
                            <td><?php echo $row["time"]; ?>s</td>
                            <td><?php echo $row["date"]; ?></td>
                        </tr>
                        <?php
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
</body>

</html>