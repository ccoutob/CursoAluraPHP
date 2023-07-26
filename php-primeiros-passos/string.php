<?php

$idade = 18;
echo 'Olá Mundo, eu tenho ' . $idade . ' anos'; //Ao utilizar ' é necessário separar a string da variável por meio de um ponto "." para que a váriavel seja reconhecida. (tudo dentro das aspas simples será reconhecido como STRING!!!)

$idade2 = 20;
echo "Olá Mundo, eu tenho $idade2 anos"; //Utilizando aspas duplas não é mais necessário utilizar o ponto "." para separar a string pois a váriavel já é reconhecida.

//Para quebrar linha em php há um comando próprio da linguagem, veja abaixo:
echo "Olá Mundo" . PHP_EOL; //PHP - End Of Line.
echo "A linha foi quebrada xD";