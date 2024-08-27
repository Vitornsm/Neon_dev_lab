<!DOCTYPE html>
<?php
	session_start();

	include_once "conexao.php";

	if(empty($_SESSION['filtro']))
	  {
	    
?>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>NEON DAV LAB</title>
	<link rel="stylesheet" type="text/css" href="css/Style.css">
</head>
<body class="fundolog">
	<center>
		<form  method="POST">
			<table class="tblog">
				<tr>
					<td><center>Criar conta</center></td>
				</tr>
				<tr>
					<td><input class="txtlog" type="text" placeholder="Nome" name="txtnome"></td>
				</tr>
				<tr>
					<td><input class="txtlog" type="text" placeholder="Sobrenome" name="txtsobrenome"></td>
				</tr>
				<tr>
					<td><input class="txtlog" type="text" placeholder="E-mail" name="txtemail"></td>
				</tr>
				<tr>
					<td><input class="txtlog" type="text" placeholder="Usuario da Conta" name="txtusuario"></td>
				</tr>
				<tr>
					<td><input class="txtlog" type="password" placeholder="Senha" name="txtsenha"></td>
				</tr>
				<tr>
					<td><input class="txtlog" type="password" placeholder="Confirmar Senha" name="txtconfirmar"></td>
				</tr>
				<tr>
					<td>
						<center>
							<input class="btnlog" type="submit" name="btncriar" value="Criar">
							<input class="btnlog" type="reset" name="btnapagar" value="Limpar">
						</center>
					</td>
				</tr>
			</table>
			<?php

					$botao= filter_input(INPUT_POST, 'btncriar' , FILTER_SANITIZE_STRING);
					$Cnome= filter_input(INPUT_POST, 'txtnome' , FILTER_SANITIZE_STRING);
					$Csobrenme= filter_input(INPUT_POST, 'txtsobrenome' , FILTER_SANITIZE_STRING);
					$Cemail= filter_input(INPUT_POST, 'txtemail' , FILTER_SANITIZE_STRING);
					$Cusuario= filter_input(INPUT_POST, 'txtusuario' , FILTER_SANITIZE_STRING);
					$Csenha= filter_input(INPUT_POST, 'txtsenha' , FILTER_SANITIZE_STRING);
					$Cconfsenha= filter_input(INPUT_POST, 'txtconfirmar' , FILTER_SANITIZE_STRING);
					$mensagem= 'Confirme Sua Conta!';

					if($botao == 'Criar')
					{
						if($Cnome && $Csobrenme && $Cemail && $Cusuario && $Csenha && $Cconfsenha != null)
						{
							if($Csenha == $Cconfsenha)
							{
								$query = "INSERT INTO usuario (USUARIO,SENHA,IMAGEN,EMAIL)VALUES('$Cusuario',md5('$Csenha'),'','$Cemail')";

								mysqli_query($conn, $query);

								$arquivo = "
							 	Nome: ".$Cusuario."
							 	E-mail: ".$Cemail."
							 	Mensagem: ".$mensagem;
							  
							  	//Emails para quem será enviado o formulário
							  	$destino = $Cemail;
							  	$assunto = "Criar Conta";

							  	//Este sempre deverá existir para garantir a exibição correta dos caracteres
							  	$headers  = "MIME-Version: 1.0\n";
							  	$headers .= "Content-type: text/html; charset=iso-8859-1\n";
							 	$headers .= "From: $Cusuario <$Cemail>";

							 	 //Enviar
							 	 mail($destino, $assunto, $arquivo, $headers);
							}
							else
							{
								echo'<h1 style="color: red; font-size: 30px; margin: 50px;">As senhas estão diferentes</h1>';
							}

						}
						else
						{
							echo'<h1 style="color: red; font-size: 30px; margin: 50px;">Preencha todos campos</h1>';
						}
					}
				}
				else
				  	{
				  		echo ('<meta http-equiv="refresh"content=0;"index.php">');	
				  	}	
			?>
		</form>
	</center>
</body>
</html>