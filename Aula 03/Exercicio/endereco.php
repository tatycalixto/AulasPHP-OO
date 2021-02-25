<?php
class Endereco
{
  //atributos
  public $rua;
  public $bairro;
  public $cidade;
  public $estado ;
  public $cep;
  public $complemento;

  //método construtor
  public function __construct($rua, $bairro, $cidade, $estado, $cep, $complemento = null)
  {
    $this->rua = $rua;
    $this->bairro = $bairro;
    $this->cidade = $cidade;
    $this->estado = $estado;
    $this->cep = $cep;
    $this->complemento = $complemento;
  }

  //método
  public function ResumoEndereco()
  {
    return "$this->rua , $this->bairro , $this->cidade, $this->estado ,  $this->cep  $this->complemento";
  }
}
