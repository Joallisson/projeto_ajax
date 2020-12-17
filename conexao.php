<?php
$host = "localhost";
$user = "root";
$pass = "";
$banco = "db_ajax";
$link = mysqli_connect($host, $user, $pass) or die(mysqli_connect_error());
$db = mysqli_select_db($link, $banco) or die("Erro ao Selecionar o Data Base!");
?>