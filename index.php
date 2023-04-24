<?php
	
  session_start();

	if (!isset($_SESSION['usuario'])) {
    header('location: ./login.php');
  }
  
  include('TEMPLATE/cabecera.php');

?>

	<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
		  <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
		  <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
		  <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="4" aria-label="Slide 5"></button>
		  <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="5" aria-label="Slide 6"></button>
    </div>

    <div class="carousel-inner">
      
      <div class="carousel-item active">
        <img src="./IMAGENES/carousel-1.jpg" alt="" width="100%" height="500px">
        <div class="container">
          <div class="carousel-caption text-start">
            <h1>INFORMÁTICA</h1>
            <p>Excelencia en la Formación Profesional</p>
            <p><a class="btn btn-lg btn-outline-light" href="<?php echo $url_base;?>INFORMATICA/index.php">Leer más</a></p>
          </div>
        </div>
      </div>
      
      <div class="carousel-item">
        <img src="./IMAGENES/carousel-2.jpg" alt="" width="100%" height="500px">
        <div class="container">
          <div class="carousel-caption text-start">
            <h1>BIOLOGÍA</h1>
            <p>Excelencia en la Formación Profesional</p>
            <p><a class="btn btn-lg btn-outline-primary" href="<?php echo $url_base;?>BIOLOGIA/index.php">Leer más</a></p>
          </div>
        </div>
      </div>
			
      <div class="carousel-item">
        <img src="./IMAGENES/carousel-3.jpg" alt="" width="100%" height="500px">
        <div class="container">
          <div class="carousel-caption text-start">
            <h1>CS. QUÍMICAS</h1>
            <p>Excelencia en la Formación Profesional</p>
            <p><a class="btn btn-lg btn-outline-warning" href="<?php echo $url_base;?>CS. QUIMICAS/index.php">Leer más</a></p>
          </div>
        </div>
      </div>
			
      <div class="carousel-item">
        <img src="./IMAGENES/carousel-7.jpg" alt="" width="100%" height="500px">
        <div class="container">
          <div class="carousel-caption text-start">
            <h1>ESTADÍSTICA</h1>
            <p>Excelencia en la Formación Profesional</p>
            <p><a class="btn btn-lg btn-outline-warning" href="<?php echo $url_base;?>ESTADISTICA/index.php">Leer más</a></p>
          </div>
        </div>
      </div>
      
      <div class="carousel-item">
        <img src="./IMAGENES/carousel-5.png" alt="" width="100%" height="500px">
        <div class="container">
          <div class="carousel-caption text-start">
            <h1>FÍSICA</h1>
            <p>Excelencia en la Formación Profesional</p>
            <p><a class="btn btn-lg btn-outline-warning" href="<?php echo $url_base;?>FISICA/index.php">Leer más</a></p>
          </div>
        </div>
      </div>
      
			<div class="carousel-item">
        <img src="./IMAGENES/carousel-6.png" alt="" width="100%" height="500px">
        <div class="container">
          <div class="carousel-caption text-start">
            <h1>MATEMÁTICA</h1>
            <p>Excelencia en la Formación Profesional</p>
            <p><a class="btn btn-lg btn-outline-danger" href="<?php echo $url_base;?>MATEMATICA/index.php">Leer más</a></p>
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
	<br><br>
	<!-- Wrap the rest of the page in another container to center all the content. -->
  <div class="container marketing text-justify">
    <!-- Three columns of text below the carousel -->
    <div class="row">
      <div class="col-lg-4 text-justify">
				<img src="./IMAGENES/logo_informatica.jpeg" alt="">
				<h2>INFORMÁTICA</h2>
				<p>
					Ser la unidad académica líder a nivel nacional y un referente de alto nivel en la formación de profesionales del área de la Informática.
				</p>
				<p>
					<a class="btn btn-outline-primary" href="<?php echo $url_base; ?>INFORMATICA/index.php">IR &raquo;</a>
				</p>
			</div>
			<!-- /.col-lg-4 -->
			<div class="col-lg-4 text-justify">
				<img src="./IMAGENES/logo_biologia.jpg" alt="">
				<h2>BIOLOGÍA</h2>
				<p>
				La Carrera de Biología de la UMSA, cuyos contenidos académicos responden a la demanda social, acreditada nacionalmente, y ligada internacionalmente como líder en la generación de conocimientos científicos y formación de recursos humanos de calidad.
				</p>
				<p>
					<a class="btn btn-outline-primary" href="<?php echo $url_base; ?>BIOLOGIA/index.php">IR &raquo;</a>
				</p>
			</div>
			<!-- /.col-lg-4 -->
			<div class="col-lg-4 text-justify">
				<img src="./IMAGENES/logo_cs_quimicas.png" alt="">
				<h2>CS. QUÍMICAS</h2>
				<p>
				La Carrera de Ciencias Químicas es un referente en la formación de profesionales químicos identificados con su pueblo, con capacidad para encarar problemas diversos referentes a la Química con autoridad científica y suficiente ética.
				</p>
				<p>
					<a class="btn btn-outline-primary" href="<?php echo $url_base; ?>CS. QUIMICAS/index.php">IR &raquo;</a>
				</p>
			</div>
		</div>
		
		<!-- /.row -->
		<div class="row">
			<div class="col-lg-4 text-justify">
				<img src="./IMAGENES/logo_estadistica.png" alt="">
				<h2>ESTADÍSTICA</h2>
				<p>
				La Carrera de Estadística será una institución líder en la ciencia de la estadística, dentro del ámbito académico, humanístico, investigativo, científico, tecnológico y práctico, con participación activa en la opinión pública y académica en el desarrollo y transformación a nivel nacional e internacional.
				</p>
				<p>
					<a class="btn btn-outline-primary" href="<?php echo $url_base; ?>ESTADISTICA/index.php">IR &raquo;</a>
				</p>
			</div>
			<!-- /.col-lg-4 -->
			<div class="col-lg-4 text-justify">
				<img src="./IMAGENES/logo_fisica.png" alt="" width="230px">
				<h2>FÍSICA</h2>
				<p>
				La visión de la Carrera es la de constituirse en un centro de excelencia en Física con capacidades plenas.
				</p>
				<p>
					<a class="btn btn-outline-primary" href="<?php echo $url_base; ?>FISICA/index.php">IR &raquo;</a>
				</p>
			</div>
			<!-- /.col-lg-4 -->
			<div class="col-lg-4 text-justify">
				<img src="./IMAGENES/logo_matematica.png" alt="">
				<h2>MATEMÁTICA</h2>
				<p>
				La Carrera de Matemática, formador de profesionales en Matemática y Matemática Aplicada a nivel Licenciatura y Postgrado.
				</p>
				<p>
					<a class="btn btn-outline-danger" href="<?php echo $url_base; ?>MATEMATICA/index.php">IR &raquo;</a>
				</p>
			</div>
			<!-- /.col-lg-4 -->
		</div>
		
		<!-- /.row -->
		
		<!-- START THE FEATURETTES -->
		<hr class="featurette-divider" />
		
		<div class="row featurette">
			<div class="col-md-7">
				<h2 class="featurette-heading">
					FACULTAD DE CIENCIAS PURAS Y NATURALES
				</h2>
				
				<h3>
					<span class="text-muted">UNIVERSIDAD MAYOR DE SAN ANDRÉS</span>
				</h3>
				<p class="lead">
					EL objetivo principal es la formación de profesionales de alta calidad, con conocimientos, destrezas y habilidades que hacen posible su inserción creativa en la sociedad, preparados para impulsar y promover la innovación científica y tecnológica.
				</p>
			</div>
			<div class="col-md-5">
				<img src="./IMAGENES/logo_1_fcpn.png" alt="" width="500px">
			</div>
		</div>
		
		<hr class="featurette-divider" />
		<!------------------->
	</div>
	<!-- /.container -->

<?php include('TEMPLATE/pie.php'); ?>