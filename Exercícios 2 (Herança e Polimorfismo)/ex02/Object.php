<?php  
    class Object_{
        public $width;
        public $height;

        function __construct (int $width, int $height){
            $this->width = $width;
            $this->height = $height;
        }

        function calc(){
            $total = $this->width * $this->height;
            print_r("A largura total e {$total} \n");
        }
    }

    //Triangulo
    class Triangle extends Object_{
        public $type;

        function __construct (int $width, int $height, string $type){
            parent::__construct($width, $height);
            $this->type = $type;
        }

        function calc(){
            $total = ($this->width * $this->height) / 2;
            print_r("A largura total do Triangulo e {$total} \n");
        }
    }

    //Retangulo
    class Rectangle extends Object_{
        function calc() {
            $total = $this->width * $this->height;
            print_r("A área do retângulo é {$total} | ");
        }

        function verify() {
            if ($this->width == $this->height) {
                print_r("Ele é um Quadrado\n");
            } else {
                print_r("Ele não é um Quadrado\n");
            }
        }
    }

    $obj1 = new Object_(150, 150);
    $obj1->calc(); 

    $triangulo = new Triangle(10, 20, "Equilátero");
    $triangulo->calc(); 

    $retangulo = new Rectangle(50, 50);
    $retangulo->calc(); 
    $retangulo->verify();