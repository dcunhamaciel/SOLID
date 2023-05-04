<?

namespace src;

use src\CarrinhoCompra;

class Pedido
{
    private $status;
    private $carrinhoCompra;    

    public function __construct() 
    {
        $this->status = 'aberto';
        $this->carrinhoCompra = new CarrinhoCompra();
    }    

    public function getCarrinhoCompra()
    {
        return $this->carrinhoCompra;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function setStatus(string $status)
    {
        $this->status = $status;
    }

    public function getValorTotal() 
    {
        $valorTotal = 0;
        foreach($this->carrinhoCompra->getItens() as $item) {
            $valorTotal += $item->getValor();
        }        

        return $valorTotal;
    }

    public function confirmarPedido() 
    {
        if (!$this->carrinhoCompra->validarCarrinho()) {
            return false;
        }

        $this->setStatus('confirmado');

        return true;
    }
}
