<?php

$ar=fopen("ArchivoDeDanny.txt","a") or die("Error al Crear el Archivo"); 

$asu= $_REQUEST['asunto'];
$des= $_REQUEST['descripcion'];

fwrite($ar,$asu . PHP_EOL);
fwrite($ar,$des . PHP_EOL);
echo"Se creo el archivo Correctamente";

?>