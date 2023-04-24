<?php
	
  session_start();

	if (!isset($_SESSION['usuario'])) {
    header('location: ./login.php');
  }
  include('../TEMPLATE/cabecera.php');

?>

<!-- CARRERA DE INFORMATICA -->

<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
	<div class="carousel-indicators">
		<button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
		<button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
		<button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
	</div>
	
	<div class="carousel-inner">
		
		<div class="carousel-item active">
			<img src="../IMAGENES/inf-1.png" alt="" width="100%" height="500px">
			<div class="container">
				<div class="carousel-caption text-start">
					<h1>Carrera de Informática</h1>
					<p>Excelencia en la Formación Profesional</p>
				</div>
			</div>
		</div>
		
		<div class="carousel-item">
			<img src="../IMAGENES/inf-2.png" alt="" width="100%" height="500px">
			<div class="container">
				<div class="carousel-caption text-start">
					<h1>Carrera de Informática</h1>
					<p>Excelencia en la Formación Profesional</p>
				</div>
			</div>
		</div>
		
		<div class="carousel-item">
			<img src="../IMAGENES/inf-3.png" alt="" width="100%" height="500px">
        <div class="container">
          <div class="carousel-caption text-start">
            <h1>Carrera de Informática</h1>
            <p>Excelencia en la Formación Profesional
            </p>
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
        <h2 class="featurette-heading">CARRERA DE INFORMÁTICA</h2>
        
				<h4><span class="text-muted">MISIÓN</span>
        </h4>
        <p class="lead">
        Desarrollar procesos académicos de formación, profesionalización e investigación en ciencia y tecnología informática de modo que los profesionales informáticos de la Carrera de Informática de la UMSA serán profesionales competitivos, éticos y responsables con altos niveles de conocimiento científico y tecnológico en informática, acorde con los requerimientos actuales y futuros tanto a nivel regional, nacional e internacional.
        </p>
				
				<h4><span class="text-muted">VISIÓN</span>
        </h4>
        <p class="lead">
        Ser la Carrera líder a nivel Nacional y constituirse con un referente nacional de alto nivel.
				<ul>
					<li>Por la formación de profesionales informáticos altamente competitivos tanto en ciencia y tecnología informática lográndose de ese modo su pronta incorporación al mercado laboral.</li>
					<li>Por los aportes a la región producto de los trabajos de investigación con impacto social.</li>
					<li>Por contar con docentes de excelente nivel académico.</li>
					<li>Por la vigencia de un plan de estudios que promueva el desarrollo de actitudes, habilidades y destrezas tanto en la ciencia y las tecnologías informáticas.</li>
				</ul>
			</p>
			<h4><span class="text-muted">OBJETIVOS</span></h4>
        <p class="lead">
					Formar profesionales responsables, éticos y altamente calificados en la ciencia y tecnología del área informática, para actuar en correspondencia con la sociedad.
					<ul>
						<li>Fortalecer el Proceso Académico.</li>
						<li>Desarrollar y difundir la investigación científica y tecnológica.</li>
						<li>Desarrollar actividades de interacción social, local y regional.</li>
					</ul>
        </p>

      </div>
      <div class="col-md-5">
        <img src="../IMAGENES/logo_informatica.jpeg" alt="" width="400px">
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