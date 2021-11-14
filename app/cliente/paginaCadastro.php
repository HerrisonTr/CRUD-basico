<?php
session_start();
if (empty($_SESSION['id'])){
    header('Location: ../../index.php');
    echo ("<script>
            window.location.href='../../index.php';
            window.alert('Necessário realizar login para continuar')
        </script>"); }

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="../assets/css/style.css" rel="stylesheet" type="text/css">
    <link href="../assets/css/sidebar.css" rel="stylesheet" type="text/css">

    <!-- MASCARAS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>

    <script type="text/javascript">
        $("#telefone, #celular").mask("(00) 00000-0000");
        $("#cpf").mask("000.000.000-00");
    </script>

    <title>Cadastrar cliente</title>
</head>

<body>
    <div class="container-geral">
        <?php include "../inc/sidebar.php"; ?>
        <main class="main">
            <h1>Cadastrar cliente</h1>
            <form class="form-cadastro" action="gCadastrarCli.php" method="POST">
                <label for="nome" class="label-cli">Nome completo:</label>
                <input type="text" class="input-cli" placeholder="Nome" name="nome">

                <label for="dtnasc" class="label-cli">Data de nascimento:</label>
                <input type="date" class="input-cli" placeholder="" name="dtnasc">

                <label for="cpf" class="label-cli">CPF:</label>
                <input type="text" id="cpf" class="input-cli" placeholder="000.000.000-00" name="cpf">



                <label for="tel" class="label-cli">Telefone</label>
                <input type="text" id="telefone" class="input-cli" placeholder="(00) 00000-0000" name="tel">

                <label for="email" class="label-cli">E-mail:</label>
                <input type="email" class="input-cli" placeholder="E-mail" name="email">

                <button type="submite" class="btn-cadastro"> Cadastrar </button>

            </form>
        </main>
    </div>
</body>

</html>