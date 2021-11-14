<?php

    include "../config/conexao.php";

    $nome = $_POST['nome']; 
    $dtnasc = $_POST['dtnasc']; 
    $cpf = $_POST['cpf']; 
    $telefone = $_POST['tel']; 
    $email = $_POST['email']; 
  

    $sqlselect = "select * from cliente where cpf='{$cpf}'";
    $resultselect = mysqli_query($conn, $sqlselect);

    $data_atual = date("Y-m-d");
    if(((int)$data_atual - (int)$dtnasc) >= 18){
        if($rowresult = mysqli_num_rows($resultselect) > 0 ){
            echo ("<script>
            window.alert('CPF já cadastrado')
            window.location.href='paginaCadastro.php';
        </script>");
        }
        else {
            $sqlinsert = "insert into cliente values (null, '{$nome}','{$dtnasc}', '{$cpf}', '{$telefone}', '{$email}', 'a')";
            if ($queryinsert = mysqli_query($conn, $sqlinsert)){
                echo ("<script>
            window.alert('Cliente cadastrado com sucesso')
            window.location.href='paginaCadastro.php';
        </script>");
            } else {
                echo ("<script>
            window.alert('Erro ao cadastrar')
            window.location.href='paginaCadastro.php';
        </script>");
            }
        }
    }
    else {
        echo ("<script>
            window.alert('Você precisa ser maior de idade para continuar    ')
            window.location.href='paginaCadastro.php';
        </script>");
    }
    

 /* 
   



    
     */


   

    

    

?>