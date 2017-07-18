<?php
session_start();
include "banco.php";
include "functions.php";
//verifica se campo nome está preenchido
if (isset($_GET['nome']) && $_GET['nome'] != '') {
	$tarefa = array();
	$tarefa['nome'] = $_GET['nome'];


//verifica se campo descrição está vazio ou não
if (isset ($_GET['descricao'])) {
	$tarefa['descricao'] = $_GET['descricao'];
} else {
	$tarefa['descricao'] = '';
}

//verifica prazo
if (isset ($_GET['prazo'])) {
	$tarefa['prazo'] = traduz_data_para_banco($_GET['prazo']);
} else {
	$tarefa['prazo'] = '';
}

if (isset ($_GET['prioridade'])) {
	$tarefa['prioridade'] = $_GET['prioridade'];
} else {
	$tarefa['prioridade'] = '';
}

if (isset ($_GET['concluida'])) {
	$tarefa['concluida'] = 1;
} else {
	$tarefa['concluida'] = 0;
}

gravar_tarefa($conexao, $tarefa); //grava dados no banco de dados

}

$lista_tarefas = buscar_tarefas($conexao); //preenche a tabela com as tarefas cadastradas

include "template.php";