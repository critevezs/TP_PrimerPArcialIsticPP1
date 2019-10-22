<?php
	session_start();

	$usuarioIngresado = $_GET['usuario'];
	$claveIngresada = $_GET['contraseña'];
	
	$booUsuario = 0;
	$booPassword = 0;

	if (empty($usuarioIngresado) || empty($claveIngresada)) 
	{
		header("Location: ../paginas/login.php?error=camposvacios");
		exit();
	}
	else
	{
		$archivo = fopen("../archivos/registro.txt", "r") or die("Imposible arbrir el archivo");
	
		while(!feof($archivo)) 
		{
			$objeto = json_decode(fgets($archivo));
			if ($objeto->nombre == $usuarioIngresado) 
			{	
				$booUsuario = 1;
				if ($objeto->contraseña == $claveIngresada)
				{
				    

					fclose($archivo);
					$_SESSION['usuario']=$objeto->nombre;
					$_SESSION['perfil']=$objeto->perfil;

					header("Location: ../paginas/login.php?exito=signup");
					exit();
				}			
			}
		 	
		}	
		if ($booUsuario == 0) 
		{
			header("Location: ../paginas/no.php");
			exit();
		}
			
		fclose($archivo);
	}	
	
?>