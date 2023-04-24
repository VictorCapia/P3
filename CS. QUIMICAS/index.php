<?php
	
  session_start();

	if (!isset($_SESSION['usuario'])) {
    header('location: ./login.php');
  }
  include('../TEMPLATE/cabecera.php');

?>

<!-- CARRERA DE CS. QUIMICAS -->

<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
	<div class="carousel-indicators">
		<button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
		<button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
		<button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
	</div>
	
	<div class="carousel-inner">

		<div class="carousel-item active">
			<img src="../IMAGENES/qui-1.jpg" alt="" width="100%" height="500px">
			<div class="container">
				<div class="carousel-caption text-start">
					<h1>Carrera de Cs. Químicas</h1>
					<p>Excelencia en la Formación Profesional</p>
				</div>
			</div>
		</div>
		
		<div class="carousel-item">
			<img src="../IMAGENES/qui-2.jpg" alt="" width="100%" height="500px">
			<div class="container">
				<div class="carousel-caption text-start">
					<h1>Carrera de Cs. Químicas</h1>
					<p>Excelencia en la Formación Profesional</p>
				</div>
			</div>
		</div>
		
		<div class="carousel-item">
			<img src="../IMAGENES/qui-3.jpg" alt="" width="100%" height="500px">
			<div class="container">
				<div class="carousel-caption text-start">
					<h1>Carrera de Cs. Químicas</h1>
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
        <h2 class="featurette-heading">CARRERA DE CS. QUÍMICAS</h2>
		
		<h4><span class="text-muted">MISIÓN</span></h4>
		<p class="lead">
			La Carrera de Ciencias Químicas de la Universidad Mayor de San Andrés es una institución de educación superior pública y gratuita, que dentro del marco de la Autonomía y el cogobiemo, tiene la misión de formar recursos humanos en Ciencias Químicas de elevada calificación, competitividad profesional, creatividad, adaptación, con valores éticos, la suficiente conciencia social y vocación de servicio para responder a las necesidades de la población, al desarrollo local, regional y nacional.
		</p>
		
		<h4><span class="text-muted">VISIÓN</span></h4>
		<p class="lead">
			La Carrera de Ciencias Químicas es un referente en la formación de profesionales químicos identificados con su pueblo, con capacidad para encarar problemas diversos referentes a la Química con autoridad científica y suficiente ética. Desarrolla sus actividades académicas, de investigación e interacción social de acuerdo al contexto local, regional, nacional e internacional.
		</P>
		
		<h4><span class="text-muted">OBJETIVOS</span></h4>
		<p class="lead">
			<ul>
				<li>Difundir la Visión, Misión y Principios de la Carrera.</li>
				<li>Planificar, ejecutar evaluar el desarrollo institucional.</li>
				<li>Conformar y adecuar una estructura organizacional que responda a los requerimientos académicos de la institución y de la sociedad.</li>
				<li>Fortalecer servicios generales y actividades de formación integral orientadas al mejoramiento constante del bienestar de la comunidad de la Carrera.</li>
				<li>Responder a las necesidades del desarrollo nacional con ofertas académicas pertinentes y actualizadas, que garanticen una sólida formación profesional acorde a las demandas sociales.</li>
				<li>Fortalecer y adecuar la labor de investigación a los requerimientos nacionales y a las líneas de acción propuestas por la institución en conformidad a la misión de la Carrera.</li>
				<li>Desarrollar actividades de preservación y difusión de la cultura, servicios educativos y de transferencia de tecnología a la comunidad y promoción del desarrollo en sectores productivos.</li>
				<li>Preservar en la institución un ambiente donde prevalezcan valores culturales y éticos.</li>
				<li>Desarrollar un proceso de evaluación intensa que permita el mejoramiento continuo del desempeño de la Carrera, de manera que se pueda obtener una positiva valoración y reconocimiento por parte de la población boliviana y una acreditación académica a nivel internacional.</li>
				<li>Desarrollar la investigación básica y aplicada en Ciencias Químicas compatibilizando la libertad de investigación con los requerimientos del desarrollo nacional.</li>
				<li>Prestar servicios académicos a las Carreras de la UMSA y/o entidades de instituciones externas que requieran procesos enseñanza -aprendizaje teórico-práctica de las Ciencias Qumicas de numera adecuada y específica a sus necesidades.</li>
				<li>Desarrollar la Interacción Social promoviendo el desarrollo social y productivo de las personas, empresas y de la sociedad civil en general.</li>
			</ul>
		</p>
		
		</div>
		<div class="col-md-5">
			<img src="../IMAGENES/logo_cs_quimicas.png" alt="" width="400px">
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