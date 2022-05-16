<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Funcionario\{Desenvolvedor, Diretor, Gerente};
use Alura\Banco\Service\ControladorDeBonificacoes;

$funcionario = new Desenvolvedor(
    'Paulo Sergio', 
    new CPF('123.456.789-10'),
    'Desenvolvedor', 
    1000
);

$funcionario->sobeNivel();

$gerente = new Gerente(
    'Marcos', 
    new CPF('123.456.789-10'),
    'Desenvolvedor Senior', 
    3000
);

$diretor = new Diretor(
    'Pedro', 
    new CPF('123.456.789-10'),
    'Desenvolvedor Senior', 
    5000
);

$controlador = new ControladorDeBonificacoes();
$controlador->adicionaBonificacaoDe($funcionario);
$controlador->adicionaBonificacaoDe($gerente);
$controlador->adicionaBonificacaoDe($diretor);

echo $controlador->recuperaTotal();


