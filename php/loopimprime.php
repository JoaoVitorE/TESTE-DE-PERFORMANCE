<?php

$inicio1 = microtime(true);

for($i=0;$i< 100;$i++){
    echo "texte $i \n";
}

$total1 = (microtime(true) - $inicio1) * 1000;

echo 'Resultado tempo: ' . $total1;