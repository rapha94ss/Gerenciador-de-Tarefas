<html>
	<head>
	<meta charset="utf-8" />
	<title>Gerenciador de Tarefas</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	</head>
	<body>
		<h1 align="center">Gerenciador de Tarefas</h1>
	<div align="center">	
		<?php include('formulario.php'); ?>
		
		<?php if ($exibir_tabela) : ?>
			<?php include('tabela.php'); ?>
		<?php endif; ?>	
	</div>
	</body>

</html>