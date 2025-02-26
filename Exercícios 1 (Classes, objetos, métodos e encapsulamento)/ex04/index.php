<?php

    require_once "Livros.php";
    require_once "Usuarios.php";


    $livro1 = new Livro ("PercyJackson", "Rick Riordan", 304);
    
    $usuario1 = new Usuarios("Matheus", "Rua dos professores", "matheus@gmail.com", 429989898);
    $usuario2 = new Usuarios("Cezar", "Rua dos Curandeiros", "cezar@gmail.com", 858685491);

    $livro1->estoque();
    $livro1->alugar($usuario1);
    $livro1->alugar($usuario2);