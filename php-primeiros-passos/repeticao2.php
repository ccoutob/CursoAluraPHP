<?php

for ($contador = 1; $contador <= 15; $contador++){
    if($contador == 13){
        continue; //O número 13 será pulado e o codigo continuará
    }
    echo "#$contador" . PHP_EOL;
}

//Vamos utilizar o while quando não sabemos quando o loop se encerrará. Quando é uma decisão um pouco mais complexa. Já o for é utilizado quando sabemos o momento de saída do loop. Normalmente, quando temos um caso de uso de variável contadora