<?php

class Conexao
{

	public $host = '127.0.0.1';
	public $dbname = 'bd_tarefas';
	public $user = 'root';
	public $pass = '';


	public function conectar()
	{

		$conexao = new PDO(
			"mysql:host=$this->host;dbname=$this->dbname",
			"$this->user",
			"$this->pass"
		);

		return $conexao;
	}
}
