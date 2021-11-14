<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="login/login.css" type="text/css" rel="stylesheet">

    <title>CRUD</title>
</head>

<body>
    <main>
        <form class="form-login" action="login/verificarlogin.php" method="POST">
            <h1 class="titulo">Login</h1>
            <div class="form-input">
                <input type="text" name="login" id="login"  placeholder="Digite seu login">
                <div class="linha"></div>
            </div>
            <div class="form-input">
                <input type="password" name="senha" id="senha" placeholder="Digite sua senha">
                <div class="linha"></div>
            </div>
            <button class="btn" type="submit"> Entrar</button>
        </form>
    </main>
</body>

</html>