<?php

    require_once "Animal.php";

    class Human{
        public string $humanName;
        public int $age;
        public string $adress;
        public int $contact;
        public Animal $animal;

        function __construct (Animal $animal, $humanName, $age, $adress, $contact){
            $this->animal = $animal;
            $this->humanName = $humanName;
            $this->age = $age;
            $this->adress = $adress;
            $this->contact = $contact;
        }

        function Show(){
            print_r("O {$this->humanName} tem {$this->age} anos e mora em {$this->adress}, numero de telefone vinculado e {$this->contact} \n");

            print_r("{$this->humanName} tem um animal chamado {$this->animal->name}. \n");
        }   
    }