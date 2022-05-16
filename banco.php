<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Conta\Conta;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\CPF;

$endereco = new Endereco('Cotia', 'Esmeralda Park', 'Barra do Tibaji', '240');
$titular = new Titular(new CPF('123.456.789-10'), 'Paulo Sergio', $endereco);
$primeiraConta = new Conta($titular, 1);
$primeiraConta->deposita(500);
$primeiraConta->saca(200);

echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperaSaldo() . PHP_EOL;
var_dump($endereco);