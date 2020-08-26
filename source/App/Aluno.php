<?php

namespace Source\App;

class Aluno
{
    private $nome;
    private $notas = [];
    private $nota_geral;
    private $turma;

    public function __construct(string $nome, array $notas, string $turma)
    {
        $this->setNome($nome);
        $this->setNotas($notas);
        $this->setTurma($turma);
    }

    public function getNome():string
    {
        return $this->nome;
    }

    public function setNome(string $nome):void
    {
        $this->nome = $nome;
    }

    public function getNotas():array
    {
        return $this->notas;
    }

    public function setNotas(array $notas):void
    {
        $this->notas = $notas;
    }

    public function getNotaGeral():float
    {
        return $this->nota_geral;
    }

    public function setNotaGeral(float $nota_geral):void
    {
        $this->nota_geral = $nota_geral;
    }

    public function getTurma():string
    {
        return $this->turma;
    }

    public function setTurma(string $turma):void
    {
        $this->turma = $turma;
    }
}