<?php
    class Products{
        public string $product;
        public float $value;
        public string $stockQuant;

        function __construct($product, $value, $stockQuant){
            $this->product = $product;
            $this->value = $value;
            $this->stockQuant = $stockQuant;
        }

        function stock(){
            $stockProducts = [];

            array_push ($stockProducts, $this->product, $this->value, $this->stockQuant);
            print_r($stockProducts);
        }
    }