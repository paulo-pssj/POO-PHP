<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Conta\ContaPoupanca;
use Alura\Banco\Modelo\Conta\ContaCorrente;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\CPF;

$conta = new ContaCorrente(
    new Titular(
        new CPF('123.456.789-10'), 'Paulo Sergio', 
        new Endereco('cidade', 'bairro', 'rua', '123')
    )
);

$conta->deposita(500);
$conta->saca(100);

echo $conta->recuperaSaldo() . PHP_EOL;

$conta2 = new ContaPoupanca(
    new Titular(
        new CPF('123.456.789-10'), 'Paulo Sergio', 
        new Endereco('cidade', 'bairro', 'rua', '123')
    )
);

$conta2->deposita(500);
$conta2->saca(100);

echo $conta2->recuperaSaldo();