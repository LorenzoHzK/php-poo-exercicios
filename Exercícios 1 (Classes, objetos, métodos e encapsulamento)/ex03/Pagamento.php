<?php

require_once "Pedido.php";

class Pagamento {
    public $formaPag;
    private $pedido;

    function __construct(int $formaPag) {
        $this->formaPag = $formaPag;
    }

    function metodoPag() {
        echo "\n-------------------------------------------------------------------- \n";
        echo " [1] Dinheiro \n [2] Cheque \n [3] Cartao \n\n";
        $escolha = readline("Metodo de pagamento: ");

        switch ($escolha) {
            case 1:
                echo "A forma de pagamento escolhida é dinheiro \n";
                break;
            case 2:
                echo "A forma de pagamento escolhida é cheque. Compra realizada com sucesso!\n";
                break;
            case 3:
                echo "A forma de pagamento escolhida é cartão. Compra realizada com sucesso!\n";
                break;
            default:
                echo "Forma de pagamento não aceita \n";
                return $this->metodoPag();
        }
    }
}

$pagamento = new Pagamento(1);
$pagamento->metodoPag();