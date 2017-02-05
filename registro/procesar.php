<?php
	require('includes/class.Conexion.php');
	$db = new Conexion();

	$modo = isset($_GET['modo']) ? $_GET['modo'] : 'default';

	switch ($modo) {
		//Caso Login implementandolo
		case 'login':
			if (isset($_POST['login'])) {
				if (!empty($_POST['user']) && !empty($_POST['passw'])) {
					include('includes/class.Acceso.php');
					$login = new Acceso($_POST['user'],$_POST['passw']);
					$login->Login();
				}else{
					header("Location: procesar.php?error=campos_vacios");
				}
			}else{
				header("Location: procesar.php");
			}
		break;
		
		default:
			if (isset($_GET['error']) and $_GET['error']=='datos_incorrectos') {
				session_start();
				$_SESSION['error'] = 'Error: Usuario o contraseña incorrectos';
				header("Location: index.php");
			}elseif (isset($_GET['error']) and $_GET['error']=='campos_vacios') {
				session_start();
				$_SESSION['error'] = 'Error: Debes llenar los campos';
				header("Location: index.php");
			}elseif (isset($_GET['error']) and $_GET['error']=='acceso') {
				session_start();
				$_SESSION['error'] = 'Error: La sesión a caducado o no has iniciado sesión';
				header("Location: index.php");
			}else{
				header("Location: index.php");
			}
		break;
	}
?>