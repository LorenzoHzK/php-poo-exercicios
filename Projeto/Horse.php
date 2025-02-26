<?php

    require_once "Animal.php";

    class Horse extends Animal{

        function __construct($name, $race, $paws, $color, $weight, $size){
            parent::__construct($name, $race, $paws, $color, $weight, $size);
        }

        function falar(){
            print_r("iiirrrrí \n");
        }
    }