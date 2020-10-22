<?php

class Hero
{
    private $name;
    private $cpf;
    private $local;

    public function __construct(string $name, string $cpf, Local $local)
    {
        $this->name = $name;
        $this->cpf = $cpf;
        $this->local = $local;
    }

    public function getInformations() : array
    {
        return [
            'name' => $this->name,
            'cpf' => $this->cpf,
            'local' => $this->local
        ];
    }
}