<html>
	<head>
		<title> Cadastro de Usuário </title>
		<link rel="stylesheet" type="text/css" href="css/styles.css">
	</head>
	<body>
		<section class="section">
			<div class="body">
				<div class="box">
					<div class="div center">
						<h3 class="title">Cadastro</h3>
					</div>
					<div class="div center">
						<form method="POST" action="cadastrar.php">
						<label>Nome:</label><input type="text" name="nome" id="nome"><br>
						<label>Email:</label><input type="text" name="email" id="email"><br>
						<label>Senha:</label><input type="password" name="senha" id="senha"><br>
						<button class="btn" type="submit" value="Cadastrar" id="cadastrar" name="cadastrar">Cadastrar</button>
						</form>
					</div>							
				</div>
			</div>
		</section>
	</body>
</html>