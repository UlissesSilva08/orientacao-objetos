<?php 
    class Pessoa{
        public $nome;
        public $idade;
        public $peso;

        public function andar(){
            echo "andar andar"; 
        }

        public function falar(){
            echo "bla bla bla";
        }

        public function imprimirDados(){
            echo $this->nome;
        }
    }

    class Carro{
        public $marca;
        public $modelo;
        public $ano;
        public $cor;
        public $motor;
        public $cv;

        public function dadosCarro(){
            echo "Marca: ".$this->marca."<br>";
            echo "Modelo: ".$this->modelo."<br>";
            echo "Ano: ".$this->ano."<br>";
            echo "Cor: ".$this->cor."<br>";
            echo "Motor: ".$this->motor."<br>";
            echo "Potência: ".$this->cv."<br>";
        }
    }

    $aventador = new Carro();
    $aventador -> marca = "Lamborghini";
    $aventador -> modelo = "Aventador LP-700";
    $aventador -> ano = "2012";
    $aventador -> cor = "Laranja";
    $aventador -> motor = "V12 6.5l biTurbo";
    $aventador -> cv = "700cv";

    $aventador ->dadosCarro();
?>