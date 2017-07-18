<?php
//através do codigo numerico esta função devolve informação tipo texto para melhor entendimento do usuario
function traduz_prioridade ($codigo) {
	$prioridade = "";
	switch ($codigo) {
		case 1 :
			$prioridade = "Baixa";
			break;
		case 2 :
			$prioridade = "Média";
			break;
		case 3 :
			$prioridade = "Alta";
			break;	
	}
	return $prioridade;
}//fim function
//organiza a entrada de dados para gravar no banco de dados
function traduz_data_para_banco ($data) {
	if ($data == "") {
		return "";
	}
	$dados = explode ("/", $data);
	$data_mysql = "{$dados[2]}-{$dados[1]}-{$dados[0]}";
	return $data_mysql;
}//fim function
//organiza a data para exibir para o usuario
function traduz_data_para_exibir ($data) {
	if ($data == "" OR $data == "0000-00-00") {
		return "";
	}
	$dados = explode("-", $data);
	$data_exibir = "{$dados[2]}/{$dados[1]}/{$dados[0]}";
	return $data_exibir;
}//fim function
//através do codigo 1 ou 0 esta função devolve informação tipo texto para melhor entendimento do usuario
function traduz_concluida ($concluida) {
	if ($concluida == 1) {
		return "Sim";
	} else {
		return "Não";
	}
}