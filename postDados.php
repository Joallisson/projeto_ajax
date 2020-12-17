<?php
    include('conexao.php');
    $nome = $_POST['nome'];
    $matricula = $_POST['matricula'];

    $sql = "insert into funcionarios(nome, matricula) values('$nome', '$matricula')";
    //$insert = mysqli_query($link, $sql);
    $insert = $link->prepare("INSERT INTO funcionarios(nome, matricula) VALUES (:nome, :matricula)");
    $insert->execute(array(
        ':nome' => $nome,
        ':matricula' => $matricula
    ));

    if ($insert) {
        echo "<p>Dados inseridos com sucesso!</p>";
    } else {
        echo "<p>Não foi possível inserir os dados!</p>";
    }
    