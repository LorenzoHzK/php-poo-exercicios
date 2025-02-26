<?php
    require_once "Pedido.php";

    $produto1 = new Produtos ("Blusa", 8, 15);
    $produto2 = new Produtos ("Camisa", 5, 4);
    
    $pedido1 = new Pedido($produto1, 16);
    $pedido2 = new Pedido($produto2, 4);
    $pedido1->pedido();
    $pedido2->pedido();