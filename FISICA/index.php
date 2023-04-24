<?php
	
  session_start();

	if (!isset($_SESSION['usuario'])) {
    header('location: ./login.php');
  }
  include('../TEMPLATE/cabecera.php');

?>

<!-- CARRERA DE FÍSICA -->

<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
	<div class="carousel-indicators">
		<button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
		<button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
		<button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
	</div>
	
	<div class="carousel-inner">

		<div class="carousel-item active">
			<img src="../IMAGENES/fis-1.png" alt="" width="100%" height="500px">
			<div class="container">
				<div class="carousel-caption text-start">
					<h1>Carrera de Física</h1>
					<p>Excelencia en la Formación Profesional</p>
				</div>
			</div>
		</div>
		
		<div class="carousel-item">
			<img src="../IMAGENES/fis-2.png" alt="" width="100%" height="500px">
			<div class="container">
				<div class="carousel-caption text-start">
					<h1>Carrera de Física</h1>
					<p>Excelencia en la Formación Profesional</p>
				</div>
			</div>
		</div>
		
		<div class="carousel-item">
			<img src="../IMAGENES/fis-3.png" alt="" width="100%" height="500px">
			<div class="container">
				<div class="carousel-caption text-start">
					<h1>Carrera de Física</h1>
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
        <h2 class="featurette-heading">CARRERA DE FÍSICA</h2>
		
		<h4><span class="text-muted">MISIÓN</span></h4>
		<p class="lead">
		La Carrera de Física comparte sustancialmente la misión, visión y objetivos de la Universidad Boliviana, los de la UMSA y los de la FCPN. No obstante, tiene como misión propia y fundamental la de formar y entrenar recursos humanos de alto nivel, especializados en la investigación científica, la docencia y la aplicación de conocimientos en todas las áreas de la física. Crear y difundir conocimiento en física o relacionado con la física, Comando y contribuyendo para la formación de profesionales críticos, independientes y capacitados tanto a nivel de pregrado como de posgrado. Estos profesionales deberán ser capaces de contribuir al desarrollo científico y tecnológico, como consecuencia al mejoramiento de las condiciones sociales y económicas del país.
		</p>
		
		<h4><span class="text-muted">VISIÓN</span></h4>
		<p class="lead">
		La visión de la Carrera es la de constituirse en un centro de excelencia en Física con capacidades plenas para ingresar competitivamente en el ámbito científico a nivel regional y mundial.
		</P>
		
		<h4><span class="text-muted">OBJETIVOS</span></h4>
		<p class="lead">
			<ul>
				<li>Constituirse en un centro de excelencia en el ámbito de su particular disciplina.</li>
				<li>Formar investigadores profesionales en Física con sólidos conocimientos teóricos y experimentales en los fundamentos de las principales áreas de esta ciencia.</li>
				<li>Desarrollar docencia universitaria, investigación científica, interacción social y ofrecer servicios académicos y técnicos para posibilitar y contribuir al desarrollo tecnológico y al incremento de la cultura científica de la región y del país.</li>
				<li>Ofrecer un plan de estudios racional, integral y flexible, capaz de incorporar progresivamente niveles de posgrado disciplinarios.</li>
			</ul>
		</p>
		
		</div>
		<div class="col-md-5">
			<img src="../IMAGENES/logo_fisica.png" alt="" width="400px">
		</div>
	</div>
	<hr class="featurette-divider" />
	<!------------------->
	
	<!-- Three columns of text below the carousel -->
	<div class="row">
		<div class="col-lg-4 ">
			<img src="../IMAGENES/logo_informatica.jpeg" alt="">
			<h2>INFORMÁTICA</h2>
				<p>
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
				<p>
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
				<p>
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
				<p>
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
				<p>
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
				<p>
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