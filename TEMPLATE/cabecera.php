<?php 
	$url_base="http://localhost/PRIMER EXAMEN PRACTICO DE INF-324/PREGUNTA3/";
?>

<!doctype html>
<html lang="en">

<head>
	<title>Facultad de Ciencias Puras y Naturales</title>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS v5.2.1 -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
	<header>
		<!-- place navbar here -->
		<nav class="navbar navbar-expand navbar-dark bg-success">
			
		
			<ul class="nav navbar-nav me-auto">
				<li class="nav-item">
					<a class="navbar-brand" href="<?php echo $url_base; ?>index.php">
						<img src="<?php echo $url_base; ?>IMAGENES/logo_2_fcpn.png" alt="" width="50px">
						FCPN
					</a>
				</li>
			</ul>

			<ul class="nav navbar-nav mx-auto">

					<li class="nav-item">
						<a class="nav-link" href="<?php echo $url_base; ?>INFORMATICA/index.php">INFORMÁTICA</a>
					</li>

					<li class="nav-item">
						<a class="nav-link" href="<?php echo $url_base; ?>BIOLOGIA/index.php">BIOLOGÍA</a>
					</li>

					<li class="nav-item">
						<a class="nav-link" href="<?php echo $url_base; ?>CS. QUIMICAS/index.php">CS. QUÍMICAS</a>
					</li>

					<li class="nav-item">
						<a class="nav-link" href="<?php echo $url_base; ?>ESTADISTICA/index.php">ESTADÍSTICA</a>
					</li>
					
					<li class="nav-item">
						<a class="nav-link" href="<?php echo $url_base; ?>FISICA/index.php">FÍSICA</a>
					</li>

					<li class="nav-item">
						<a class="nav-link" href="<?php echo $url_base; ?>MATEMATICA/index.php">MATEMÁTICA</a>
					</li>

					<li class="nav-item">
						<a class="nav-link" href="<?php echo $url_base; ?>logout.php">CERRAR SESION</a>
					</li>
						
			</ul>

			<ul class="nav navbar-nav ms-auto">
				<li class="nav-item">
					<div class="text-center col-lg-6  d-flex  justify-content-center align-items-center">
						<?php echo "Bienvenido: " . $_SESSION['usuario']; ?>
					</div>
				</li>
			</ul>

		</nav>
	</header>
	<main>
		<div class="container">
			<br>
			<div class="row">