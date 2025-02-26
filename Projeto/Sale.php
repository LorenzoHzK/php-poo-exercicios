<?php

require_once "Products.php";
require_once "Human.php";

    class Sale{
        public Products $product;
        public Human $human;
        public int $amount;

        function __construct(Products $product, Human $human, $amount){
            $this->product = $product;
            $this->human = $human;
            $this->amount = $amount;
        }
        function buy(){
            if($this->amount <= $this->product->stockQuant){
                $this->product->stockQuant -= $this->amount;
                print_r("produto {$this->product->product} comprado com sucesso por {$this->human->humanName} \n");
                echo "-------------------------------------------------------------------------------------------------------- \n";
                print_r("Estoque atualizado: {$this->product->stockQuant} unidades restantes de {$this->product->product}.\n");
                echo "-------------------------------------------------------------------------------------------------------- \n";
            }
            else{
                print_r("Produto {$this->product->product} indisponivel no estoque \n");
            }
        }
    }