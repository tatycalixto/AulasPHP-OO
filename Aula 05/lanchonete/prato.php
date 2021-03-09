<?php

class Prato
{
  public $nome;
  public $preco;
  public $dataDeValidade;
  public $peso;



  function __construct($nome, $preco, $dataDeValidade, $peso)
  {
    $this->nome = $nome;
    $this->preco = $preco;
    $this->dataDeValidade = $dataDeValidade;
    $this->peso = $peso;
  }

  public function getNome()
  {
    return $this->nome;
  }
  public function setNome($nome)
  {
    $this->nome = $nome;
  }

  public function  getPreco()
  {
    return $this->preco;
  }

  public function  setPreco($preco)
  {
    $this->preco = $preco;
  }

  public function getDataDeValidade()
  {
    return $this->dataDeValidade;
  }

  public function  setDataDeValidade($dataDeValidade)
  {
    $this->dataDeValidade = $dataDeValidade;
  }

  public function  getPeso()
  {
    return $this->peso;
  }

  public function setPeso($peso)
  {
    $this->peso = $peso;
  }

  public function  toString()
  {
    return "Prato{" + "nome=" + $this->nome + ", preco=" + $this->preco + ", dataDeValidade=" + $this->dataDeValidade + ", peso=" + $this->peso + '}';
  }
}
