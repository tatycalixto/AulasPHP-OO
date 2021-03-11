<?php

require "../../app_lista_tarefas/classes/tarefa.php";
require "../../app_lista_tarefas/classes/tarefa.service.php";
require "../../app_lista_tarefas/classes/conexao.php";

/*
echo '<pre>';
print_r($_POST);
echo '<pre>';
*/



$tarefa = new Tarefa();
$tarefa->__set('tarefa', $_POST['tarefa']);

$conexao = new Conexao();

$tarefaService = new TarefaService($conexao, $tarefa);
$tarefaService->inserir();
//echo "<script>location.href='../nova_tarefa.php?inclusao=1';</script>";
header('Location:../nova_tarefa.php?inclusao=1');
/*
echo '<pre>';
print_r($tarefaService);
echo '</pre>';
*/
