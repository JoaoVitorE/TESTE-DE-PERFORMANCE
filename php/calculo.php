<?php
$inicio1 = microtime(true);
  $numero = (int)5;
  if ($numero> 0 and $numero < 11)
  {
    for ($i = 0; $i <11; $i++)
  {
    echo "$i x $numero = " .$i*$numero . "\n";
  }
  }
$total1 = (microtime(true) - $inicio1) * 1000;

echo 'Resultado tempo: ' . $total1;