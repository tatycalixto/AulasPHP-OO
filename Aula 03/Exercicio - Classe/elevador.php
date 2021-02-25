<?php

class Elevador
{
  //código feito pelo aluno Vinicius
  //atributos
  public $andares;
  public $capacidade;
  public $capacidade_atual;
  public $andar_atual;

  //método
  function __construct($capacidade, $andares)
  {
    $this->capacidade = $capacidade;
    $this->andares = $andares;
    $this->andar_atual = 0;
    $this->capacidade_atual = 0;
  }

  function entrar()
  {
    if ($this->capacidade_atual < $this->capacidade) {
      $this->capacidade_atual += 1;
      return "Mais uma pessoa entrou no elevador.<br/>";
    }
    return "Elevador lotado! Por favor, remova alguém.<br/>";
  }

  function sair()
  {
    if ($this->capacidade > 0) {
      $this->capacidade_atual -= 1;
      return "Uma pessoa saiu no elevador.<br/>";
    }
    return "Elevador vázio! Por favor, adicione alguém.<br/>";
  }

  function subir()
  {
    if ($this->andar_atual < $this->andares) {
      $this->andar_atual += 1;
      return "Elevador subiu um andar!<br/>";
    }
    return "Elevador está no andar máximo! Por favor, desça um andar.<br/>";
  }

  function descer()
  {
    if ($this->andar_atual > 0) {
      $this->andar_atual -= 1;
      return "Elevador desceu um andar!<br/>";
    }
    return "Elevador está no andar mínimo! Por favor, suba um andar.<br/>";
  }

  function set_capacidade_atual($num)
  {
    $this->capacidade_atual = $num;
  }

  function get_info()
  {
    return "ELEVADOR:  Andar atual: $this->andar_atual  Capacidade atual: $this->capacidade_atual<br/>";
  }
}



$elevador1 = new Elevador(5, 5);

echo $elevador1->entrar();
echo $elevador1->get_info();
echo $elevador1->entrar();
echo $elevador1->get_info();
echo $elevador1->entrar();
echo $elevador1->get_info();
echo $elevador1->subir();
echo $elevador1->get_info();
echo $elevador1->sair();
echo $elevador1->get_info();
echo $elevador1->entrar();
echo $elevador1->get_info();
echo $elevador1->entrar();
echo $elevador1->get_info();
echo $elevador1->descer();
echo $elevador1->get_info();
echo $elevador1->sair();
echo $elevador1->sair();
echo $elevador1->sair();
echo $elevador1->get_info();
