<?php

include "../app/config/conexao.php";

if (!empty($_POST["login"] && $_POST["senha"])) {

    $login = $_POST["login"];
    $senha = $_POST["senha"];

    /*  Puxando dados do bd */
    $select = "select * from login where login= '{$login}' and senha= '{$senha}'";
    $query = mysqli_query($conn, $select);

    /* Verificando se o login existe */
    if ($rowcliente = mysqli_num_rows($query) > 0) {

        /* Iniciando sessão*/
        session_start();
        $dados = mysqli_fetch_array($query);
        $_SESSION['id'] = $dados[0];
        $_SESSION['login'] = $dados[1];
        $_SESSION['nivel'] =  $dados[2];

        echo ("<script>
        window.alert('Login realizado com sucesso')
        window.location.href='../app/paginainicial.php';
    </script>");
    } else {
        echo ("<script>
        window.location.href='../index.php'
        window.alert('Login invalido');
    </script>");
    }

    mysqli_close($conn);
} else {
    echo ("<script>
    window.location.href='../index.php'
    window.alert('Preencha todos os campos');
</script>");
}
