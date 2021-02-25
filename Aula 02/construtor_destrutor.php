<?php

class Pessoa
{

	public $nome;
	public $sobrenome;


	//sobrecarga de método construtor(gambiarra kk)
	public function __construct($nome, $sobrenome = null)
	{
		$this->nome = $nome;
		$this->sobrenome = $sobrenome;
	}

	function __destruct()
	{
		echo 'Objeto removido';
	}

	function setNome($nome)
	{
		$this->nome = $nome;
	}
	function setSobrenome($sobrenome)
	{
		$this->sobrenome = $sobrenome;
	}

	function getNome()
	{
		return $this->nome;
	}
	function getSobrenome()
	{
		return $this->sobrenome;
	}


	function correr()
	{
		return "$this->nome $this->sobrenome está correndo";
	}
}

$pessoa = new Pessoa("João");
//$pessoa = new Pessoa("João", "da Silva");

//$pessoa->setSobrenome("da Silva");
echo '<br />Nome: ' . $pessoa->getNome('nome');
echo '<br />Sobrenome: ' . $pessoa->getSobrenome('sobrenome');
echo '<br />' . $pessoa->correr(); //acessar o método
echo "<br/>";
