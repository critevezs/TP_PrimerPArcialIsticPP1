<?php

$nombreUsuario = $_GET['nombre'];
$contraseñaUsuario = $_GET['contraseña'];


$archivo = fopen ('registro.txt','r');
while(!feof ($archivo))
{
	$objeto = json_decode(fgets($archivo));

    if ($objeto->nombre == $nombreUsuario) 
    {
        
    if ($objeto->contraseña == $contraseñaUsuario)
    {
    header("Location: ok.php");
	fclose($archivo);
	}

    }

	else
    {
    	header("Location: no.php");
		fclose($archivo);
		
    }
{
fclose($archivo);
?>