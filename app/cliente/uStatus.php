<?php
include '../config/conexao.php';

$idCliente = $_GET['id'];
$status = $_GET['status'];
if ($status == 'a') {
    $status = 'i';
} 
else { $status = 'a'; }

$sqlstatus = "update cliente set status = '{$status}' where id='{$idCliente}'";
$query = mysqli_query($conn, $sqlstatus);

header('location: paginaConsultar.php');


