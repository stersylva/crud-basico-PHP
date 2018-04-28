<?php
include "conexao.php";

$consulta = $_POST['consulta'];
$sql = mysqli_query($link, "SELECT * FROM td_login WHERE nome LIKE '%$consulta%'");

if($sql ==''){
    echo 'erro';
}
else {
    while ($vetor = mysqli_fetch_array($sql)) {

        $id = $vetor['id'];
        $nome = $vetor['nome'];
        $email = $vetor['email'];
        $senha = $vetor['senha'];

//        echo "ID : $id<br>";
        echo "Nome : $nome<br>";
//        echo "Email : $email<br>";
//        echo "Senha : $senha<hr>";
    }
}
mysqli_close($link);