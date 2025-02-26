<?php
    class Employee {
        public $id;
        public $name;
        public $Job;
        public $salary;


        function __construct(int $id, string $name, string $Job, float $salary){
            $this->id = $id;
            $this->name = $name;
            $this->Job = $Job;
            $this->salary = $salary;
        }

        function calcSalary(){
            $totalSal = $this -> salary  * 8;
            print_r("O salario total do funcionario e R$ {$totalSal} \n");
        }    
    }