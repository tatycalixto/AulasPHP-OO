<?php

//print_r($_POST);

class Mensagem
{
	public $para = null;
	public $assunto = null;
	public $mensagem = null;

	public function __get($atributo)
	{
		return $this->$atributo;
	}

	public function __set($atributo, $valor)
	{
		$this->$atributo = $valor;
	}

	public function mensagemValida()
	{
		if (empty($this->para) || empty($this->assunto) || empty($this->mensagem)) {
			return false;
		} else {
			$html = "
			<p><b>Mensagem: </b> $this->mensagem</p>";

			$headers =  "Content-Type:text/html; charset=UTF-8\n";
			$headers .= "From:tatyanecalixto.com.br<" . $this->para . ">\n";
			$headers .= "X-Sender:  <" . $this->para . ">\n";
			$headers .= "X-Mailer: PHP  v" . phpversion() . "\n";
			$headers .= "X-IP:  " . $_SERVER['REMOTE_ADDR'] . "\n";
			$headers .= "Return-Path:  <" . $this->para . ">\n";

			$emailsTo = $this->para;
			$email_subject = $this->assunto;
			echo $emailsTo;
			echo "<hr/>";
			echo $email_subject;
			echo "<hr/>";
			echo $html;
			echo "<hr/>";
			echo $headers;

			@mail($emailsTo, $email_subject, $html, $headers);
			return true;
		}
	}
}

$mensagem = new Mensagem();

$mensagem->__set('para', $_POST['para']);
$mensagem->__set('assunto', $_POST['assunto']);
$mensagem->__set('mensagem', $_POST['mensagem']);



//print_r($mensagem);

if ($mensagem->mensagemValida()) {
	echo 'Mensagem é válida';
} else {
	echo 'Mensagem não é válida';
}

//https://qastack.com.br/programming/15965376/how-to-configure-xampp-to-send-mail-from-localhost#:~:text=Voc%C3%AA%20pode%20enviar%20email%20do,%3A%5Cxampp%5Csendmail%5Csendmail.
