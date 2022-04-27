<?php

  $inicio1 = microtime(true);

  $query = 'INSERT INTO php(placa,nome_dono) VALUES ';

  for ($i = 0; $i < 100; $i++) {
  $query .= "('teste bloco $i', 'Joao $i'),";
  }

  $query = substr($query, 0, -1);

  $mysqli = mysqli_connect("localhost", "root", "", "testemauro200422");


  if (!mysqli_query($mysqli, $query)) {
    die("Falha na conexão: $query -> " . mysqli_errno($mysqli) . " => " . mysqli_error($mysqli));
  }

  mysqli_close($mysqli);

  $total1 = (microtime(true) - $inicio1) * 1000;

  echo 'Resultado tempo: ' . $total1;
  
?>