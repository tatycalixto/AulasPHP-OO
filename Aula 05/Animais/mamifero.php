<?php
//feito pelo aluno Nicolas 
require "animal.php";
class Mamifero extends Animal
{

  public $alimento;

  function __construct($nome, $comprimento, $numpatas, $cor, $ambiente, $velocidademed, $alimento)
  {
    $this->nome = $nome;
    $this->comprimento = $comprimento;
    $this->numpatas = $numpatas;
    $this->cor = $cor;
    $this->ambiente = $ambiente;
    $this->velocidademed = $velocidademed;
    $this->alimento = $alimento;
  }

  public function setAlimento($alimento)
  {
    $this->alimento = $alimento;
  }

  public function getAlimento()
  {
    return $this->alimento;
  }
  function dadosMamifero()
  {
    echo $this->dadosAnimal();
    echo "<br/>";
    echo "Tem como alimento: $this->alimento";
  }
}
