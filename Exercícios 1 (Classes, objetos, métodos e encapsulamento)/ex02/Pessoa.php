<?php
    require_once"Universidade.php";

    class Pessoa{
        public $nome;
        public $idade;
        public $sexo;
        public $universidade;

        function __construct(string $nome, int $idade, string $sexo, $universidade){
            $this->nome = $nome;
            $this->idade = $idade;
            $this->sexo = $sexo;
            $this->universidade = $universidade;
        }

        function mostrarNome(){
            $this->nome;
            $this->idade;
            $this->sexo;
            $this->universidade;

            print_r("{$this->nome} tem {$this->idade} anos è do sexo {$this->sexo} e ");
            print_r($this->universidade->infoNome());
        }
    }