<?php

namespace Source\Tests;

use Source\App\Aluno;
use PHPUnit\Framework\TestCase;

class AlunoTest extends TestCase
{
    //criar funções de Teste para cada função da classe Aluno
    public function testGetNome()
    {
        $aluno = new Aluno("Beto",[12,323,43,5],"4AB");
        $this->assertIsString($aluno->getNome());
    }

    public function testSetNome()
    {
        $aluno = new Aluno("Beto",[12,323,43,5],"4AB");
        $this->
    }

    public function testGetNotas()
    {}

    public function testSetNotas()
    {}

    public function testGetNotaGeral()
    {}

    public function testSetNotaGeral()
    {}

    public function testGetTurma()
    {}

    public function testSetTurma()
    {}
}