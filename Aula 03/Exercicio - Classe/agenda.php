<?php

class Agenda
{
  public $nome;
  public $idade;
  public $altura;
  public $total_agenda = 0;


  function armazenaPessoas($anome, $aidade, $altura)
  {
    if ($this->total_agenda < 10) {
      $this->nome[$this->total_agenda] = $anome;
      $this->idade[$this->total_agenda] = $aidade;
      $this->altura[$this->total_agenda] = $altura;
      $this->total_agenda++;
      return ($this->total_agenda);
    } else {
      return 0;
    }
  }
  function imprimeAgenda()
  {
    echo "Nome/Idade/Altura";
    for ($i = 1; $i <= $this->total_agenda; $i++) {
      $this->imprimirPessoa($i);
    }
  }
  function imprimirPessoa($posicao)
  {
    $i = $posicao - 1;
    echo "<br/>";
    echo $posicao . "/" . $this->nome[$i] . "/" . $this->idade[$i] . "/" . $this->altura[$i];
  }

  function removePessoa($anome)
  {

    if ($this->total_agenda < 1) {   // se a agenda estiver vazia
      return false;
    };
    $w = $this->buscaPessoa($anome); // retorna a posicao base 1

    if ($w != 0) {
      $w--;
      for ($i = $w; $i < $this->total_agenda - 1; $i++) {

        $this->nome[$i] = $this->nome[$i + 1];
        $this->idade[$i] = $this->idade[$i + 1];
        $this->altura[$i] = $this->altura[$i + 1];
      };
      // ZERA O ULTIMO ELEMENTO
      $this->nome[10] = "";
      $this->idade[10] = "";
      $this->altura[10] = "";
      $this->total_agenda--;
      return true;
    } else {
      return false;
    }
  }
  function buscaPessoa($anome)
  {
    $achou = 1;
    for ($i = 1; $i < 10; $i++) {
      if ($this->nome[$i] == $anome) {
        $achou = $i + 1;
        break;
      }
    };
    return $achou;
  }

  function temQuantos()
  {
    return  $this->total_agenda;
  }
}

$minha_agenda = new Agenda();
echo "<br/>";
echo "Minha agenda tem " . $minha_agenda->temQuantos();
echo "<br/>";
echo "<hr/>";
$minha_agenda->armazenaPessoas("Joao", "24", "1.81");
$minha_agenda->armazenaPessoas("Camila", "26", "1.72");
$minha_agenda->armazenaPessoas("Juliette", "27", "1.76");
$minha_agenda->armazenaPessoas("Sarah", "26", "1.45");
$minha_agenda->armazenaPessoas("Gil do Vigor", "26", "1.72");
$minha_agenda->armazenaPessoas("Rodolffo", "24", "1.76");
$minha_agenda->armazenaPessoas("Caio", "23", "1.76");
$minha_agenda->armazenaPessoas("Carla", "25", "1.77");
$minha_agenda->armazenaPessoas("Bananinha", "26", "1.80");
$minha_agenda->armazenaPessoas("Fiuk", "30", "1.71");


echo "<br/>";
echo "Minha agenda tem " . $minha_agenda->temQuantos();
echo "<br/>";
echo "<hr/>";
$minha_agenda->imprimeAgenda();
echo "<br/>";
echo "<hr/>";
echo "Achou Joao ? " . $minha_agenda->buscaPessoa("Joao");
echo "<br/>";
echo "<hr/>";
if ($minha_agenda->removePessoa("Bananinha")) {
  echo "Conseguiu remover Bananinha";
  echo "<br/>";
};
echo "<br/>";
echo "<hr/>";
$minha_agenda->imprimeAgenda();
