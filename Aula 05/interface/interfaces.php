<?php

interface EquipamentoEletronicoInterface
{
	public function ligar();
	public function desligar();
}

//-----------------------------

class Geladeira implements EquipamentoEletronicoInterface
{
	public function abrirPorta()
	{
		echo "<hr/>";
		echo 'Abrir a porta';
		echo "<br/>";
	}
	public function fecharPorta()
	{
		echo "<hr/>";
		echo 'Fechar a porta';
		echo "<br/>";
	}

	public function ligar()
	{
		echo "<hr/>";
		echo 'Ligar Geladeira';
		echo "<br/>";
	}

	public function desligar()
	{
		echo "<hr/>";
		echo 'Desligar Geladeira';
		echo "<br/>";
	}
}


class TV implements EquipamentoEletronicoInterface
{
	public function trocarCanal()
	{
		echo "<hr/>";
		echo 'Trocar canal';
		echo "<br/>";
	}

	public function ligar()
	{
		echo "<hr/>";
		echo 'Ligar TV';
		echo "<br/>";
	}

	public function desligar()
	{
		echo "<hr/>";
		echo 'Desligar TV';
		echo "<br/>";
	}
}
/*
$objGeladeira = new Geladeira();
$objTV = new TV();
$objGeladeira->ligar();
$objTV->ligar();
$objTV->desligar();
$objGeladeira->abrirPorta();
$objGeladeira->fecharPorta();
*/


//-------------------------

interface MamiferoInterface
{
	public function respirar();
}

interface TerrestreInterface
{
	public function andar();
}

interface AquaticoInterface
{
	public function nadar();
}

class Humano implements MamiferoInterface, TerrestreInterface
{
	public function andar()
	{
		echo "<hr/>";
		echo 'Humano Andando';
		echo "<br/>";
	}

	public function respirar()
	{
		echo "<hr/>";
		echo 'Humano Respirando';
		echo "<br/>";
	}

	public function conversar()
	{
		echo "<hr/>";
		echo 'Conversar';
		echo "<br/>";
	}
}

class Baleia implements MamiferoInterface, AquaticoInterface
{
	public function respirar()
	{
		echo "<hr/>";
		echo 'Respiração oblíqua';
		echo "<br/>";
	}

	public function nadar()
	{
		echo "<hr/>";
		echo 'Baleia Nadando';
		echo "<br/>";
	}

	public function esguichar()
	{
		echo "<hr/>";
		echo 'Esguichar';
		echo "<br/>";
	}
}
/*
$objHumano = new Humano();
$objBaleia = new Baleia();
$objHumano->respirar();
$objHumano->andar();
$objHumano->conversar();
$objBaleia->respirar();
$objBaleia->nadar();
$objBaleia->esguichar();
*/



//-----------------------------

interface Ianimal
{
	public function comer();
}

interface Iave extends Ianimal
{
	public function voar();
}

class Papagaio implements Iave
{
	public function voar()
	{
		echo "<hr/>";
		echo 'Voa Papagaio';
		echo "<br/>";
	}

	public function comer()
	{
		echo "<hr/>";
		echo 'Papagaio vai comer';
		echo "<br/>";
	}
}

$objPapagaio = new Papagaio();
$objPapagaio->comer();
$objPapagaio->voar();
