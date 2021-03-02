<?php
class Pessoa
{
  //atributos
  public $nome;
  public $nascimento;
  public $altura;

  //método construtor
  public function __construct($nome, $nascimento, $altura)
  {
    $this->nome = $nome;
    $this->nascimento = $nascimento;
    $this->altura = $altura;
  }


  //set
  function setNome($nome)
  {
    $this->nome = $nome;
  }
  function setNascimento($nascimento)
  {
    $this->nascimento = $nascimento;
  }
  function setAltura($altura)
  {
    $this->altura = $altura;
  }


  //get
  public function getNome()
  {
    return $this->nome;
  }
  public function getNascimento()
  {
    return $this->nascimento;
  }
  public function getAltura()
  {
    return $this->endereco;
  }

  //método
  public  function imprimirDados()
  {
    $idade = $this->calcularIdade();
    // return "$this->nome,  data de nascimento:  $this->nascimento, altura: $this->altura, idade: $idade";
    return "Nome: $this->nome,  idade: $idade, altura: $this->altura";
  }

  public  function calcularIdade()
  {
    $data = '02-03-2021';
    list($diaNasc, $mesNasc, $anoNasc) = explode('-', $this->nascimento);

    $arrData = explode('-', $data);
    //print_r($arrData);
    //echo "<br/>";

    $idade = $arrData[2] - $anoNasc;

    if ($arrData[1] < $mesNasc) {
      $idade -= 1;
    } elseif (($arrData[1] == $mesNasc) && ($arrData[0] < $diaNasc)) {
      $idade -= 1;
    }


    return $idade;
  }
}

//instanciar o objeto
$objPessoa = new Pessoa("Cremildo", "29-02-2000", "2.10");
echo $objPessoa->imprimirDados();
