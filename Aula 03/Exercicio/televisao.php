<?php
class Televisao
{
  //atributos
  public $canal;
  public $volume;

  //método construtor
  public function __construct($canal, $volume)
  {
    $this->canal = $canal;
    $this->volume = $volume;
  }

  //set
  public function setCanal($canal)
  {
    $this->canal = $canal;
  }

  public function setvolume($volume)
  {
    $this->volume = $volume;
  }

  //get
  public function getCanal()
  {
    return $this->canal;
  }
  public function getVolume()
  {
    return $this->volume;
  }

  //métodos
  public function adicionarCanal($canal)
  {
    return $this->canal += $canal;
  }

  public function adicionarVolume($volume)
  {
    return $this->volume += $volume;
  }

  public function diminuirCanal($canal)
  {
    return $this->canal -= $canal;
  }
  public function diminuirVolume($volume)
  {
    return $this->volume -= $volume;
  }
}
