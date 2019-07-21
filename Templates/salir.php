<?php

session_start();

include("../modelo_clases/conexion.php"); // Aqui me conecto a BD (funtion connectar)

$link=conection();

session_unset();

session_destroy();

header ("location:Home.php"); 

?>
