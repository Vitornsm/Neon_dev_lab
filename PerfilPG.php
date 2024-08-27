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
<html lang="pt-br">
<body>
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

	     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

	  	<form method="POST">
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
		</form>
		<main>
			<form accept-charset="utf-8" method="POST" enctype="multipart/form-data">
				<?php

						$puxaruser=$_SESSION['filtro'];

						$querybuspr="SELECT * FROM '$puxaruser'";

						$lodnquery = mysqli_query($conn,$querybuspr);

						$IMGadm = $row_adm['IMAGEN'];

						if(empty($IMGadm))
						{
							$IMGadm = 'SEMFOTO.png';
						}

						echo'<table><tr>';

						echo'<td><a href="Trocar_foto.php"><img class="perfilpagina" src="fotoperfil/' . $IMGadm . '"></a></td>';

						echo '<td>' . $row_adm['USUARIO'] . '</td>';


					?><tr><td><li><input class="btnlog" type="submit" name="btndeslogar" value="Sair"></li></td></tr></table>

					<?php
						$BotaoSair =filter_input(INPUT_POST,'btndeslogar', FILTER_SANITIZE_STRING);

						if($BotaoSair == 'Sair')
						{
							echo '<center>
									<table class="CXsair" >
										<tr>
											<td style="padding: 15px;">Tem certaza que deseja Sair</td>
										</tr>
										<tr>
											<td style="padding: 15px;">
												<center>
													<input class="btnlog" style="padding: 5px;" type="submit" name="btncertesa" value="Sim">
													&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;					
													<input class="btnlog" style="padding: 5px;" type="submit" name="btnnao" value="Não">
												</center>
											</td>
										</tr>
									</table>
								</center>';
							
						}

						$Deslogar =filter_input(INPUT_POST,'btncertesa',FILTER_SANITIZE_STRING);

						if($Deslogar == 'Sim')
						{
							if(isset($_SESSION['filtro']))
							{
								unset($_SESSION['filtro']);
							}

							echo ('<meta http-equiv="refresh"content=0;"index.php">');	
						}

					
				?>
			</form>
		</main>
	<footer>
			<div class="cop">©Neon dev Lab</div>
	</footer>
	</form>
</body>
</html>
<?php  
	}
?>