<?php

require __DIR__ . "/vendor/autoload.php";

use src\CarrinhoCompra;
use src\Item;
use src\Pedido;
use src\EmailService;

$pedido = new Pedido();

$item1 = new Item();
$item2 = new Item();

$item1->setDescricao("Bicicleta");
$item1->setValor(750.10);

$item2->setDescricao("Geladeira");
$item2->setValor(1950.15);

echo "<h4>Pedido Iniciado</h4>";
echo "<pre>";
print_r($pedido);
echo "<pre>";

$pedido->getCarrinhoCompra()->adicionarItem($item1);
$pedido->getCarrinhoCompra()->adicionarItem($item2);

echo "<h4>Pedido com Itens</h4>";
echo "<pre>";
print_r($pedido);
echo "<pre>";

echo "<h4>Itens do Carrinho</h4>";
echo "<pre>";
print_r($pedido->getCarrinhoCompra()->getItens());
echo "<pre>";

echo "<h4>Valor do Pedido</h4>";
echo "<pre>";
print_r($pedido->getValorTotal());
echo "<pre>";

echo "<h4>Carrinho está Valido?</h4>";
echo $pedido->getCarrinhoCompra()->validarCarrinho();

echo "<h4>Status Pedido</h4>";
echo $pedido->getStatus();

echo "<h4>Confirmar Pedido</h4>";
echo $pedido->confirmarPedido();

echo "<h4>Status Pedido</h4>";
echo $pedido->getStatus();

echo "<h4>E-Mail</h4>";
if ($pedido->getStatus() == 'confirmado') {
    $email = new EmailService('', '', '', '');
    echo $email->enviarEmail();
}
