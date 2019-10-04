<?php

$precio=5;
$Bandera=0; 
$patente2 = $_GET['patente'];



$archivo = fopen('vehiculos.txt', 'r');

while(!feof ($archivo))
{
	$objeto = json_decode(fgets($archivo));

    if ($objeto->patente == $patente2)
    {
        $Bandera=1;

    }
    	

}   


if ($Bandera==1)
{
    $horaSalida = mktime();

    $tiempo = $horaSalida - $objeto->horaIngreso;

    $cobrar = ($tiempo / 60) * $precio;
    

    
    $objetoFacturado->Vehiculo = $patente2;
    $objetoFacturado->fechaEntrada = $objeto->horaIngreso;
    $objetoFacturado->fechaSalida = $horaSalida;
    $objetoFacturado->importe = $cobrar;
    
    $archivo1 = fopen('facturados.txt', 'a');
    fwrite($archivo1, json_encode($objetoFacturado)."\n");
    fclose($archivo1);
    //fclose($archivo);
    header("Location: pagar.php? &cobrar=".$cobrar."&ingreso=".$objeto->horaIngreso."&salida=".$horaSalida."&patente=".$patente2);
    
}
else
{
    header("Location: no.php");
	
}
     



fclose($archivo);

?>






