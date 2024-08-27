<!DOCTYPE html>
<?php
	session_start();
	include_once "conexao.php";

	if(empty($_SESSION['filtro']))
	  {
	    echo ('<meta http-equiv="refresh"content=0;"index.php">');
	  }
	  else
	  {
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>NEON DAV LAB</title>
	<link rel="stylesheet" type="text/css" href="css/Style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <form accept-charset="utf-8" method="POST" enctype="multipart/form-data">
    <header>
	  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark" style="background-color: #00B8FF !important;padding: 0px !important;">
	    <div class="container-fluid">
	      <a class="logoN" href="index.php">neon</a>
	      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="navbar-toggler-icon"></span>
	      </button>
	      <div class="collapse navbar-collapse" id="navbarCollapse" style="padding: 25px !important;">
	        <ul class="navbar-nav me-auto mb-2 mb-md-0">
	          <li>
	            <a class="links" href="Games.php">Games</a>
	          </li>
	          <li>
	            <a class="links" href="">Quem Somos</a>
	          </li>
	          <li>
	            <a class="links" href="">Notícias</a>
	          </li>
	        </ul>
	        <form class="d-flex" role="search">
          		<?php
					include_once"perfil_logado.php";
				?>
	        </form>
	      </div>
	    </div>
	  </nav>
	</header>
	<main>
	<form accept-charset="utf-8" method="POST" enctype="multipart/form-data">

		<center>
			<table class="CXsair">
				
				<tr>
					<td style="padding: 15px;">
						<center>
							<input class="btnlog" style="padding: 5px;" type="file"  name="imgboxlivro"><br>

							<input class="btnlog" style="padding: 5px;" type="submit" name="btnok" value="Confirmar">
						</center>
					</td>
				</tr>
			</table>
		</center>

		<?php

			include "conexao.php";

			$Trocarfoto= filter_input(INPUT_POST, 'btnok',FILTER_SANITIZE_STRING);

			if ($Trocarfoto == 'Confirmar')
			{
				$Ureup = $row_adm['USUARIO'];

				$_UP['pasta'] = 'fotoperfil/';

				$arquivo = $_FILES['imgboxlivro'];
				$extensao = pathinfo($arquivo['name'], PATHINFO_EXTENSION);
				$novo_nome = md5(uniqid($arquivo['name'])).".".$extensao;

				if($arquivo['name'] == null)
				{
					echo '<center><h3 style="color: red;">';
					echo 'Insira uma imagem';
					echo '</h3></center>';
				}
				else
				{

					if(isset($_FILES['imgboxlivro']));
					{

						$query_UP ="UPDATE usuario SET IMAGEN = '$novo_nome' WHERE USUARIO ='$Ureup'";

						if(mysqli_query($conn, $query_UP))
						{
							move_uploaded_file($_FILES['imgboxlivro']['tmp_name'], $_UP['pasta'].$novo_nome);
							echo "<script>alert('Arquivo enviado com susesso');</script>";
							echo ('<meta http-equiv="refresh"content=0;"PerfilPG.php">');
						}
						else
						{
							echo '<h3 style="color: red;">';
							echo 'Dados já cadastrados';
							echo '</h3>';
						}		
					}
				}

			}
			
		?>

	</form>

</body>
</html>
<?php  
	}
?>