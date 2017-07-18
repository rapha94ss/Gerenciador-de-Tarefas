<html>
	<head>
	<meta charset="utf-8" />
	<title>Gerenciador de Tarefas</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	</head>
	<body>
		<h1 align="center">Gerenciador de Tarefas</h1>
	<div align="center">	
	<form class="form-inline">
			<legend>Nova tarefa</legend>
			<div class="form-group">
				<label for="nome"> Tarefa: </label>
				<input type="text" name="nome" id="nome" class="form-control" placeholder="Tarefa" required="required"/>
			</div>
			<div class="form-group">
				<label for="descricao"> Descrição (opcional): </label>
				<textarea name='descricao' id="descricao" class="form-control" placeholder="Descrição"></textarea>
			</div>
			<div class="form-group">
				<label for="prazo"> Prazo (Opcional): </label>
				<input type="text" name="prazo" id="prazo" class="form-control" placeholder="Prazo"/>
			</div>
			<div class="form=group"><br>
				<h4>Prioridade</h4>
				<label class="radio-inline">
					<input type="radio" name="prioridade" value="1" checked />Baixa
				</label>	
				<label class="radio-inline">
					<input type="radio" name="prioridade" value="2" checked />Média
				</label>
				<label class="radio-inline">
					<input type="radio" name="prioridade" value="3" checked />Alta
				</label>
			</div><br>
			<label>
				Tarefa concluída:
				<input type="checkbox" name="concluida" value="1" />
			</label><br><br>
			<input type="submit" value="Cadastrar" class="btn btn-primary" />
	</form>
	<table class="table">
		<tr>
			<th>Tarefas</th>
			<th>Descrição</th>
			<th>Prazo</th>
			<th>Prioridade</th>
			<th>Concluída</th>
		</tr>
		<?php if (isset($lista_tarefas) && is_array($lista_tarefas)): ?>
            <?php foreach ($lista_tarefas as $tarefa) : ?>
            <tr>
                <td><?php echo isset($tarefa['nome']) ?  $tarefa['nome'] : ''; ?> </td>
                <td><?php echo isset($tarefa['descricao']) ?  $tarefa['descricao'] : ''; ?> </td>
                <td><?php echo traduz_data_para_exibir(($tarefa['prazo'])) ? traduz_data_para_exibir(($tarefa['prazo'])) : ''; ?></td>
                <td><?php echo traduz_prioridade($tarefa['prioridade']) ? traduz_prioridade($tarefa['prioridade']) : ''; ?></td>
                <td><?php echo traduz_concluida($tarefa['concluida']) ? traduz_concluida($tarefa['concluida']) : ''; ?></td>
            </tr>
            <?php endforeach; ?>
            <?php endif; ?>
	</table>
	</div>
	</body>

</html>