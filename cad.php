<link rel="stylesheet" href="style.css">
<?php
	extract($_POST);
	$arquivo = "$id.txt";
	$refFile = fopen("Dados\ $arquivo", 'w+');

	$dado = "ID: $id \r\n Nome: $nome \r\n Cargo: $cargo \r\n Salário: $salario \r\n Dependentes: $dependentes \r\n";

	fwrite($refFile,$dado);
	fclose($refFile); 
	
	$file = scandir("Dados");

	for($i = 0; $i < count($file); $i++){
		if($file[$i] == "." || $file[$i] == ".."){
			echo "";
		}else{
			$di = trim($file[$i]);
			echo "<li> <a href='readInfo.php?id=$di'> $file[$i] </a> </li>";
		}
	}

	echo "<br> <a href='index.php'> <button> Cadastrar novamente </button> </a>";

 