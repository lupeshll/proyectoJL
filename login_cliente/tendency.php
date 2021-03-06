<?php
    session_start();
	require 'funcs/conexion.php';
	require 'funcs/funcs.php';

    if(!isset($_SESSION["id_usuario"])){
        header("location: inicio.php");
    }

    $idUsuario = $_SESSION['id_usuario'];

    $sql = "SELECT id , nombre FROM users_clientes WHERE id='$idUsuario'";
    $result = $mysqli->query($sql);
    
    $row=$result->fetch_assoc();
    
?>
<?php if($_SESSION['tipo_usuario'] == 2){?>
<!doctype html>
<html lang="es">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
		integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<!-- Styles propios -->	
	<link rel="stylesheet" href="styles.css">
	<!--  -->
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@300;400;600&display=swap" rel="stylesheet">

	<script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>

	<title>Trend Stoore| Tendencias</title>
	<link rel="icon" href="img/logo-icon.ico">
</head>

<body>
	<nav class="navbar navbar-expand-lg fixed-top">
		<div class="container">
			<a class="navbar-brand" href="welcome.php">
				<img class="img-responsive " src="../img/logo2.png" width="70" height="70" class="d-inline-block align-top" alt="">
				Trend Stoore
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
				aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<ion-icon class="btn-menu" name="menu-outline"></ion-icon>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ml-auto">
				<li class="nav-item active">
						<a class="nav-link" href="welcome.php" id="inicio">Inicio</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="about_c.php" id="nosotros">Nosotros</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
							aria-haspopup="true" aria-expanded="false">
							Ropas
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="rdama_c.php" id="rdama">Damas</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="rcaballero_c.php" id="rcaballero">Caballeros</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="niños_c.php" id="niños">Niños</a>
						</div>
					</li>
					<?php if($_SESSION['tipo_usuario'] == 2){?>
						<li class="nav-item">
							<a class="nav-link" href="tendency.php" id="tendencia">Tendencias</a>
						</li>
						
						<li class="nav-item">
							<a class="nav-link" href="sale.php" id="sale">
								% Descuentos
							</a>
						</li>
						<?php } ?>
						<li class="nav-item">
							<a class="nav-link" href="contacto.php" id="contacto">Contactanos</a>
						</li>
						
						<li class="nav-item">
							<a class="nav-link" href="logout.php">Cerrar Session</a>	
						</li>
					
					
				</ul>
			</div>
		</div>
	</nav>

	<section style="background-image: url('../img/tend.png');">
		<div class="container">
			<br><br><br>
			<div class="content-center">
				<h1 style="color:black"><?php echo '&nbsp&nbsp Hola '.utf8_decode($row['nombre']);?></h1>
				<h2 style="background-color: white; color:gray"><b>
				Por pertenecer a la comunidad Trend <b>accedes a las novedades de nuestra website.</b> 
				</h2>
				
			</div>
		</div>
	</section>
	<section id="tendency" style="background-color: #e7e5e5;">
		<div class="container">
			<div class="content-center">
				<h2>Los mejores estilos para <b>tu outfit favorito.</b> </h2>
			</div>

			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner">
					<div class="carousel-item active">
						<p>Outfit casuales para damas</p>
						<img class="d-block w-100" src="../img/cr_2.jpg" alt="First slide">
						
						<div class="raiting">
							<ul class="list-inline">
								<li class="list-inline-item"><ion-icon name="star"></ion-icon></li>
								<li class="list-inline-item"><ion-icon  name="star"></ion-icon></li>
								<li class="list-inline-item"><ion-icon  name="star"></ion-icon></li>
								<li class="list-inline-item"><ion-icon  name="star"></ion-icon></li>
								<li class="list-inline-item"><ion-icon  name="star"></ion-icon></li>
							</ul>
						</div>
						 
					</div>
					<div class="carousel-item">
						<p>Joggers para caballeros</p>
						<img class="d-block w-100" src="../img/cr_4.jpg" alt="First slide">

						<div class="raiting">
							<ul class="list-inline">
								<li class="list-inline-item"><ion-icon name="star"></ion-icon></li>
								<li class="list-inline-item"><ion-icon  name="star"></ion-icon></li>
								<li class="list-inline-item"><ion-icon  name="star"></ion-icon></li>
								<li class="list-inline-item"><ion-icon  name="star"></ion-icon></li>
								<li class="list-inline-item"><ion-icon  name="star"></ion-icon></li>
							</ul>
						</div>
					</div>
					<div class="carousel-item">
						
						<p>Palazos en colores</p>
						<img class="d-block w-100" src="../img/cr_6.jpg" alt="First slide">

						<div class="raiting">
							<ul class="list-inline">
								<li class="list-inline-item"><ion-icon name="star"></ion-icon></li>
								<li class="list-inline-item"><ion-icon  name="star"></ion-icon></li>
								<li class="list-inline-item"><ion-icon  name="star"></ion-icon></li>
								<li class="list-inline-item"><ion-icon  name="star"></ion-icon></li>
								<li class="list-inline-item"><ion-icon  name="star"></ion-icon></li>
							</ul>
						</div>
					</div>
					<div class="carousel-item">
						
						<p>Joggers para damas</p>
						<img class="d-block w-100" src="../img/cr_5.jpg" alt="First slide">

						<div class="raiting">
							<ul class="list-inline">
								<li class="list-inline-item"><ion-icon name="star"></ion-icon></li>
								<li class="list-inline-item"><ion-icon  name="star"></ion-icon></li>
								<li class="list-inline-item"><ion-icon  name="star"></ion-icon></li>
								<li class="list-inline-item"><ion-icon  name="star"></ion-icon></li>
								<li class="list-inline-item"><ion-icon  name="star"></ion-icon></li>
							</ul>
						</div>
					</div>
					<div class="carousel-item">
						
						<p>Outfits casuales para caballeros</p>
						<img class="d-block w-100" src="../img/cr_10.jpg" alt="First slide">
						<div class="raiting">
							<ul class="list-inline">
								<li class="list-inline-item"><ion-icon name="star"></ion-icon></li>
								<li class="list-inline-item"><ion-icon  name="star"></ion-icon></li>
								<li class="list-inline-item"><ion-icon  name="star"></ion-icon></li>
								<li class="list-inline-item"><ion-icon  name="star"></ion-icon></li>
								<li class="list-inline-item"><ion-icon  name="star"></ion-icon></li>
							</ul>
						</div>
					</div>
					<div class="carousel-item">
						
						<p>Joggers de jeans para damas</p>
						<img class="d-block w-100" src="../img/cr_7.jpg" alt="First slide">
						<div class="raiting">
							<ul class="list-inline">
								<li class="list-inline-item"><ion-icon name="star"></ion-icon></li>
								<li class="list-inline-item"><ion-icon  name="star"></ion-icon></li>
								<li class="list-inline-item"><ion-icon  name="star"></ion-icon></li>
								<li class="list-inline-item"><ion-icon  name="star"></ion-icon></li>
								<li class="list-inline-item"><ion-icon  name="star"></ion-icon></li>
							</ul>
						</div>
					</div>
				</div>
				<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		
			<div class="content-center">
				<h2>Gorras por temporada que puedes combinar con<b>tu outfit favorito.</b> </h2>
			</div>
			<div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner">
					<div class="carousel-item active">
						<p>Gorras de sol JusT</p>
						<img class="d-block w-100" src="../img/gorras.jpg" alt="First slide">
						
						<div class="raiting">
							<ul class="list-inline">
								<li class="list-inline-item"><ion-icon name="star"></ion-icon></li>
								<li class="list-inline-item"><ion-icon  name="star"></ion-icon></li>
								<li class="list-inline-item"><ion-icon  name="star"></ion-icon></li>
								<li class="list-inline-item"><ion-icon  name="star"></ion-icon></li>
								<li class="list-inline-item"><ion-icon  name="star"></ion-icon></li>
							</ul>
						</div>
						 
					</div>
					<div class="carousel-item">
						<p>Gorras de lana YMB</p>
						<img class="d-block w-100" src="../img/gorras2.jpg" alt="First slide">

						<div class="raiting">
							<ul class="list-inline">
								<li class="list-inline-item"><ion-icon name="star"></ion-icon></li>
								<li class="list-inline-item"><ion-icon  name="star"></ion-icon></li>
								<li class="list-inline-item"><ion-icon  name="star"></ion-icon></li>
								<li class="list-inline-item"><ion-icon  name="star"></ion-icon></li>
								<li class="list-inline-item"><ion-icon  name="star"></ion-icon></li>
							</ul>
						</div>
					</div>
					<div class="carousel-item">
						
						<p>Gorras de lana GUCCI</p>
						<img class="d-block w-100" src="../img/gorras3.png" alt="First slide">

						<div class="raiting">
							<ul class="list-inline">
								<li class="list-inline-item"><ion-icon name="star"></ion-icon></li>
								<li class="list-inline-item"><ion-icon  name="star"></ion-icon></li>
								<li class="list-inline-item"><ion-icon  name="star"></ion-icon></li>
								<li class="list-inline-item"><ion-icon  name="star"></ion-icon></li>
								<li class="list-inline-item"><ion-icon  name="star"></ion-icon></li>
							</ul>
						</div>
					</div>
					
				</div>
				<a class="carousel-control-prev" href="#carouselExampleIndicators2" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleIndicators2" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
			

			<div class="content-center">
				<h2>Accesorios de marca y en tendencia en <b>Trend Stoore.</b> </h2>
			</div>
			<div id="carouselExampleIndicators3" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner">
					<div class="carousel-item active">
						<p>Billeteras Brooklin</p>
						<img class="d-block w-100" src="../img/billeteras.jpg" alt="First slide">
						
						<div class="raiting">
							<ul class="list-inline">
								<li class="list-inline-item"><ion-icon name="star"></ion-icon></li>
								<li class="list-inline-item"><ion-icon  name="star"></ion-icon></li>
								<li class="list-inline-item"><ion-icon  name="star"></ion-icon></li>
								<li class="list-inline-item"><ion-icon  name="star"></ion-icon></li>
								<li class="list-inline-item"><ion-icon  name="star"></ion-icon></li>
							</ul>
						</div>
						 
					</div>
					<div class="carousel-item">
						<p>Mochilas PRINCESS</p>
						<img class="d-block w-100" src="../img/mochilas.jpg" alt="First slide">

						<div class="raiting">
							<ul class="list-inline">
								<li class="list-inline-item"><ion-icon name="star"></ion-icon></li>
								<li class="list-inline-item"><ion-icon  name="star"></ion-icon></li>
								<li class="list-inline-item"><ion-icon  name="star"></ion-icon></li>
								<li class="list-inline-item"><ion-icon  name="star"></ion-icon></li>
								<li class="list-inline-item"><ion-icon  name="star"></ion-icon></li>
							</ul>
						</div>
					</div>
					<div class="carousel-item">
						
						<p>Mochilas MODERN</p>
						<img class="d-block w-100" src="../img/mochilas2.jpg" alt="First slide">

						<div class="raiting">
							<ul class="list-inline">
								<li class="list-inline-item"><ion-icon name="star"></ion-icon></li>
								<li class="list-inline-item"><ion-icon  name="star"></ion-icon></li>
								<li class="list-inline-item"><ion-icon  name="star"></ion-icon></li>
								<li class="list-inline-item"><ion-icon  name="star"></ion-icon></li>
								<li class="list-inline-item"><ion-icon  name="star"></ion-icon></li>
							</ul>
						</div>
					</div>
					
				</div>
				<a class="carousel-control-prev" href="#carouselExampleIndicators3" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleIndicators3" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>

			<div class="content-center">
				<h2>Correas que van a tu estilo con <b>Trend Stoore.</b> </h2>
			</div>
			<div id="carouselExampleIndicators4" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner">
					<div class="carousel-item active">
						<p>Correas Falcon</p>
						<img class="d-block w-100" src="../img/correas2.jpg" alt="First slide">
						
						<div class="raiting">
							<ul class="list-inline">
								<li class="list-inline-item"><ion-icon name="star"></ion-icon></li>
								<li class="list-inline-item"><ion-icon  name="star"></ion-icon></li>
								<li class="list-inline-item"><ion-icon  name="star"></ion-icon></li>
								<li class="list-inline-item"><ion-icon  name="star"></ion-icon></li>
								<li class="list-inline-item"><ion-icon  name="star"></ion-icon></li>
							</ul>
						</div>
						 
					</div>
					<div class="carousel-item">
						<p>Correas PRINCESS</p>
						<img class="d-block w-100" src="../img/correas3.jpg" alt="First slide">

						<div class="raiting">
							<ul class="list-inline">
								<li class="list-inline-item"><ion-icon name="star"></ion-icon></li>
								<li class="list-inline-item"><ion-icon  name="star"></ion-icon></li>
								<li class="list-inline-item"><ion-icon  name="star"></ion-icon></li>
								<li class="list-inline-item"><ion-icon  name="star"></ion-icon></li>
								<li class="list-inline-item"><ion-icon  name="star"></ion-icon></li>
							</ul>
						</div>
					</div>
					<div class="carousel-item">
						
						<p>Correas GUCCI</p>
						<img class="d-block w-100" src="../img/corrreas.jpg" alt="First slide">

						<div class="raiting">
							<ul class="list-inline">
								<li class="list-inline-item"><ion-icon name="star"></ion-icon></li>
								<li class="list-inline-item"><ion-icon  name="star"></ion-icon></li>
								<li class="list-inline-item"><ion-icon  name="star"></ion-icon></li>
								<li class="list-inline-item"><ion-icon  name="star"></ion-icon></li>
								<li class="list-inline-item"><ion-icon  name="star"></ion-icon></li>
							</ul>
						</div>
					</div>
					
				</div>
				<a class="carousel-control-prev" href="#carouselExampleIndicators4" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleIndicators4" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>


			<div class="content-center">
				<h2>Polos top y enterizos que van con tu estilo en <b>Trend Stoore.</b> </h2>
			</div>
			<div id="carouselExampleIndicators5" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner">
					<div class="carousel-item active">
						<p>Polos Top</p>
						<img class="d-block w-100" src="../img/mujer.jpg" alt="First slide">
						
						<div class="raiting">
							<ul class="list-inline">
								<li class="list-inline-item"><ion-icon name="star"></ion-icon></li>
								<li class="list-inline-item"><ion-icon  name="star"></ion-icon></li>
								<li class="list-inline-item"><ion-icon  name="star"></ion-icon></li>
								<li class="list-inline-item"><ion-icon  name="star"></ion-icon></li>
								<li class="list-inline-item"><ion-icon  name="star"></ion-icon></li>
							</ul>
						</div>
						 
					</div>
					<div class="carousel-item">
						<p>Polos Rose con estilos</p>
						<img class="d-block w-100" src="../img/mujer2.jpg" alt="First slide">

						<div class="raiting">
							<ul class="list-inline">
								<li class="list-inline-item"><ion-icon name="star"></ion-icon></li>
								<li class="list-inline-item"><ion-icon  name="star"></ion-icon></li>
								<li class="list-inline-item"><ion-icon  name="star"></ion-icon></li>
								<li class="list-inline-item"><ion-icon  name="star"></ion-icon></li>
								<li class="list-inline-item"><ion-icon  name="star"></ion-icon></li>
							</ul>
						</div>
					</div>
					<div class="carousel-item">
						
						<p>Enterizos veraneros</p>
						<img class="d-block w-100" src="../img/mujer4.jpg" alt="First slide">

						<div class="raiting">
							<ul class="list-inline">
								<li class="list-inline-item"><ion-icon name="star"></ion-icon></li>
								<li class="list-inline-item"><ion-icon  name="star"></ion-icon></li>
								<li class="list-inline-item"><ion-icon  name="star"></ion-icon></li>
								<li class="list-inline-item"><ion-icon  name="star"></ion-icon></li>
								<li class="list-inline-item"><ion-icon  name="star"></ion-icon></li>
							</ul>
						</div>
					</div>
					
				</div>
				<a class="carousel-control-prev" href="#carouselExampleIndicators5" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleIndicators5" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div>		
	</section>

	<section id="footer" class="bg-dark">
		<div class="container">
		  <img class="img-responsive " src="../img/logo2.png" width="100" height="100" class="d-inline-block align-top" alt="">
		  <ul class="list-inline">
		  		<li class="list-inline-item footer-menu"><a href="welcome.php">Inicio</a></li>
				<li class="list-inline-item footer-menu"><a href="about_c.php">Nosotros</a></li>
				<li class="list-inline-item footer-menu"><a href="rdama_c.php">Ropas</a></li>
				<li class="list-inline-item footer-menu"><a href="tendency.php">Tendencias</a></li>
				<li class="list-inline-item footer-menu"><a href="sale.php">Descuentos</a></li>
				<li class="list-inline-item footer-menu"><a href="contacto.php">Contactanos</a></li>
		  </ul>
		  <small>@2021 Todos los derechos reservados.</small>
		</div>
	</section>
	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
		integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
		crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
		integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
		crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
		integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
		crossorigin="anonymous"></script>
</body>

</html>
<?php } ?>