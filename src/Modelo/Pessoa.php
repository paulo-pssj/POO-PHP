<?php

namespace Alura\Banco\Modelo;

abstract class Pessoa
{
    private string $nome;
    private CPF $cpf;

    public function __construct(string $nome, CPF $cpf)
    {
        $this->validaNomePessoa($nome);
        $this->nome = $nome;
        $this->cpf = $cpf;
    }

    public function recuperaNome(): string
    {
        return $this->nome;
    }

    public function recuperaCpf(): string
    {
        return $this->cpf->recuperaNumero();
    }

    protected function validaNomePessoa($nome) 
    {
        if (strlen($nome) < 5) {
            echo 'Nome precisa ter pelo menos 5 caracteres.';
            exit();
        }
    }
}