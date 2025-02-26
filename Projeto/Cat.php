<?php

    require_once "Animal.php";

    class Cat extends Animal{

        function __construct($name, $race, $paws, $color, $weight, $size){
            parent::__construct($name, $race, $paws, $color, $weight, $size);
        }

        function falar(){
            print_r("Miau Miau Miau \n");
        }
    }