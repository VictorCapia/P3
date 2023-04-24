<?php
	
  session_start();

	if (!isset($_SESSION['usuario'])) {
    header('location: ./login.php');
  }
  include('../TEMPLATE/cabecera.php');

?>

<!-- CARRERA DE BIOLOGÍA -->

<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
	<div class="carousel-indicators">
		<button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
		<button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
		<button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
	</div>
	
	<div class="carousel-inner">

		<div class="carousel-item active">
			<img src="../IMAGENES/bio-1.jpg" alt="" width="100%" height="500px">
			<div class="container">
				<div class="carousel-caption text-start">
					<h1>Carrera de Biología</h1>
					<p>Excelencia en la Formación Profesional</p>
				</div>
			</div>
		</div>
		
		<div class="carousel-item">
			<img src="../IMAGENES/bio-2.jpg" alt="" width="100%" height="500px">
			<div class="container">
				<div class="carousel-caption text-start">
					<h1>Carrera de Biología</h1>
					<p>Excelencia en la Formación Profesional</p>
				</div>
			</div>
		</div>
		
		<div class="carousel-item">
			<img src="../IMAGENES/bio-3.jpg" alt="" width="100%" height="500px">
			<div class="container">
				<div class="carousel-caption text-start">
					<h1>Carrera de Biología</h1>
					<p>Excelencia en la Formación Profesional</p>
				</div>
			</div>
		</div>

	</div>
	
	<button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
	
	<button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>

  </div>

  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing">

    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider" />

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">CARRERA DE BIOLOGÍA</h2>
		
		<h4><span class="text-muted">MISIÓN</span></h4>
		<p class="lead text-justify">
		La Carrera de Biología de la Universidad Mayor de San Andrés, es líder en la generación y transmisión de conocimientos científicos y formación de recursos humanos altamente calificados y competitivos en el campo de las ciencias biológicas, con énfasis en la planificación y gestión de la conservación y aprovechamiento sostenible de los recursos de la biodiversidad y en la resolución de los problemas ambientales, respondiendo a su alto compromiso con el desarrollo económico-social sostenible de la región y del país.
		</p>
		
		<h4><span class="text-muted">VISIÓN</span></h4>
		<p class="lead text-justify">
		La Carrera de Biología de la Universidad Mayor de San Andrés es una institución de educación superior de gran dinámica y alta calidad académica y científica, cuyos contenidos académicos responden a la demanda social, acreditada nacionalmente, y ligada internacionalmente como líder en la generación de conocimientos científicos y formación de recursos humanos de calidad.
		</P>
		
		<h4><span class="text-muted">OBJETIVOS</span></h4>
		<p class="lead text-justify">
			<ul>
				<li>Formar profesionales idóneos en todas las ramas de las ciencias biológicas, que respondan a las necesidades de transformación y de desarrollo local y nacional, con conciencia crítica y con capacidad de manejo de los instrumentos teórico-metodológicos y prácticos.</li>
				<li>Desarrollar y difundir programas de investigación en las áreas de las ciencias biológicas, particularmente en aquellas de interés de la sociedad, como ecología. Aprovechamiento sostenible de la biodiversidad, solución de problemas ambientales, biología molecular y biotecnología.</li>
				<li>Participar en el análisis de problemas que afectan al medio ambiente proponiendo soluciones viables en base a la investigación y experiencia.</li>
				<li>Mejorar permanentemente, en concordancia al avance científico, la calidad de la docencia e investigación a través de la actualización yo perfeccionamiento de su personal docente.</li>
				<li>Participar eficientemente en proyectos multi e interdisciplinarios en el campo de la competencia.</li>
				<li>Fortalecer vínculos con universidades del interior y exterior.</li>
			</ul>
		</p>
		
		</div>
		<div class="col-md-5">
			<img src="../IMAGENES/logo_biologia.jpg" alt="" width="400px">
		</div>
	</div>
	<hr class="featurette-divider" />
	<!------------------->
	
	<!-- Three columns of text below the carousel -->
	<div class="row">
		<div class="col-lg-4 ">
			<img src="../IMAGENES/logo_informatica.jpeg" alt="">
			<h2>INFORMÁTICA</h2>
				<p class="text-justify">
					Ser la unidad académica líder a nivel nacional y un referente de alto nivel en la formación de profesionales del área de la Informática.
				</p>
				<p>
					<a class="btn btn-secondary" href="<?php echo $url_base; ?>INFORMATICA/index.php">IR &raquo;</a>
				</p>
			</div>
			<!-- /.col-lg-4 -->
			<div class="col-lg-4">
				<img src="../IMAGENES/logo_biologia.jpg" alt="">
				<h2>BIOLOGÍA</h2>
				<p class="text-justify">
				La Carrera de Biología de la UMSA, cuyos contenidos académicos responden a la demanda social, acreditada nacionalmente, y ligada internacionalmente como líder en la generación de conocimientos científicos y formación de recursos humanos de calidad.
				</p>
				<p>
					<a class="btn btn-secondary" href="<?php echo $url_base; ?>BIOLOGIA/index.php">IR &raquo;</a>
				</p>
			</div>
			<!-- /.col-lg-4 -->
			<div class="col-lg-4">
				<img src="../IMAGENES/logo_cs_quimicas.png" alt="">
				<h2>CS. QUÍMICAS</h2>
				<p class="text-justify">
				La Carrera de Ciencias Químicas es un referente en la formación de profesionales químicos identificados con su pueblo, con capacidad para encarar problemas diversos referentes a la Química con autoridad científica y suficiente ética.
				</p>
				<p>
					<a class="btn btn-secondary" href="<?php echo $url_base; ?>CS. QUIMICAS/index.php">IR &raquo;</a>
				</p>
			</div>
		</div>
		
		<!-- /.row -->
		<div class="row">
			<div class="col-lg-4">
				<img src="../IMAGENES/logo_estadistica.png" alt="">
				<h2>ESTADÍSTICA</h2>
				<p class="text-justify">
				La Carrera de Estadística será una institución líder en la ciencia de la estadística, dentro del ámbito académico, humanístico, investigativo, científico, tecnológico y práctico, con participación activa en la opinión pública y académica en el desarrollo y transformación a nivel nacional e internacional.
				</p>
				<p>
					<a class="btn btn-secondary" href="<?php echo $url_base; ?>ESTADISTICA/index.php">IR &raquo;</a>
				</p>
			</div>
			<!-- /.col-lg-4 -->
			<div class="col-lg-4">
				<img src="../IMAGENES/logo_fisica.png" alt="" width="230px">
				<h2>FÍSICA</h2>
				<p class="text-justify">
					La visión de la Carrera es la de constituirse en un centro de excelencia en Física con capacidades plenas.
				</p>
				<p>
					<a class="btn btn-secondary" href="<?php echo $url_base; ?>FISICA/index.php">IR &raquo;</a>
				</p>
			</div>
			<!-- /.col-lg-4 -->
			<div class="col-lg-4">
				<img src="../IMAGENES/logo_matematica.png" alt="">
				<h2>MATEMÁTICA</h2>
				<p class="text-justify">
					La Carrera de Matemática, formador de profesionales en Matemática y Matemática Aplicada a nivel Licenciatura y Postgrado.
				</p>
				<p>
					<a class="btn btn-secondary" href="<?php echo $url_base; ?>MATEMATICA/index.php">IR &raquo;</a>
				</p>
			</div>
			<!-- /.col-lg-4 -->
		</div>
    <!-- /.row -->
    <hr class="featurette-divider" />

  </div>
  <!-- /.container -->
<?php include("../TEMPLATE/pie.php"); ?>