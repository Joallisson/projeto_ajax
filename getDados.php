<?php
    include('conexao.php');
    $matricula = $_POST['matricula'];

    //$sql = "select * from funcionarios where matricula = '$matricula'";
    //$resultados = mysqli_query($link, $sql);

    $resultados = $link->query("SELECT * FROM funcionarios WHERE matricula = '$matricula'");

    foreach ($resultados as $resultado) {
        echo "<tr>";
            echo "<td>".$resultado['id']."</td>";
            echo "<td>".$resultado['nome']."</td>";
            echo "<td>".$resultado['matricula']."</td>";
        echo "</tr>";
    }
    
    