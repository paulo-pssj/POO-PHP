<?php

use Alura\Banco\Modelo\Endereco;

require_once 'autoload.php';

$umEndereco = new Endereco('Cotia', 'atalaia', 'rua qualquer', '200');

echo $umEndereco;
