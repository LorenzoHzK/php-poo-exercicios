<?php
    require_once "Employee.php";

    class Manager extends Employee {
        public $Job;
        public $employeers;


        function __construct(string $Job, int $employeers, int $id, string $name, string $position) {
            parent::__construct($id, $name, $position, $salary);
            $this->Job = $Job;
            $this->employeers = $employeers;
        }

        function calcSalary(){
            $bonus = $this->employeers * 25; // Ganha 25 pila por funcionario
            $totalSal = $this->salary * 8 + $bonus;
            print_r("O salario total do gerente e de R$ {$totalSal} \n");
        } 
    }