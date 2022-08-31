<?php

namespace App\Contabilidade\Domain\Entity;

final class Cliente
{
    private string $nome;
    private string $sobrenome;
    private string $idade;
    protected string $cpf;
    protected string $dadosReceitaFederal;
    private array $boletoEmAtraso;
    private array $boletos;
}