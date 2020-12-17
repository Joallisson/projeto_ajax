<?php
    include('conexao.php');
    $nome = $_POST['nome'];
    $matricula = $_POST['matricula'];

    $sql = "insert into funcionario(nome, matricula) values('$nome', '$matricula')";
    $insert = mysqli_query($link, $sql);

    if ($insert) {
        echo "<p>Dados inseridos com sucesso!</p>";
    } else {
        echo "<p>Não foi possível inserir os dados!</p>";
    }
    