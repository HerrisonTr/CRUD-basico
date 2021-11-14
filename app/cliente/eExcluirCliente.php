<?php
include '../config/conexao.php';

$idCliente = $_GET['id'];

$del = "delete from cliente where id= '{$idCliente}'";
if ($querydel = mysqli_query($conn, $del)) {
    echo "cliente excluido";
}
