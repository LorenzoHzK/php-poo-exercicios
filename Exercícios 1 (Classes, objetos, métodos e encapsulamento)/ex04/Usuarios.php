<?php
    class Usuarios{
        public string $nome;
        public string $endereco;
        public string $email;
        public int $telefone;

        function __construct ($nome, $endereco, $email, $telefone){
            $this->nome = $nome;
            $this->endereco = $endereco;
            $this->email = $email;
            $this->telefone = $telefone;
        }

        function infoLeitor(){
            print_r ("O usuario {$this->nome} já alugou este livro. ");
        }
    }