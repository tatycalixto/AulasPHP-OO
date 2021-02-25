<?php
class Usuario
{
  //atributos
  public $nome;
  public $cpf;
  public $email;

  //construtor da classe
  function __construct($nome_c, $cpf_c, $email_c)
  {

    $this->nome = $nome_c;
    $this->cpf = $cpf_c;
    $this->email = $email_c;
  }
}
