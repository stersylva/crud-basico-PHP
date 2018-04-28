<?php
include 'conexao.php';

$nome = "Maria do Carmo da Silva";

mysqli_query($link, "UPDATE td_login set nome ='$nome', senha = 'amor' WHERE id = 3");

