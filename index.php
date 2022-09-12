<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Formulário </title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="cad"> <center> <h1> Cadastro de Funcionários </h1> </center> </div>
	<section>
		<form method="post" action="cad.php">
            <p> ID: <input type="number" name="id"></p>
			<p> Nome: <input type="text" name="nome"></p>
			<p> Cargo: <input type="text" name="cargo"></p>
			<p> Salário: <input type="text" name="salario"></p>
			<p> Dependentes: <input type="number" name="dependentes"></p>
			<div>
				<button type="submit"> Concluir cadastro </button>
			</div>
		</form>
	</section>
</body>
</html>