<?php

use PHPUnit\Framework\TestCase;
use ENGA5\ListaNumerica;

class ListaNumericaTest extends TestCase{

    /**
     * @dataProvider casosdeTestes
     */
    public function testQuantidadeValores($vet, $expected) {
        $ln = new ListaNumerica;
        $ln->setValores($vet);

        $this->assertEquals($expected, $ln->verificaQuantidade());
    }

    public function casosdeTestes(): array{
        return[
            'Quantidade vazia' => [[], 'Invalido'],
            'Quantidade menor do que 4' => [[55555, 66666, 77777], 'Invalido']
    ];
    }

};


?>