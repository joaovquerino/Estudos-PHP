<?php
$idade = 18;
$nome = 'João';
$numPessoas = 2;

if ($idade >= 18){
    echo ("Seja bem vindo, $nome!" . PHP_EOL . "Você possui $idade anos. Pode entrar!" . PHP_EOL);
} elseif ($idade < 18 && $numPessoas >= 2){
	echo ("Olá! Você é menor de idade, porém está acompanhado. Pode entrar, $nome." . PHP_EOL);
} else {
	echo ("Olá! Você é menor de idade, não pode entrar sem estar acompanhado." . PHP_EOL);
}

echo ('Até logo!');