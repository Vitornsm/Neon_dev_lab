<!DOCTYPE html>
<?php
	session_start();

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
				<td><center>Login Neon</center></td>
			</tr>
			<tr>
				<td><input class="txtlog" type="text" placeholder="Email" name="txtusuario"></td>
			</tr>
			<tr>
				<td><input class="txtlog" type="password" placeholder="Senha" name="txtsenha"></td>
			</tr>
			<tr>
				<td>
					<center>
						<input class="btnlog" type="submit" name="btnentrar" value="Entrar">
						<input class="btnlog" type="reset" name="btnapagar" value="Limpar">
					</center>
				</td>
			</tr>
			<tr>
				<td>
					<center><a class="btnccon" href="Criar_conta.php">Criar conta</a></center>
				</td>
			</tr>
		</table>
		<?php
					include_once "conexao.php";

					$senha= filter_input(INPUT_POST,'txtsenha', FILTER_SANITIZE_STRING);
					$usuario= filter_input(INPUT_POST,'txtusuario', FILTER_SANITIZE_STRING);
					$botao= filter_input(INPUT_POST, 'btnentrar' , FILTER_SANITIZE_STRING);

					if($botao == 'Entrar')
					{
						if($senha && $usuario != null)
						{

							$query= "SELECT * FROM usuario WHERE EMAIL = '$usuario' AND SENHA = md5('$senha')";

							$queryconvert = mysqli_query($conn,$query);

							$row_usuario = mysqli_fetch_assoc($queryconvert);

							if($row_usuario != null)
							{
								$veradm = $row_usuario['USUARIO'];

								$puxarnomeadm = "SELECT * FROM usuario WHERE USUARIO = '$veradm'";

								$excutequmaster = mysqli_query($conn, $puxarnomeadm);

            					$row_master = mysqli_fetch_assoc($excutequmaster);

            					$NameMaster = $row_master['USUARIO'];

            					if ($NameMaster =='Sky_Sykes' || $NameMaster =='Hidori')
            					{
            						$n = 3; 
									$codigo = bin2hex(random_bytes($n));

									$codifinal = $codigo;

									$_SESSION['frase'] = $codifinal;

									//Metodo de filtrar conta

									$filtroUsuarioadm = $usuario ;
									
									$_SESSION['filtroadm'] = $filtroUsuarioadm;

									echo ('<meta http-equiv="refresh"content=0;"perfilADMmester.php">');
            					}
            					else
            					{
            						$encontaruse= "SELECT EMAIL FROM usuario;";

									$mostaruser= $row_usuario['EMAIL'];

									$n = 3; 
									$codigo = bin2hex(random_bytes($n));

									$codifinal = $codigo;

									$_SESSION['frase'] = $codifinal;

									//Metodo de filtrar conta

									$filtroUsuario = $usuario ;
									
									$_SESSION['filtro'] = $filtroUsuario;

									echo ('<meta http-equiv="refresh"content=0;"index.php">');
	            				}
							}
							else
							{
								echo'<h1 style="color: red; font-size: 30px; margin: 50px;l">Usuário senha ou incorreto</h1>';
							}

						}
						else
						{
							echo '<h1><center style="color: red; font-size: 30px; margin: 50px;">Prencha todos os campos</center></h1>';
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