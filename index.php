<?php
	include_once "conexao.php";
?>
<!DOCTYPE html>
<?php
	session_start();
?>
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


	  <?php
	  $querysobre1="SELECT * FROM `tb_sobre` WHERE SO_NUMERO = 1";

	  $querycon1 = mysqli_query($conn,$querysobre1);

		$row_usuario = mysqli_fetch_assoc($querycon1);

		$IMGsobre1 = $row_usuario['SO_IMAGEM'];

		//----------------------------------------------------------------------

		$querysobre2="SELECT * FROM `tb_sobre` WHERE SO_NUMERO = 2";

	  $querycon2 = mysqli_query($conn,$querysobre2);

		$row_usuario = mysqli_fetch_assoc($querycon2);

		$IMGsobre2 = $row_usuario['SO_IMAGEM'];

		//----------------------------------------------------------------------
		$querysobre3="SELECT * FROM `tb_sobre` WHERE SO_NUMERO = 3";

	  $querycon3 = mysqli_query($conn,$querysobre3);

		$row_usuario = mysqli_fetch_assoc($querycon3);

		$IMGsobre3 = $row_usuario['SO_IMAGEM'];

	  //-------------------------NOTICIAS----------------------------------------

	  $querynoticia1="SELECT * FROM `tb_noticias` WHERE CL_NUMERO = 1";

		$queryconvert1 = mysqli_query($conn,$querynoticia1);

		$row_usuario = mysqli_fetch_assoc($queryconvert1);

		$IMGNews1 = $row_usuario['CL_IMAGEM'];

		$Newtxt1 =$row_usuario['CL_NOTICI'];

		$Newtitulo1= $row_usuario['CL_TITULO'];

		//----------------------------------------------------------------------
		$querynoticia2="SELECT * FROM `tb_noticias` WHERE CL_NUMERO = 2";

		$queryconvert2 = mysqli_query($conn,$querynoticia2);

		$row_usuario = mysqli_fetch_assoc($queryconvert2);

		$IMGNews2 = $row_usuario['CL_IMAGEM'];

		$Newtxt2 =$row_usuario['CL_NOTICI'];

		$Newtitulo2= $row_usuario['CL_TITULO'];

		//----------------------------------------------------------------------
		$querynoticia3="SELECT * FROM `tb_noticias` WHERE CL_NUMERO = 3";

		$queryconvert3 = mysqli_query($conn,$querynoticia3);

		$row_usuario = mysqli_fetch_assoc($queryconvert3);

		$IMGNews3 = $row_usuario['CL_IMAGEM'];

		$Newtxt3 =$row_usuario['CL_NOTICI'];

		$Newtitulo3= $row_usuario['CL_TITULO'];

		//----------------------------------------------------------------------
		$querynoticia4="SELECT * FROM `tb_noticias` WHERE CL_NUMERO = 4";

		$queryconvert4 = mysqli_query($conn,$querynoticia4);

		$row_usuario = mysqli_fetch_assoc($queryconvert4);

		$IMGNews4 = $row_usuario['CL_IMAGEM'];

		$Newtxt4 =$row_usuario['CL_NOTICI'];

		$Newtitulo4= $row_usuario['CL_TITULO'];

		//----------------------------------------------------------------------
		$querynoticia5="SELECT * FROM `tb_noticias` WHERE CL_NUMERO = 5";

		$queryconvert5 = mysqli_query($conn,$querynoticia5);

		$row_usuario = mysqli_fetch_assoc($queryconvert5);

		$IMGNews5 = $row_usuario['CL_IMAGEM'];

		$Newtxt5 =$row_usuario['CL_NOTICI'];

		$Newtitulo5= $row_usuario['CL_TITULO'];

		//----------------------------------------------------------------------
		$querynoticia6="SELECT * FROM `tb_noticias` WHERE CL_NUMERO = 6";

		$queryconvert6 = mysqli_query($conn,$querynoticia6);

		$row_usuario = mysqli_fetch_assoc($queryconvert6);

		$IMGNews6 = $row_usuario['CL_IMAGEM'];

		$Newtxt6 =$row_usuario['CL_NOTICI'];

		$Newtitulo6= $row_usuario['CL_TITULO'];

		echo'
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
			  <!-- Indicators -->
			  <ol class="carousel-indicators">
			    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			    <li data-target="#myCarousel" data-slide-to="1"></li>
			    <li data-target="#myCarousel" data-slide-to="2"></li>
			  </ol>
			  <!-- Carosel -->
			  <div class="carousel-inner">
			    <div class="item active">
			      <img src="Sobre/' . $IMGsobre1 . '" alt="Los Angeles">
			    </div>

			    <div class="item">
			      <img src="Sobre/' . $IMGsobre2 . '" alt="Los Angeles">
			    </div>

			    <div class="item">
			      <img src="Sobre/' . $IMGsobre3 . '" alt="Los Angeles">
			    </div>
			  </div>

			  <!-- Left and right controls -->
			  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
			    <span class="glyphicon glyphicon-chevron-left"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="right carousel-control" href="#myCarousel" data-slide="next">
			    <span class="glyphicon glyphicon-chevron-right"></span>
			    <span class="sr-only">Next</span>
			  </a>
			</div>';

	  ?>
	  	</br></br></br></br>

		<center>

		<?php
			

			echo '
				<div class="tbnews">
					<div class="zoom">
						<img src="noticias/' . $IMGNews1 . '"><center><h1>' . $Newtitulo1 . '</h1><h1 class="homenews">' . $Newtxt1 . '</h1></center>
					</div>

					<div class="zoom">
						<img src="noticias/' . $IMGNews2 . '"><center><h1>' . $Newtitulo2 . '</h1><h1 class="homenews">' . $Newtxt2 . '</h1></center>
					</div>

					<div class="zoom">
						<img src="noticias/' . $IMGNews3 . '"><center><h1>' . $Newtitulo3 . '</h1><h1 class="homenews">' . $Newtxt3 . '<h1></center>
					</div>
				</div>
				<div class="tbnews">
					<div class="zoom">
						<img src="noticias/' . $IMGNews4 . '"><center><h1>' . $Newtitulo4 . '</h1><h1 class="homenews">' . $Newtxt4 . '</h1></center>
					</div>

					<div class="zoom">
						<img src="noticias/' . $IMGNews5 . '"><center><h1>' . $Newtitulo5 . '</h1><h1 class="homenews">' . $Newtxt5 . '</h1></center>
					</div>

					<div class="zoom">
						<img src="noticias/' . $IMGNews6 . '"><center><h1>' . $Newtitulo6 . '</h1><h1 class="homenews">' . $Newtxt6 . '<h1></center>
					</div>
				</div>';
		?>
		</center>

	</main>

	<footer>
			<div class="cop">©Neon dev Lab</div>
	</footer>
	
</body>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</html>#gtrbrazil #gtr #skyline #nissan #nissangtr #nismo #jdm #r35 #r34 #r33 #r32 #godzilla #turbo #carrosantigos #jdmgram #jdmbrasil #carrosdeluxo