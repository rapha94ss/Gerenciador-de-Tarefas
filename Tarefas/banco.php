<?php
$bdServidor = '127.0.0.1';
$bdUsuario = 'raphael';
$bdSenha = 'root';
$bdBanco = 'tarefas';

$conexao = mysqli_connect($bdServidor, $bdUsuario, $bdSenha, $bdBanco);
if (mysqli_connect_errno($conexao)) {
	echo "Problemas ao tentar conectar ao banco, verifique os dados";
	die();
}
function buscar_tarefas($conexao) {
	$sqlBusca = 'SELECT * FROM tarefas';
	$resultado = mysqli_query($conexao, $sqlBusca);
	$tarefas = array();
	
	while ($tarefa = mysqli_fetch_assoc($resultado)) {
		$tarefas[] = $tarefa;
	}
	return $tarefas;
}//fim buscar tarefas
function gravar_tarefa($conexao, $tarefa) {
	$sqlGravar = "INSERT INTO tarefas 
	(nome, descricao, prioridade, prazo, concluida) 
	VALUES 
	(
		'{$tarefa['nome']}',
		'{$tarefa['descricao']}',
		{$tarefa['prioridade']},
		'{$tarefa['prazo']}',
		{$tarefa['concluida']}
	)";
	mysqli_query($conexao, $sqlGravar);
}//fim function
function buscar_tarefa($conexao, $id) {
	$sqlBusca = 'SELECT * FROM tarefas WHERE id = ' . $id;
	$resultado = mysqli_query($conexao, $sqlBusca);
	return mysqli_fetch_assoc($resultado);
}//fim function
function editar_tarefa($conexao, $tarefa)
{

$sql = "

UPDATE tarefas SET

nome = '{$tarefa['nome']}',

descricao = '{$tarefa['descricao']}',

prioridade = {$tarefa['prioridade']},

prazo = '{$tarefa['prazo']}',

concluida = {$tarefa['concluida']}

WHERE id = {$tarefa['id']}

";

mysqli_query($conexao, $sqlEditar);

}

