<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>The Grocery Store Brazil.</title>
	</head>
	<body>
		<h2>The Grocery Store Brazil.</h2>
		<h3> Confirmação de cadastro. </h3>
		<p>Olá: <?php echo $nome . " " . $sobrenome ?>.<br> Muito obrigado por se cadastrar em nosso website.</p>
		<p>Para concluir seu cadastro e liberar sua conta para compras clique no link abaixo.</p>
		<p><a href="<?php echo base_url("cadastro/confirmar/".md5($email)) ?>">Confimar cadastro no website!</a></p>
		<h4>Seja bem vindo, e boas compras!<br>The Grocery Store Brazil. </h4>
	</body>
</html>