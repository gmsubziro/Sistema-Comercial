<?php
	include_once('vCPF-CNPJ.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="/BST/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="/BST/css/font-awesome.css">
	<title></title>
	<style type="text/css">
		pre{
			background-color: black;
			font: arial;
			font-size:12;
			color:white;
		}
	</style>
</head>
<body>
	<div class="container">
		<form action="" method="POST" role="form">
			<legend>Cliente</legend>
		
			<div class="form-group">
				<label for="">Código</label>
				<input type="text" class="form-control" name="CODIGO" placeholder="Insira o Código">
			</div>
			<div class="form-group">
				<label for="">Nome</label>
				<input type="text" class="form-control" name="NOME" placeholder="Insira o Nome">
			</div>
			<div class="form-group">
				<label for="">CPF</label>
				<input type="number" class="form-control" name="CPF" placeholder="Insira o CPF">
			</div>
			<div class="form-group">
				<label for="">RG</label>
				<input type="number" class="form-control" name="RG" placeholder="Insira o RG">
			</div>	
			<div class="form-group">
				<label for="">Telefone</label>
				<input type="text" class="form-control" name="TEL" placeholder="Insira o Telefone">
			</div>
			<div class="form-group">
				<label for="">E-mail</label>
				<input type="email" class="form-control" name="EMAIL" placeholder="Insira seu E-mail">
			</div>
			<div class="form-group">
				<label for="">CEP</label>
				<input type="text" class="form-control" name="CEP" placeholder="Insira seu CPF">
			</div>
	
			
		
			<button type="submit" class="btn btn-danger">Enviar</button>
			<a href="cliente_con.php"><button type="button" class="btn btn-info">Consulta</button></a>
			</form>

			<br>
			<?php
			echo "<pre><div class='container'>";
			$origem = 'dados\cliente.txt';
			$cliente = array (date("[d/m/y - H:i:s]"),"
CODIGO: ",$_POST ['CODIGO'],"
NOME: ",$_POST['NOME'],"
CPF: ",$_POST ['CPF'],"
RG: ",$_POST ['RG'],"
TELEFONE: ",$_POST ['TEL'],"
EMAIL: ",$_POST ['EMAIL'],"
CEP: ",$_POST ['CEP'],"

");
			if($cliente[2] != ""){
			if(file_put_contents($origem, $cliente,FILE_APPEND)){
				echo "Cadastrado com sucesso";
			}else{
				echo "Erro";
			}
		}

			for ($x = 0;$x < 14; $x++)
				{
					print $cliente[$x]."<br>";

				}

			?>

			<!-- usando if de modo "indireto" utilizando ":" -->
			<?php if (validarCPF($_POST['CPF'])): ?>

				<b><h3><p class="text-danger">CPF ESTA INCORRETO</p></b></h3>

			<?php else: ?>

				<h3><b><p class="text-success">CPF VALIDO</p></b></h3>
				</div></pre><br>
				
			<?php endif; ?>

	</div>
	<script type="text/javascript" src="/BST/jquery.js"></script>
	<script type="text/javascript" src="/BST/js/bootstrap.js"></script>
</body>
</html>