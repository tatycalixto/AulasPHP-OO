<?php

require "tarefa.php";
require "tarefa.service.php";
require "conexao.php";

/*
echo '<pre>';
print_r($_POST);
echo '<pre>';
*/
//se tiver vindo algo cia get a variável ação será atribuída a essa valor
//se não fica com o valor dela
$acao = isset($_GET['acao']) ? $_GET['acao'] : $acao;
//só vai add tarefas se acao==inserir
if ($acao == 'inserir') {

  $tarefa = new Tarefa();
  $tarefa->__set('tarefa', $_POST['tarefa']);

  $conexao = new Conexao();

  $tarefaService = new TarefaService($conexao, $tarefa);
  $tarefaService->inserir();
  //echo "<script>location.href='../nova_tarefa.php?inclusao=1';</script>";
  header('Location:nova_tarefa.php?inclusao=1');
  /*
echo '<pre>';
print_r($tarefaService);
echo '</pre>';
*/
} else if ($acao == 'recuperar') {
  //  echo "chegamso ate aqui";

  $tarefa = new Tarefa();
  $conexao = new Conexao();

  $tarefaService = new TarefaService($conexao, $tarefa);
  $tarefas = $tarefaService->recuperar();
} else if ($acao == 'atualizar') {
  $tarefa = new Tarefa();
  $tarefa->__set('id', $_POST['id']);
  $tarefa->__set('tarefa', $_POST['tarefa']);

  $conexao = new Conexao();

  $tarefaService = new TarefaService($conexao, $tarefa);
  if ($tarefaService->atualizar()) {
    header('location: todas_tarefas.php');
  } else if ($acao == 'remover') {

    $tarefa = new Tarefa();
    $tarefa->__set('id', $_GET['id']);

    $conexao = new Conexao();

    $tarefaService = new TarefaService($conexao, $tarefa);
    $tarefaService->remover();

    header('location: todas_tarefas.php');
  }
}
