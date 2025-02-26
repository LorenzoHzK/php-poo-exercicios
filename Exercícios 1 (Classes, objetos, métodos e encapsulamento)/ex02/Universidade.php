<?php
    class Universidade{
        public $universidade;
        public $local;
        public $curso;
        public $periodo;

    function __construct (string $universidade, string $local, string $curso, string $periodo){
        $this -> universidade = $universidade;
        $this -> local = $local;
        $this -> curso = $curso;
        $this -> periodo = $periodo;
    }

    function infoNome(){
        $this -> universidade;
        $this -> local;
        $this -> curso;
        $this -> periodo;

        print_r("trabalha na {$this->universidade}, que fica localizado em {$this->local}, ministrando as aulas no curso de {$this->curso} no periodo {$this->periodo} \n");
    }
}

$universidade1 = new Universidade ("Unicentro", "Guarapuava", "Ciencias da computacao", "Integral");
$universidade2 = new Universidade ("UTFPR", "Toledo", "TSI", "Noturno");
$universidade3 = new Universidade ("UFPR", "Curitiba", "Engenharia Civil", "Noturno");