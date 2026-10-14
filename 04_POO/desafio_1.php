<?php

class Pedido {
    private $cliente;
    private $valorItens;

    public function __construct($cliente, $valorItens = 0) {
        $this->cliente = $cliente;
        $this->valorItens = $valorItens;
    }

    public function adicionarItem($valor) {
        $this->valorItens += $valor;
    }

    public function getTotal() {
        return $this->valorItens;
    }

    public function exibirPedido() {
        echo "Cliente: " . $this->cliente . "<br>";
        echo "Subtotal dos itens: R$ " . number_format($this->valorItens, 2, ',', '.') . "<br>";
    }
}

class NotaFiscal {
    private $totalPedido;
    private $imposto;
    private $totalPagar;

    public function __construct($totalPedido, $imposto = 10) {
        $this->totalPedido = $totalPedido;
        $this->imposto = $imposto;
        $this->totalPagar = 0;
    }

    public function calcularTotal() {
        $valorImposto = $this->totalPedido * ($this->imposto / 100);
        $this->totalPagar = $this->totalPedido + $valorImposto;
    }

    public function exibirNota() {
        $valorImposto = $this->totalPedido * ($this->imposto / 100);

        echo "Subtotal: R$ " . number_format($this->totalPedido, 2, ',', '.') . "<br>";
        echo "Valor do imposto: R$ " . number_format($valorImposto, 2, ',', '.') . "<br>";
        echo "Total a pagar: R$ " . number_format($this->totalPagar, 2, ',', '.') . "<br>";
    }
}

$pedido = new Pedido("Maria");

$pedido->adicionarItem(100);
$pedido->adicionarItem(50);
$pedido->exibirPedido();

$nota = new NotaFiscal($pedido->getTotal(), 10);
$nota->calcularTotal();
$nota->exibirNota();

?>