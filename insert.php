<?php
include 'conexao.php';
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
mysqli_query($link,"insert into td_login(nome,email,senha)values('$nome','$email','$senha')");
header('location:formulario.php')
?>