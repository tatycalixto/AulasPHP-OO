<?php
class BBB
{
  public $nome;
  public $status;
  public $eliminado = false;
  public $total_participantes = 0;


  //set
  public function setNome($nome)
  {
    $this->nome = $nome;
  }
  public function setStatus($status)
  {
    $this->status = $status;
  }
  public function setEliminado($eliminado)
  {
    $this->eliminado = $eliminado;
  }

  //get
  public function getNome()
  {
    return $this->nome;
  }
  public function getStatus()
  {
    return $this->status;
  }
  public function getEliminado()
  {
    $this->eliminado;
  }

  //métodos
  function addParticipantes($nome, $status, $eliminado)
  {
    if ($this->total_participantes < 6) {
      $this->nome[$this->total_participantes] = $nome;
      $this->status[$this->total_participantes] = $status;
      $this->eliminado[$this->total_participantes] = $eliminado;
      $this->total_participantes++;
      return ($this->total_participantes);
    } else {
      return 0;
    }
  }



  function imprimeParticipante()
  {
    echo "Nome/Status";
    for ($i = 1; $i <= $this->total_participantes; $i++) {
      $this->imprimirPessoa($i);
    }
  }
  function imprimirPessoa($posicao)
  {

    $i = $posicao - 1;
    echo "<br/>";
    echo $posicao . "/" . $this->nome[$i] . "/" . $this->status[$i] . "/" . $this->eliminado[$i];
  }

  function imprimeParticipanteStatus()
  {
    echo "Nome/Status";
    for ($i = 1; $i <= $this->total_participantes; $i++) {
      $this->imprimirPessoaSatus($i);
    }
  }
  function imprimirPessoaSatus($posicao)
  {
    $i = $posicao - 1;
    if ($this->status[$i] == 'd') {

      echo "<br/>";
      echo $posicao . "/" . $this->nome[$i] . "/" . $this->status[$i] . "/" . $this->eliminado[$i];
    }
  }

  //
  function Paredão()
  {
  }

  function StatusFinal()
  {
  }
}
$participante = new BBB();

echo "<hr/>";
$participante->addParticipantes("Joao", "d", false);
$participante->addParticipantes("Camila", "d", false);
$participante->addParticipantes("Juliette", "l", false);
$participante->addParticipantes("Sarah", "i", false);
$participante->addParticipantes("Gil do Vigor", "d", false);
$participante->addParticipantes("Projota", "d", false);
echo "<br/>";
echo "<hr/>";
$participante->imprimeParticipante();
echo "<br/>";
echo "<hr/>";
$participante->imprimeParticipanteStatus();
echo "<br/>";
echo "<hr/>";
