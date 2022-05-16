<?php

namespace Alura\Banco\Modelo;

final class CPF
{
    private string $cpf;

    public function __construct(string $cpf){
        $this->cpf = $cpf;
    }

    public function recuperaNumero(): string
    {
        return $this->cpf;
    }
}