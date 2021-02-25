<?php

//modelo
class Funcionario
{

	//atributos
	public $nome;
	public $telefone;
	public $numFilhos;
	public $cargo;
	public $salario;

	//getters setters 
	//set: setar os valores do atributos dos objetos (apenas recebem não retornam)
	//get:recuperar(reornar) os valores dos atributos  

	public function setNome($nome)
	{
		$this->nome = $nome;
	}

	public function setNumFilhos($numFilhos)
	{
		$this->numFilhos = $numFilhos;
	}

	public function setTelefone($telefone)
	{
		$this->telefone = $telefone;
	}
	public function setCargo($cargo)
	{
		$this->cargo = $cargo;
	}

	public function setSalario($salario)
	{
		$this->salario = $salario;
	}

	function getNome()
	{
		return $this->nome;
	}

	function getNumFilhos()
	{
		return $this->numFilhos;
	}

	public function getTelefone()

	{
		return $this->telefone;
	}

	public function getCargo()
	{
		return $this->cargo;
	}

	public function getSalario()
	{
		return $this->salario;
	}


	//métodos
	function resumirCadFunc()
	{
		return "$this->nome possui $this->numFilhos filho(a)(s), seu telefone é $this->telefone, ele(a) ganha $this->salario e seu cargo é $this->cargo.";
	}

	function modificarNumFilhos($numFilhos)
	{
		//afetar um atributo do objeto
		$this->numFilhos = $numFilhos;
	}
}

//objetos
$objFunc1 = new Funcionario();
$objFunc1->setNome("Maria");
$objFunc1->setNumFilhos(2);
$objFunc1->setCargo('CEO');
$objFunc1->setTelefone('996598-9688');
$objFunc1->setSalario('R$45.000,00');
echo $objFunc1->resumirCadFunc();



echo '<br />';
echo '<hr />';
$objFunc2 = new Funcionario();
$objFunc2->setNome("João");
$objFunc2->setNumFilhos(0);
$objFunc2->setCargo('Programador Sênior');
$objFunc2->setTelefone('996596-9688');
$objFunc2->setSalario('R$15.000,00');
echo $objFunc2->resumirCadFunc();
$objFunc2->modificarNumFilhos(1);
echo '<br/>';
echo $objFunc2->resumirCadFunc();



echo '<br />';
echo '<hr />';
$objFunc3 = new Funcionario();
$objFunc3->setNome("Fernanda");
$objFunc3->setNumFilhos(0);
$objFunc3->setCargo('Gerente de Projetos');
$objFunc3->setTelefone('996596-9689');
$objFunc3->setSalario('R$17.000,00');
echo $objFunc3->resumirCadFunc();

echo '<br />';
echo '<hr />';
$objFunc3 = new Funcionario();
$objFunc3->setNome("Cremildo");
$objFunc3->setNumFilhos(5);
$objFunc3->setCargo('CEO');
$objFunc3->setTelefone('998796-9689');
$objFunc3->setSalario('R$45.000,00');
echo $objFunc3->resumirCadFunc();
