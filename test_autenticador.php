<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Funcionario\Diretor;
use Alura\Banco\Modelo\Funcionario\Gerente;
use Alura\Banco\Service\Autenticador;

$autenticador = new Autenticador();

$diretor = new Diretor(
    'Paulo Sergio',
    new CPF('123.456.789-10'),
    10000
);

$autenticador->tentaLogin($diretor, '4321');
