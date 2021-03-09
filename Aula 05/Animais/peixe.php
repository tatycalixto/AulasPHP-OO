<?php
//feito pelo aluno Nicolas 
require_once "animal.php";
class Peixe extends Animal
{

  public $caracteristica;
  //Podendo ser cartilaginoso ou ósseo.

  function __construct($nome, $comprimento, $numpatas, $cor, $ambiente, $velocidademed, $caracteristica)
  {
    $this->nome = $nome;
    $this->comprimento = $comprimento;
    $this->numpatas = $numpatas;
    $this->cor = $cor;
    $this->ambiente = $ambiente;
    $this->velocidademed = $velocidademed;
    $this->caracteristica = $caracteristica;
  }

  public function setTipo($tipo)
  {
    $this->tipo = $tipo;
  }

  public function getTipo()
  {
    return $this->tipo;
  }
  function dadosPeixe()
  {

    echo "O peixe possui o nome : $this->nome, com o comprimento: $this->comprimento, possui $this->numpatas barbatanas";
    echo "<br/>";
    echo " Com a seguinte cor: $this->cor, que tem por habitat : $this->ambiente e possui velocidade média de $this->velocidademed ";
    echo "<br/>";
    echo "Característica: $this->caracteristica";
  }
}
