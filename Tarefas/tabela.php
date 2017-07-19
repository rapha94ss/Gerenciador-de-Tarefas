<table class="table">
		<tr>
			<th>Tarefas</th>
			<th>Descrição</th>
			<th>Prazo</th>
			<th>Prioridade</th>
			<th>Concluída</th>
			<th>Opções</th>
		</tr>
		<?php if (isset($lista_tarefas) && is_array($lista_tarefas)): ?>
            <?php foreach ($lista_tarefas as $tarefa) : ?>
            <tr>
                <td><?php echo isset($tarefa['nome']) ?  $tarefa['nome'] : ''; ?> </td>
                <td><?php echo isset($tarefa['descricao']) ?  $tarefa['descricao'] : ''; ?> </td>
                <td><?php echo traduz_data_para_exibir(($tarefa['prazo'])) ? traduz_data_para_exibir(($tarefa['prazo'])) : ''; ?></td>
                <td><?php echo traduz_prioridade($tarefa['prioridade']) ? traduz_prioridade($tarefa['prioridade']) : ''; ?></td>
                <td><?php echo traduz_concluida($tarefa['concluida']) ? traduz_concluida($tarefa['concluida']) : ''; ?></td>
				<td>
					<a href="editar.php?<?php echo $tarefa['id'];?>">
						Editar
					</a>
				</td>
            </tr>
            <?php endforeach; ?>
            <?php endif; ?>
	</table>