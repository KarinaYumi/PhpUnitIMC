<?php
namespace app\libraries;

class Product{
    private float $peso;
    private float $altura;
    private float $imc;
    private string $classificacao;

    public function __construct(float $peso, float $altura, float $imc, string $classificacao)
    {
        $this->peso = $peso;
        $this->altura = $altura;
        $this->imc = $imc;
        $this->classificacao = $classificacao;
    }

        public function setPeso($peso){
            $this->peso = $peso;
        }

        public function getPeso(){
            return $this->peso;
        }

        public function setAltura($altura){
            $this->altura = $altura;
        }

        public function getAltura(){
            return $this->altura;
        }

        public function setIMC($imc){
            $this->imc = $imc;
        }

        public function getIMC(){
            return $this->imc;
        }

        public function setClassificacao($classificacao){
            $this->classificacao = $classificacao;
        }

        public function getClassificacao(){
            return $this->classificacao;
        }
    } 
?>