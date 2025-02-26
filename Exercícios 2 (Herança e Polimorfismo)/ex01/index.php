<?php 
    require_once"Employee.php";
    require_once"Manager.php";

$manager1 = new Manager("Analista de Dados", 50, 1, "Lucas", 650.60);
$employee1 = new Employee(1, "Matheus", "Programador", 343.75);

$employee1->calcSalary();
$manager1->calcSalary();