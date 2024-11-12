<?php 
/**
 * servidor : localhost
 * usuario : root
 * password :
 * el nombre de la base de datos : information
 * 
 */
$conexion = new mysqli("localhost","root","","information");


//--------------------------------------------------------------------------------------------------------
// sentencia de consulta de registros;
$consulta = $conexion->query("SELECT * FROM usuarios");
$consulta2 = $conexion->query("SELECT * FROM usuarios WHERE documento = 1040300478")->fetch_object();
 
 //var_dump($insert); // para verificar en localhost

 if($consulta2){
    echo "verdadero";
 }else{
    echo "falso";
 }
 echo "<br>";
 $insert = $conexion->query("INSERT INTO usuarios VALUES(null, 1040300478,'andres',3002123431)");

 // formula o ejmplo para consultar datos en la base de datos sql

//---------------------------------------------------------------------------------------------------------
 $registro = $consulta->fetch_object();

echo $registro->id."<br>";
echo $registro->documento."<br>";
echo $registro->nombres."<br>";
echo $registro->telefono;



 





