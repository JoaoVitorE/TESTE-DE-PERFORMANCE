<?php

    $inicio1 = microtime(true);

    $servidor= "localhost";
    $usuario = "root";
    $senha = "";
    $bdnome= "testemauro200422";

    //Conexão com o banco
    $conn = mysqli_connect($servidor,$usuario,$senha,$bdnome);

    for ($i =0; $i < 100; $i ++)
    {
        $sql = "INSERT INTO php (placa, nome_dono) VALUES ('teste $i', 'joao')";
        mysqli_query($conn, $sql);
    }

    //Fechando a conexão com o banco
    mysqli_close($conn);

    $total1 = (microtime(true) - $inicio1) * 1000;
    echo 'Resultado tempo: ' . $total1;
    
?>