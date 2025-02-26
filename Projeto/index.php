<?php
// Puxando todos os arquivos necessarios para rodar
require_once "Animal.php";
require_once "Dog.php";
require_once "Cat.php";
require_once "Horse.php";

// Humanos e funcionarios
require_once "Human.php";
require_once "Employeer.php";

// Produtos e venda
require_once "Products.php";
require_once "Sale.php";

// Criacao dos animais
    $animal1 = new Animal("Josias", "Lhaso", "4", "Branco", 6, 60); 
    $animal2 = new Dog("Tobias", "Dobermann", "3", "Preto", 15, 1.20);
    $animal3 = new Cat("Garfield", "Persa", "4", "Laraja", 8, 50);
    $animal4 = new Horse("Pe de Pano", "Criolo", "5", "Marrom Bom Bom", 150, 2.50);

// puxando as falas
    $animal1->falar();
    $animal2->falar();
    $animal3->falar();
    $animal4->falar();


// Relacionado aos "Humanos" e empregados
    $pessoa1 = new Human ($animal3, "Matheus", 17, "Rua das Caravelhas", 9898989898);
    $pessoa2 = new Human ($animal1, "Lucas", 31, "Avenida dos padres", 68496849865);

    // Opcoes de trabalhos disponiveis:
    // [1] Balconista
    // [2] Veterinario 
    // [3] Vendedor
    $empregado1 = new Employeer ("1", "Caio", 30, "Rua do CS", 7256178563, $animal3);
    $empregado2 = new Employeer ("3", "Julio", 45, "Rua dos idosos", 656664464,$animal4);    


    $pessoa1->Show();
    $pessoa2->Show();
    $empregado1->job();
    $empregado2->job();


// Produtos e venda | Criando os produtos;
    $produto1 = new Products("Shampoo para cachorro", 14.99, 3);
    $produto2 = new Products("Racao para filhotes", 25.99, 12);
    
// Armazenando os Produtos
    $produto1->stock();
    $produto2->stock();

// Realizando a compra dos produtos
    $compra1 = new Sale($produto1, $pessoa1, 2); // primeira compra do produto 1
    $compra2 = new Sale($produto1, $pessoa2, 2); // segunda compra do produto 1, mas com quantidade acima do que esta no estoque   
    $compra3 = new Sale($produto2, $pessoa2, 12); // compra de todos os produtos 2, acabando com estoque;
    
// Passando pelo processo de verificacao se ainda tem o produto, e retirando a quantidade comprada.
    $compra1->buy();
    $compra2->buy();
    $compra3->buy();