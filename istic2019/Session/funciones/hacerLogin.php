<?php
    session_start();
    include 'accesoadatos.php';
    
    

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
		$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
			$consulta =$objetoAccesoDato->RetornarConsulta("select nombre  , clave  from usuario");
			$consulta->execute();			
			$datos= $consulta->fetchAll(PDO::FETCH_ASSOC);
		//$archivo = fopen("../archivos/registro.txt", "r") or die("Imposible arbrir el archivo");
	
		//while(!feof($archivo)) 
		foreach ($datos as $usuario) 
		{
			//$objeto = json_decode(fgets($archivo));
			if ($usuario["nombre"] == $usuarioIngresado) 
			{	
				$booUsuario = 1;
				if ($usuario["clave"] == $claveIngresada)
				{
				    $booPassword= 1;

					//fclose($archivo);
					$_SESSION['usuario']=$usuario["nombre"];
					$_SESSION['perfil']=$objeto->perfil;
					//$_COOKIE['cookiename']=$usuarioIngresado;
					setcookie("cookie", $_SESSION['usuario']);

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
		if ($booPassword == 0)
		{
            header("Location: ../paginas/no.php");
			exit();
		}
			
		//fclose($archivo);
		
	}	
	
	
?>