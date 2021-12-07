<?php
    include('../verifica_login.php');
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    <script src="https://code.jquery.com/jquery-1.9.1.js"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="game.css">
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
            <div id="telaConfiguracao" class="ativo">
                <h1>Campo Minado</h1>

                <div id="bombas">
                    <div id="bombaIcon">*</div>
                    <input id="qtdBombas" type="number" class="item" value="15" />
                </div>

                <div id="proporcao">
                    <input id="altura" type="number" class="item" value="10" />
                    <div id="divisor">x</div>
                    <input id="largura" type="number" class="item" value="10" />
                </div>

                <button onclick="iniciarJogo()">Iniciar</button>
            </div>

            <div id="telaJogo">
                <div id="statusJogo">
                    <img src="../assets/imgs/redflag.png" alt="Icone flag" class="game-img">
                    <div id="labelQtdBandeiras"></div>
                    <img src="../assets/imgs/clock.png" alt="Icone relógio" class="game-img">
                    <div id="labelTempo">000</div>
                    <div id="labelPontuacao">Pontuação: 0</div>
                    <img id="voltar" src="../assets/imgs/back-arrow.png" alt="Icone voltar" class="game-img">
                </div>

                <div id="areaCampo"></div>
            </div>

        </div>
        <script type="text/javascript" src="../script.js"></script>
        </div>


    </main>
</body>