<?php
    class Pessoa{
        public $nome;
        public $idade;
        public $diaNascimento;
        public $mesNascimento;
        public $anoNascimento;

        function __construct (string $nome, int $idade, int $diaNascimento, int $mesNascimento, int $anoNascimento){
            $this->nome = $nome;
            $this->idade = $idade;
            $this->diaNascimento = $diaNascimento;
            $this->mesNascimento = $mesNascimento;
            $this->anoNascimento = $anoNascimento;        
        }

        function calcIdade(){
            $dia = 18;
            $mes = 02;
            $ano = 2025;
            
            $idade = $ano - $this -> anoNascimento;
            return $idade;
        }

        function infoIdade(){
            $this->idade = $this->calcIdade();
            print_r("Idade: " .$this->idade . "\n");
        }

        function infoNome (){
            $this -> nome;
            print_r("Nome: " . $this->nome . "\n");
        }
    
        function dataNascimento(){
            $this -> diaNascimento;
            $this -> mesNascimento;
            $this -> anoNascimento;
            if ($this->mesNascimento < 10){
                print_r("Data de Nascimento: " . $this -> diaNascimento ."/0". $this -> mesNascimento ."/". $this -> anoNascimento ."\n");
            }
            else{
                print_r("Data de Nascimento: " . $this -> diaNascimento ."/". $this -> mesNascimento ."/". $this -> anoNascimento ."\n");
            }
        }

        function infoTrabalho(){
            
        }
    }

    $pessoa = new Pessoa("Matheus", 17, 23, 3, 2007);
    $idadeCalculada = $pessoa->infoIdade();
    $nome = $pessoa->infoNome();
    $idade = $pessoa->dataNascimento();

    echo "*********************************************************** \n";

    $pessoa2 = new Pessoa("Lucas", 25, 15, 6, 2000);
    $idadeCalculada = $pessoa2->infoIdade();
    $nome = $pessoa2->infoNome();
    $idade = $pessoa2->dataNascimento();

    echo "*********************************************************** \n";

    $pessoa3 = new Pessoa("Marcos", 30, 12, 11, 1995);
    $idadeCalculada = $pessoa3->infoIdade();
    $nome = $pessoa3->infoNome();
    $idade = $pessoa3->dataNascimento();