<?php
require "fogo.php";
require "ievolucao.php";
require "itipo.php";
class Charmander extends Fogo implements Ievolucao, Itipo
{
  public function evoluir($atual, $evolucao)
  {
    $result = "Você evoluiu de " . $atual . " para " . $evolucao;
    return $result;
  }
  public function imprimirDadosPokemon()
  {
    return "Nome: $this->nome, peso: $this->peso,  altura $this->altura, categoria: $this->categoria, habilidade $this->habilidade";
  }
  public function classificar($tipo)
  {
    return "Tipo: $tipo";
  }
}
$objCharmander = new Charmander();
$objCharmander->nome = "Charmander";
$objCharmander->peso = "8.5 kg";
$objCharmander->altura = "0.6m";
$objCharmander->categoria = "Lagarto";
$objCharmander->habilidade = "Chama";
echo "<hr/>";
echo $objCharmander->imprimirDadosPokemon();
echo "<br/>";
echo $objCharmander->evoluir("Charmander", "Charmeleon");
echo "<br/>";
echo $objCharmander->classificar("Fogo");
echo "<br/>";
echo $objCharmander->mostrarFraquezas();
echo "<br/>";
echo $objCharmander->atacar();
echo "<br/>";
echo $objCharmander->defender();
echo "<hr/>";
