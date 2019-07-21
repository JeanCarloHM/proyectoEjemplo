<?php
function conection()
{
		$conexion=mysql_connect("127.0.0.1","root","root")
        or die ("problema de conexion");
        mysql_select_db("almacen_electrodomesticos",$conexion)
        or die ("problema al seleccionar base de datos");								
				
return $conexion ;				
}				
?>
