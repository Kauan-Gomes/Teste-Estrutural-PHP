<?php

namespace ENGA5;

class ListaNumerica{
    
    private $valores;

    public function setValores($vl){
        $this->valores = $vl;
    }

    public function getValores(){
        return $this->valores;
    }

    public function verificaQuantidade(){
        $tam = sizeof($this->valores);
        if ($tam >= 4 && $tam <= 10){
            return 'Valido';
        }

        return 'Invalido';
    }

    public function verificaValores(){
        $tam = sizeof($this->valores);
        if($tam <= 0){
            return 'Invalido';
        }
        for($i = 0; $i < $tam; $i++){
            if($this->valores[$i] < 10000 || $this->valores[$i] > 99999){
                return 'Invalido';
            }
            return 'Valido';
        }
    }

}


// // Testar a classe no navegador e comentar o código após o teste
// // para identar: shift + alt +f
// $ln = new Listanumerica;
// $vet = array(10000, 1004, 10005);
// $ln->setValores($vet);
// //$ln->getValores();
// echo $ln->verificaQuantidade() . '<br>';
// echo $ln->verificaValores() . '<br>';

/*$ln = new ListaNumerica;
$vet = array(1000, 10001, 10002, 10003, 10004, 10005, 10006, 10007, 10008, 10009, 10010);
$ln->setValores($vet);
echo $ln->verificaQuantidade() . '<br>';
echo $ln->verificaValores() . '<br>';*/

?>