<?php
session_start();
if (empty($_SESSION['id'])){
  header('Location: ../index.php');
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

  <link href="assets/css/style.css" rel="stylesheet" type="text/css">
  <link href="assets/css/sidebar.css" rel="stylesheet" type="text/css">
  

  <title>Dashboard</title>
</head>

<body>
  <div class="container-geral">
    <?php include "inc/sidebar.php"; ?>
    <main class="main">
    <h1>Gerenciamento</h1>
        <section id="gerenciamento">
  
            <div class="card">
              <a href="cliente/paginaInicial.php">Cliente</a> 
            </div>
            
            <div class="card">
              Acomodações
            </div>
            <div class="card">
              Itens
            </div>
            <div class="card">
              Usuário
            </div>
            <div class="card">
              Usuário
            </div>
            <div class="card">
              Usuário
            </div>
            <div class="card">
              Usuário
            </div>
            <div class="card">
              Usuário
            </div>
            <div class="card">
              Usuário
            </div>
        </section>
    </main> 
  </div>
</body>

</html>