<?php
    class Animal {
        public string $name;
        public string $race;
        public string $paws;
        public string $color;
        public int $weight;
        public float $size;


        function __construct($name, $race, $paws, $color, $weight, $size){
            $this-> name = $name;
            $this-> race = $race;
            $this-> paws = $paws;
            $this-> color = $color;
            $this-> weight = $weight;
            $this-> size = $size;
        }

        function falar(){
            print_r("hshshshsh \n");
        }
    }