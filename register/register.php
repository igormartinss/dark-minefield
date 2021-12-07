<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="register.css">
    <title>Dark Minefield - Cadastrar</title>
</head>

<body>
    <main class="register">
        <div class="container">
            <div class="register-logo">
                <img src="../assets/imgs/logo.png" alt="Dark Minefield logo">
            </div>
            <form class="form" action="register_user.php" method="POST">
                <div class="form-row">
                    <div class="form-column">
                        <div class="input-label">
                            <label for="">Usuário</label>
                        </div>
                        <div class="text-input">
                            <input type="text" name="username" id="username">
                        </div>
                    </div>
                    <div class="form-column">
                        <div class="input-label">
                            <label for="password">Senha</label>
                        </div>
                        <div class="text-input">
                            <input type="text" name="password" id="password">
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-column">
                        <div class="input-label">
                            <label for="">Nome</label>
                        </div>
                        <div class="text-input">
                            <input type="text" name="first-name" id="first-name">
                        </div>
                    </div>
                    <div class="form-column">
                        <div class="input-label">
                            <label for="password">Sobrenome</label>
                        </div>
                        <div class="text-input">
                            <input type="text" name="last-name" id="last-name">
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-column">
                        <div class="input-label">
                            <label for="">Data de Nascimento</label>
                        </div>
                        <div class="text-input">
                            <input type="date" name="birth-date" id="birth-date" width="270">
                        </div>
                    </div>
                    <div class="form-column">
                        <div class="input-label">
                            <label for="password">CPF</label>
                        </div>
                        <div class="text-input">
                            <input type="number" name="cpf" id="cpf">
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-column">
                        <div class="input-label">
                            <label for="">Telefone</label>
                        </div>
                        <div class="text-input">
                            <input type="tel" name="phone" id="phone">
                        </div>
                    </div>
                    <div class="form-column">
                        <div class="input-label">
                            <label for="password">Email</label>
                        </div>
                        <div class="text-input">
                            <input type="email" name="email" id="email">
                        </div>
                    </div>
                </div>
                <div class="form-row form-buttons">
                    <div class="form-column cancel-button">
                        <button o>Cancelar</button>
                    </div>
                    <div class="form-column register-button">
                        <button type="submit"> Cadastrar</button>
                    </div>
                </div>
            </form>

        </div>
    </main>
</body>

</html>