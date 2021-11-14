<?php 
    include "../config/conexao.php";

    /* Destruindo a sessão e fechando a conexão com o bd */
    session_start();
    session_destroy(); 
    
    echo ("<script>
        window.alert('logout realizado')
        window.location.href='../../index.php';
    </script>");

    mysqli_close($conn);
?>