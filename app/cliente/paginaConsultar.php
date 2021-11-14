<?php
session_start();
include "../config/conexao.php";
if (empty($_SESSION['id'])){
    header('Location: ../inc/sair.php');
    echo ("<script>
            window.alert('Necessário realizar login para continuar')
            window.location.href='../../index.php';
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
            <h1>Consultar cliente</h1>
            <table>
                <tr>
                    <th>ID </th>
                    <th>Nome</th>
                    <th>Data de nascimento</th>
                    <th>Cpf</th>
                    <th>Telefone</th>
                    <th>Email</th>
                </tr>
                <?php
                    $sql = "select * from cliente";
                    $query = mysqli_query($conn, $sql);
                    while ( $dados = mysqli_fetch_array($query)){                                               
                ?>

                <tr>
                <?php echo $dados[6]?>
                    <td><?php echo $dados[0];?></td>
                    <td><?php echo $dados[1];?></td>
                    <td><?php echo $dados[2];?></td>
                    <td><?php echo $dados[3];?></td>
                    <td><?php echo $dados[4];?></td>
                    <td><?php echo $dados[5];?></td>
                    <td><button href="eExcluirCliente.php?id=<?php echo $dados[0] ?>"> <a href="eExcluirCliente.php?id=<?php echo $dados[0] ?>"> X</a></button></td>
                    <td><button> <a href="editarCliente.php?id=<?php echo $dados[0] ?>"> E</a></button></td>
                    <td><button> <a href="uStatus.php?id=<?php echo $dados[0] ?>&status=<?php echo $dados[6] ?>"> <?php if($dados[6] == 'a') { echo 'Desativar';} else { echo 'Ativar';} ?></a></button></td>
                   
                </tr>
                <?php } ?>
            </table>

        </main>
    </div>
</body>

</html>