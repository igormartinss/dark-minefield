<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
    <title>Dark Minefield</title>
</head>

<body>
    <main class="login">
        <div class="container">
            <div class="login-logo">
                <img src="assets/imgs/logo.png" alt="logo dark Minefield">
            </div>
            <?php 
                    if(isset($_SESSION['nao_autenticado'])):
                    ?>
                    <div class="notification is-danger">
                      <p>Usuário ou senha inválidos.</p>
                    </div>
                    <?php
                    endif;
                    unset($_SESSION['nao_autorizado']);
                    ?>
            <form action="login.php" method="POST">
                <div class="login-inputs">
                    <div class="input-label">
                        <label for="username">usuário</label>
                    </div>
                    <div class="text-input">
                        <input type="text" name="username" id="username">
                    </div>
                    <div class="input-label">
                        <label for="password">senha</label>
                    </div>
                    <div class="text-input">
                        <input type="password" name="password" id="password">
                    </div>
                </div>
                <div class="login-buttons">
                    <button class="login-button">Entrar</button>
                    <div class="register">
                        <p>Novo por aqui? <a href="register/register.php" class="register-button">Cadastre-se</span>
                        </p>
                    </div>
                </div>
            </form>
        </div>
    </main>
</body>

</html>