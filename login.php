<!doctype html>
<html lang="en">

<head>
  <title>Login</title>
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
  </header>
  
	<main>
		<div class="container py-5 h-100 ">
			<div class="row d-flex justify-content-center align-items-center h-100">
				<div class="col-xl-10">
					<div class="card rounded text-black">
						<div class="row g-0 border border-secondary">
							<div class="col-lg-6 text-black">
								
								<?php if (isset($_GET['error']) && $_GET['error']=='true'): ?>
									<div class="alert alert-danger" role="alert">
										El usuario u contraseña no correctos!
									</div>
								<?php endif; ?>
								
								<div class="card-body  p-md-5 mx-md-4">
									<div class="text-center">
										<img src="./IMAGENES/logo_1_fcpn.png" style="width: 160px;" alt="logo"><br><br>
										<h4 class="mt-1 mb-5 pb-1">INICIAR SESIÓN</h4>
									</div>
									
									<form action="validar.php" method="POST">
										<div class="form-outline mb-4">
											<input type="text" id="form2Example11" class="form-control" placeholder="Usuario" name="usuario"/>
											<label class="form-label visually-hidden" for="form2Example11">Usuario</label>
										</div>
										
										<div class="form-outline mb-4">
											<input type="password" id="form2Example22" class="form-control" placeholder="Contraseña" name="password"/>
											<label class="form-label visually-hidden" for="form2Example22">Password</label>
										</div>
										
										<div class="text-center pt-1 mb-5 pb-1">
											<button class="btn btn-primary btn-block  mb-3" type="submit">INGRESAR</button>
										</div>
									</form>

								</div>
							</div>
							
							<div class="text-center col-lg-6  d-flex  justify-content-center align-items-center bg-light bg-gradient">
								<img src="./IMAGENES/LOGIN/login-10.jpg" alt="" width="100%" height="100%">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
  </main>
  
	<footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>