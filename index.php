<!DOCTYPE html>
<html lang="pt-br">

<head>
	<!--Tags básicas do head-->
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Validação de Formulários</title>
	<!--Link dos nossos arquivos CSS e JS padrão-->
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<script src="js/scripts.js"></script>
	<!--Link dos arquivos CSS e JS do Bootstrap-->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>

</head>

<body>
	<div class="container corpo">
		<br>
		<div class="row text-center">
			<div class="col-md-12">
				<img class="ajustavel" src="img/form.png">
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-md-12 text-center">
				<h1>Exemplo de envio de dados e validação de formulário</h1>
			</div>
		</div>

		<form class="formulario" method="get" action="confirmacao.php">
			<br>
			<div class="row">
				<div class="col-md-6">
					<label for="nome">Nome</label>
					<input type="text" name="nome" value="" oninvalid="this.setCustomValidity('Por favor, digite o seu nome')" oninput="this.setCustomValidity('')" required autocomplete="off">
				</div>
				<div class="col-md-2">
					<label for="usuario">Nome de usuário</label>
					<input type="text" name="usuario" value="" pattern="[a-zA-Z]{5,}" oninvalid="this.setCustomValidity('Por favor, digite o seu nome de usuário (somente letras e com no mínimo 5 caracteres)')" oninput="this.setCustomValidity('')" required autocomplete="off">
				</div>	
				<div class="col-md-2">
					<label for="senha">Senha</label>
					<input type="text" name="senha" value="" pattern="[a-zA-Z0-9]{8,}" oninvalid="this.setCustomValidity('Por favor, digite a sua senha (somente letras e números com no mínimo 8 caracteres)')" oninput="this.setCustomValidity('')" required autocomplete="off">
				</div>
				<div class="col-md-2">
					Sexo:<br>
					<input type="radio" name="sexo" value="Feminino" required checked>   Feminino<br>
					<input type="radio" name="sexo" value="Masculino">   Masculino
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-md-2">
					<label for="nascimento">Nascimento</label>
					<input type="date" name="nascimento" value="">
				</div>
				<div class="col-md-2">
					<label for="telefone">Fone</label>
					<input type="text" name="telefone" value="" pattern="[(]?[0-9]{2}[)]?[0-9]{4,5}-{0,1}[0-9]{4}" autocomplete="off">
				</div>
				<div class="col-md-2">
					<label for="cpf">CPF</label>
					<input type="text" name="cpf" value="" pattern="[0-9]{3}[.]{1}[0-9]{3}[.]{1}[0-9]{3}[-]{1}[0-9]{2}" oninvalid="this.setCustomValidity('Por favor, digite a seu CPF no formato xxx.xxx.xxx-xx')" oninput="this.setCustomValidity('')" autocomplete="off">
				</div>
				<div class="col-md-6">
					<label for="email">E-mail</label>
					<input type="email" name="email" value="" oninvalid="this.setCustomValidity('Por favor, digite um e-mail válido')" oninput="this.setCustomValidity('')" autocomplete="off">
				</div>

			</div>
			<br>
			<div class="row">
			<div class="col-md-2">
					<label for="salario">Salário</label>
					<input type="text" name="salario" value="" pattern="([0-9]{1,}[,]?[0-9]{0,10}" oninvalid="this.setCustomValidity('Por favor, digite o seu salário sem ponto para separação de milhares e nem unidade monetária')" oninput="this.setCustomValidity('')" autocomplete="off">
				</div>
				<div class="col-md-4">
					<label for="cidade">Cidade</label>
					<input type="text" name="cidade" value="" required pattern="[a-zA-Z\u00C0-\u00FF ]{3,}" oninvalid="this.setCustomValidity('Por favor, digite o nome da cidade com pelo menos 3 caracteres')" oninput="this.setCustomValidity('')" autocomplete="off"> 
				</div>
				<div class="col-md-2">
					<label for="cep">CEP</label>
					<input type="text" name="cep" value="" pattern="[0-9]{5}[-][0-9]{3}" oninvalid="this.setCustomValidity('Por favor, digite o seu CEP no formato xxxxx-xxx')" oninput="this.setCustomValidity('')" autocomplete="off">
				</div>
				<div class="col-md-2">
					<label for="uf">UF</label><br>
					<select name="uf">
						<option>PR</option>
						<option>RS</option>
						<option>SC</option>
					</select>
				</div>
				

			</div>
			<br>
			<br>
			<div class="row text-center">
				<div class="col-md-12">
					<input type="submit" name="btnEnviar" value="Enviar os dados" id="botao">
				</div>
			</div>
			

		</form>

	</div>
</body>

</html> 