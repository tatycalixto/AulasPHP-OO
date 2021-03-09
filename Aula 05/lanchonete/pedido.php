<?php



class Pedido
{

  public $nomeCliente;
  public $taxaDeServico;
  public $itensConsumidos;




  public function calcularTaxaDeServico()
  {
  }

  public function calcularTroco()
  {
  }

  public function imprimirNotaFiscal()
  {
    echo "----Nota Fiscal-----";
    echo "<br/>";
    echo "Itens consumidos:";
    $valorFinal = 0.0;
    //implementar o resto
  }
}
