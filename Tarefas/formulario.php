<form class="form-inline">
	<legend>Nova tarefa</legend>
	<input type="hidden" name="id" value="<?php echo $tarefa['id']; ?> " />
	<div class="form-group">
		<label for="nome"> Tarefa: </label>
		<input type="text" name="nome" id="nome" class="form-control" placeholder="Tarefa" 
			value = "<?php echo $tarefa['nome']; ?>"/>
	</div>
	<div class="form-group">
		<label for="descricao"> Descrição (opcional): </label>
		<textarea name='descricao' id="descricao" class="form-control" placeholder="Descrição">
			<?php echo $tarefa['descricao']; ?>
		</textarea>
	</div>
	<div class="form-group">
		<label for="prazo"> Prazo (Opcional): </label>
		<input type="text" name="prazo" id="prazo" class="form-control" placeholder="Prazo" value="<?php echo traduz_data_para_exibir($tarefa['prazo']); ?>"/>
	</div>
	<div class="form=group"><br>
		<h4>Prioridade</h4>
		<label class="radio-inline">
			<input type="radio" name="prioridade" value="1" 
				<?php echo ($tarefa['prioridade'] == 1) ? 'checked' : ''; ?> />Baixa
		</label>	
		<label class="radio-inline">
			<input type="radio" name="prioridade" value="2" 
				<?php echo ($tarefa['prioridade'] == 2) ? 'checked' : ''; ?> />/>Média
		</label>
		<label class="radio-inline">
			<input type="radio" name="prioridade" value="3" 
				<?php echo ($tarefa['prioridade'] == 3) ? 'checked' : ''; ?> />/>Alta
		</label>
	</div><br>
	<label>
		Tarefa concluída:
		<input type="checkbox" name="concluida" value="1" 
			<?php echo ($tarefa['concluida'] == 1) ? 'checked' : ''; ?> />
	</label><br><br>
	<input type="submit" value="<?php echo ($tarefa['id'] > 0) ? 'Atualizar' : 'Cadastrar'; ?>" class="btn btn-primary" />
</form>