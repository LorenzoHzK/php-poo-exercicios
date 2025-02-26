<?php

    require_once "Animal.php";

    class Dog extends Animal{

        function __construct($name, $race, $paws, $color, $weight, $size){
            parent::__construct($name, $race, $paws, $color, $weight, $size);
        }

        function falar(){
            print_r("Au Au Au \n");
        }
    }

