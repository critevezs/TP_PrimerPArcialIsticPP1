<?php
include 'accesoadatos.php';


//$miObjeto = new stdClass();
$id = $_GET['hacer'];
$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
$select="DELETE FROM `vehiculosfacturados` WHERE id=$id";
$consulta =$objetoAccesoDato->RetornarConsulta($select);
$consulta->execute();


?>