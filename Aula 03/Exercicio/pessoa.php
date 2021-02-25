<?php
require "endereco.php";
class Pessoa
{
  //atributos
  public $nome;
  public $cpf;
  public $rg;
  public $nascimento;
  public $endereco;

  //método construtor
  public function __construct($nome, $cpf, $rg, $nascimento = null)
  {
    $this->nome = $nome;
    $this->cpf = $cpf;
    $this->rg = $rg;
    $this->nascimento = $nascimento;
  }


  //set
  function setNome($nome)
  {
    $this->nome = $nome;
  }
  function setCpf($cpf)
  {
    $this->cpf = $cpf;
  }
  function setRg($rg)
  {
    $this->rg = $rg;
  }
  function setNascimento($nascimento)
  {
    $this->nascimento = $nascimento;
  }
  function setEndereco($endereco)
  {
    $this->endereco = $endereco;
  }


  //get
  public function getNome()
  {
    return $this->nome;
  }
  public function getCpf()
  {
    return $this->cpf;
  }
  public function getRg()
  {
    return $this->rg;
  }
  public function getNascimento()
  {
    return $this->nascimento;
  }
  public function getEndereco()
  {
    return $this->endereco;
  }

  //método
  function resumirPessoa()
  {
    return "$this->nome cpf: $this->cpf , rg: $this->rg  data de nascimento:  $this->nascimento, endereço: "  . $this->endereco;
  }
}
//instanciar o objeto
$objEndereco1 = new Endereco("Rua a", "Santo Amaro", "Recife", "PE", "54123-999");
$objPessoa1 = new Pessoa("Taty", "123.456.789-00", "123456", "19/05");
$objPessoa1->setEndereco($objEndereco1->ResumoEndereco());
echo $objPessoa1->resumirPessoa();

echo "<hr/>";
$objEndereco2 = new Endereco("Rua das Flores", "Coelhos", "Recife", "PE", "58123-999");
$objPessoa2 = new Pessoa("Cremildo", "321.456.789-00", "123456", "17/04");
$objPessoa2->setEndereco($objEndereco2->ResumoEndereco());
echo $objPessoa2->resumirPessoa();
