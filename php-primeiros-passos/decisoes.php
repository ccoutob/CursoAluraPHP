<?php

$idade = 19;
$numeroDePessoas = 1;

echo "Você só pode entrar se tiver a partir de 18 anos ou ";
echo "a partir de 16 anos acompanhado" . PHP_EOL;

if ($idade >= 18) {
    echo "Você tem $idade anos. Pode entrar sozinho.";
} else if ($idade >= 16 && $numeroDePessoas > 1) {
    echo "Você tem $idade anos e está acompanhado(a), então pode entrar.";
} else 
    echo "Você só tem $idade anos. Você não pode entrar";
        echo PHP_EOL . "É uma pena";


echo PHP_EOL;
echo "Adeus!";

//Outro modo de utilizar estruturas de decisões é quando há apenas uma linha, Observe:
//$variavel = $condicao ? $valorSeVerdadeiro : $valorSeFalso;

$idade = 15;
$mensagem = $idade < 18 /* condição */ ? 'Você é menor de idade' /* valorSeVerdadeiro */ : 'Você é maior de idade' /* valorSeFalso */;
echo $mensagem;
