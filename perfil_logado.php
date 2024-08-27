<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>NEON DAV LAB</title>
	<link rel="stylesheet" type="text/css" href="css/Style.css">
</head>
<body>
	<?php

		include "conexao.php";

		if(empty($_SESSION['filtro']))
		{
			echo ('<td><li><a class="btnlogpagina" href="Pagina_login.php">Entrar</a></li></td>');
		}
		else
		{
			$perfillogado = $_SESSION['filtro'];

			$queryadmfoto= "SELECT * FROM usuario WHERE EMAIL LIKE '$perfillogado'";

			$excutequeryadm = mysqli_query($conn, $queryadmfoto);

            $row_adm = mysqli_fetch_assoc($excutequeryadm);

            $IMGadm = $row_adm['IMAGEN'];

            if(empty($IMGadm))
			{
				$IMGadm = 'SEMFOTO.png';
			}

			echo('
					<li><a href="PerfilPG.php"><img class="perfil" src="fotoperfil/' . $IMGadm . '"></a></li>'

				);

		}
		
	?>

</body>

</html>