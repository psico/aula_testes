<?php

use PHPUnit\Framework\TestCase;

class PessoaServiceTest extends TestCase
{
    public function testeRetornaIdade() {
        $service = new PessoaService();
        $resultado = $service->retornaPeso();

        $this->assertSame($resultado, 83);
        $this->assertGreaterThan($resultado, 84);
    }
}