<?php
class Aluno
{
  //atributos
  public $nome;
  public $matricula;
  public $nota1;
  public $nota2;

  // contrutor da classe
  public function __construct($nome_c, $matricula_c, $nota1_c, $nota2_c)
  {
    $this->nome = $nome_c;
    $this->matricula = $matricula_c;
    $this->nota1 = $nota1_c;
    $this->nota2 = $nota2_c;
  }

  public function setNome($nome)
  {
    $this->nome = $nome;
  }
  public function setMatricula($matricula)
  {
    $this->matricula = $matricula;
  }
  public function setNota1($nota1)
  {
    $this->nota1 = $nota1;
  }
  public function setNota2($nota2)
  {
    $this->nota2 = $nota2;
  }

  function getNome()
  {
    return $this->nome;
  }
  function getMatricula()
  {
    return $this->matricula;
  }
  function getNota1()
  {
    return $this->nota1;
  }
  function getNota2()
  {
    return $this->nota2;
  }

  //métodos
  function infoaluno()
  {
    return "nome: $this->nome, matricula: $this->matricula";
  }
  function media()
  {
    return ($this->nota1 + $this->nota2) / 2;
  }
}

//instaciar o objetos

$objaluno = new Aluno("maria", "25022020", 10, 8);
echo "Informações do(a) Alunho(a): " . $objaluno->infoaluno();
echo "<br/>";
echo "<hr/>";
echo "Média: " . $objaluno->media();
