<!DOCTYPE html>
<?php
	session_start();
	include_once "conexao.php";

	if(empty($_SESSION['filtroadm']))
	  {
	    echo ('<meta http-equiv="refresh"content=0;"index.php">');
	  }
	  else
	  {
?>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>NEON DAV LAB</title>
	<link rel="stylesheet" type="text/css" href="css/Style.css">
</head>

<form class="d-flex" role="search">
		<?php

		if(empty($_SESSION['filtroadm']))
		{
			echo ('<td><li><a class="btnlogpagina" href="Pagina_login.php">Entrar</a></li></td>');
		}
		else
		{
			$perfillogado = $_SESSION['filtroadm'];

			$queryadmfoto= "SELECT * FROM usuario WHERE EMAIL LIKE '$perfillogado'";

			$excutequeryadm = mysqli_query($conn, $queryadmfoto);

            $row_adm = mysqli_fetch_assoc($excutequeryadm);

            $IMGadm = $row_adm['IMAGEN'];

            if(empty($IMGadm))
			{
				$IMGadm = 'SEMFOTO.png';
			}

			echo('
					<li><a href="perfilADMmester.php"><img class="perfil" src="fotoperfil/' . $IMGadm . '"></a></li>'

				);

		}

		?>
</form>

<body class="fundolog">
	<center>
		<form  method="POST">
			<table class="tblog">
				<tr>
					<td><center>Adicionar Noticia</center></td>
				</tr>
				<tr>
					<td><h3 style=" font-size: 15px; margin: none;">Titulo :</h3><input class="txtlog" type="text" name="txttitulo"></td>
				</tr>
				<tr>
					<td><h3 style=" font-size: 15px; margin: none;">Numero :</h3><input class="txtlog" type="text" name="txtnumero" style="width: 50px;"></td>
				</tr>
				
				<tr>
					<td><h3 style=" font-size: 15px; margin: none;">Noticia :</h3><textarea class="txtlog" name="txtnoticia" style="height: 150px" ></textarea></td>
				</tr>
				<tr>
					<td><input type="file" class="txtlog" nome="imgnoticia"></td>
				</tr>
				<tr>
					<td>
						<center>
							<input class="btnlog" type="submit" name="btnAdd" value="Add">
							<input class="btnlog" type="reset" name="btnapagar" value="Limpar">
						</center>
					</td>
				</tr>
			</table>
		</form>
		<?php
			$Addn = filter_input(INPUT_POST, 'btnAdd',FILTER_SANITIZE_STRING);

			= filter_input(INPUT_POST, 'txttitulo',FILTER_SANITIZE_STRING);
			= filter_input(INPUT_POST, 'txtnumero',FILTER_SANITIZE_STRING);
			= filter_input(INPUT_POST, 'txtno',FILTER_SANITIZE_STRING);

			if($Addn == 'Add')
			{

			}
		?>
	</center>
</body>
</html>
<?php  
	}
?>