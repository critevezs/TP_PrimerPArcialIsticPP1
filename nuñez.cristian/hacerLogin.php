<?php

$nombreUsuario = $_GET['nombre'];
$contraseñaUsuario = $_GET['contraseña'];
$bandera=0;

$archivo = fopen ('registro.txt','r');
while(!feof ($archivo))
{
	$objeto = json_decode(fgets($archivo));

    if ($objeto->nombre == $nombreUsuario) 
    {
    if ($objeto->contraseña == $contraseñaUsuario)
    {
        $bandera=0;
        
	}
    }
}


	
    if ($bandera==0)
    {
   
        header("Location: ok.php");
		fclose($archivo);
		exit();
	}
	else
    {
    	header("Location: no.php");
		fclose($archivo);
		exit();
    }
    


exit();
fclose($archivo);
?>