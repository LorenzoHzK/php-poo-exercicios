<?php  
require_once "Human.php";
require_once "Animal.php";

    class employeer extends Human{
        public string $job;
        public Animal $animal;

        function __construct($job, $humanName, $age, $adress, $contact, Animal $animal){
            parent::__construct($animal, $humanName, $age, $adress, $contact);
            $this->job = $job;
        }

        function job(){
            if ($this->job == "1"){
                print_r("{$this->humanName} e Balconista e seu salário é de R$1.550 e ele tem um animalzinho chamado {$this->animal->name}\n");
            }
            elseif ($this->job == "2"){
                print_r("{$this->humanName} trabalha como veterinario e seu salário é de R$8.000 e o nome do seu animalzinho e {$this->animal->name}\n");
            }
            elseif ($this->job == "3"){
                print_r("{$this->humanName} trabalha no setor de vendas e seu salário é de R$1.700 e ele tem o {$this->animal->name}\n");
            }
            else{
                print_r("Cargo não encontrado dentro da lista \n");
            }
        }
    }
