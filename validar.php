<?php

if(!empty($_POST['usuario']) && !empty($_POST['password'])){
	
	require_once "conexion.php";
	
	$usuario = $_POST['usuario'];
	$password = $_POST['password'];
	
	$query = mysqli_query($con, "SELECT * FROM ROL_USUARIO WHERE usuario='$usuario' and password='$password'");
	$user = mysqli_num_rows($query);
	
	if($user > 0){
		$resultado=mysqli_fetch_array($query);
		session_start();
		$_SESSION['estaActivo']=true;
		$_SESSION['usuario']=$resultado['usuario'];
		$_SESSION['ci']=$resultado['ci'];
		header('location: index.php');
		}else{
			header('location: login.php?error=true');
		}
}else{
	header('location: login.php?error=true');
}

?>