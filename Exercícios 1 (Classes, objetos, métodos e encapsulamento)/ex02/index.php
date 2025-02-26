<?php
    require_once "Pessoa.php";
    require_once "Universidade.php";

    $pessoa = new Pessoa ("Matheus", 25, "Masculino", $universidade2);
    $pessoa2 = new Pessoa ("Lucas", 23, "Masculino", $universidade1);
    $pessoa3 = new Pessoa ("Maria", 40, "Feminino", $universidade3);

    $info = $pessoa->mostrarNome();
    $info = $pessoa2->mostrarNome();
    $info = $pessoa3->mostrarNome();