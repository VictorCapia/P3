<?php
	
  session_start();
  if (!isset($_SESSION['usuario'])) {
    header('location: ./login.php');
  }
  include('../TEMPLATE/cabecera.php');

?>

<!-- CARRERA DE MATEMÁTICA -->

<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
	<div class="carousel-indicators">
		<button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
		<button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
		<button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
	</div>
	
	<div class="carousel-inner">

		<div class="carousel-item active">
			<img src="../IMAGENES/mat-1.png" alt="" width="100%" height="500px">
			<div class="container">
				<div class="carousel-caption text-start">
					<h1>Carrera de Matemática</h1>
					<p>Excelencia en la Formación Profesional</p>
				</div>
			</div>
		</div>
		
		<div class="carousel-item">
			<img src="../IMAGENES/mat-2.png" alt="" width="100%" height="500px">
			<div class="container">
				<div class="carousel-caption text-start">
					<h1>Carrera de Matemática</h1>
					<p>Excelencia en la Formación Profesional</p>
				</div>
			</div>
		</div>
		
		<div class="carousel-item">
			<img src="../IMAGENES/mat-3.png" alt="" width="100%" height="500px">
			<div class="container">
				<div class="carousel-caption text-start">
					<h1>Carrera de Matemática</h1>
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
        <h2 class="featurette-heading">CARRERA DE MATEMÁTICA</h2>
		
		<h4><span class="text-muted">MISIÓN</span></h4>
		<p class="lead">
		La Carrera de Matemática de la UMSA, posee un nivel académico de excelencia, forma profesionales e investigadores, comprometidos con la sociedad y sus necesidades; orientados a la creación de conocimientos mediante los enfoques de la Matemática pura y aplicada, que respondan a los retos científicos y tecnológicos de la sociedad, enfatizando en la formación integral orientada al desarrollo y la creación de conocimientos matemáticos en las áreas de la Matemática Pura y Aplicada, para lograr la transformación del país con responsabilidad social y contribuyendo a su desarrollo sostenible.
		</p>
		
		<h4><span class="text-muted">VISIÓN</span></h4>
		<p class="lead">
		Ser la Carrera líder a nivel nacional que forme egresados competitivos o cualificados con calidad académica, para ser aceptados en el mercado laboral; con docentes de excelente nivel académico, planes y programas de estudio vigentes diseñados bajo estándares internacionales, para desarrollar aptitudes y habilidades matemáticas aportando al progreso científico y tecnológico en el marco de la ética profesional, la superación individual y colectiva para el progreso educativo del país.
		</P>
		
		<h4><span class="text-muted">OBJETIVOS</span></h4>
		<p class="lead">
			<ul>
				<li>Tomar la responsabilidad del desarrollo de la ciencia matemática en el país, dentro los cánones universales intrínsecos de esta ciencia.</li>
				<li>Desarrollar capacidades y habilidades de análisis y pensamiento lógico y riguroso a través de la matemática.</li>
				<li>Adquirir la capacidad de utilizar conocimientos matemáticos teóricos y prácticos, en la definición de problemas y la búsqueda de soluciones en contextos académicos o empresariales.</li>
				<li>Preparar para posteriores estudios especializados, en disciplinas propias de la Matemática o de cualquier ciencia que requiera conocimientos matemáticos.</li>				
			</ul>
		</p>
		
		</div>
		<div class="col-md-5">
			<img src="../IMAGENES/logo_matematica.png" alt="" width="400px">
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