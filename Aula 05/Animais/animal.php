<?php
//feito pelo aluno Nicolas 

class Animal
{

  public $nome;
  public $comprimento;
  public $numpatas;
  public $cor;
  public $ambiente;
  public $velocidademed;

  function __construct($nome, $comprimento, $numpatas, $cor, $ambiente, $velocidademed)
  {
    $this->nome = $nome;
    $this->comprimento = $comprimento;
    $this->numpatas = $numpatas;
    $this->cor = $cor;
    $this->ambiente = $ambiente;
    $this->velocidademed = $velocidademed;
  }

  public function setNome($nome)
  {
    $this->nome = $nome;
  }
  public function setHorario($horario)
  {
    $this->horario = $horario;
  }
  public function setComprimento($comprimento)
  {
    $this->comprimento = $comprimento;
  }
  public function setNumpatas($numpatas)
  {
    $this->numpatas = $numpatas;
  }
  public function setCor($cor)
  {
    $this->cor = $cor;
  }
  public function setAmbiente($ambiente)
  {
    $this->ambiente = $ambiente;
  }
  public function setVelmed($velocidademed)
  {
    $this->velocidademed = $velocidademed;
  }

  function getnome()
  {
    return $this->nome;
  }
  function getComprimento()
  {
    return $this->comprimento;
  }
  function getNumpatas()
  {
    return $this->numpatas;
  }
  function getCor()
  {
    return $this->cor;
  }
  function getAmbiente()
  {
    return $this->ambiente;
  }
  function getVelmed()
  {
    return $this->velocidademed;
  }

  function dadosAnimal()
  {
    echo "O animal possui o nome : $this->nome, com o comprimento: $this->comprimento, possui $this->numpatas patas";
    echo "<br/>";
    echo " Com a seguinte cor: $this->cor, que tem por habitat : $this->ambiente e possui velocidade média de $this->velocidademed ";
  }
}

// $objanimal = new Animal("galo", "40 cm", "2", "vermelho", "domestico", "5km");
// $objanimal->Dados();
