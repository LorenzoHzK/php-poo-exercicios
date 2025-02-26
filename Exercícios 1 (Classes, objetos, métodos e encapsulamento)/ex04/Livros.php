<?php

    require_once "Usuarios.php";

    class Livro{
        public Usuarios $usuario;
        public $livro;
        public $autor;
        public $numPag;
        public $disponivel = true;

        function __construct(string $livro, string $autor, int $numPag){
            $this->livro = $livro;
            $this->autor = $autor;
            $this->numPag = $numPag;
        }

        function estoque(){
            print_r("O livro {$this->livro} é do autor {$this->autor} e tem {$this->numPag} páginas \n");
        }

        
        function alugar(Usuarios $usuario){
            if ($this->disponivel){
                $this->disponivel = False;
                echo "Livro alugado com sucesso \n";
            }
            else{
                echo "Livro indisponivel.{$usuario->infoLeitor()}\n";
            }
        }

        function devolver(){
            if ($this->disponivel == false){
                $this->disponivel = true;
                echo "Livro {$this->livro} devolvido com sucesso. \n";
            }
            else{
                echo "Este livro ja está disponivel \n";
            }
        }
}