<?php
include 'conexao.php';

$id = 4;

mysqli_query($link, "DELETE FROM td_login WHERE id = '$id'");