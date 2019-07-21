<html>
<head>
<style type="text/css">
<!--
#apDiv1 {
	position:absolute;
	width:940px;
	height:373px;
	z-index:1;
	left: 9px;
}
-->
</style>
<title>Listado de Requerimientos</title></head>
<body>

<div id="apDiv1" style="overflow:scroll">
<?php  
		include("conexion.php");
		$link = conection();
        $resultado=mysql_query("select 
		Id_requerimiento,Cedula,Estado,Asignado,
		Serial ,Fecha_apertura, Fecha_cierre,Observacion,Solucion from requerimiento
	    order by Id_requerimiento asc",$link);
        	echo "<table border='1' width='1000' height='100'>\n";
        	echo"<th bgcolor='#EEEEEE'>Codigo</th>\n";
       		echo"<th bgcolor='#EEEEEE'>Cedula</th>\n";
        	echo"<th bgcolor='#EEEEEE'>Estado</th>\n";
            echo"<th bgcolor='#EEEEEE'>Asignado</th>\n";
            echo"<th bgcolor='#EEEEEE'>Serial</th>\n";
            echo"<th bgcolor='#EEEEEE'>Fecha_apertura</th>\n";
            echo"<th bgcolor='#EEEEEE'>Fecha_cierre</th>\n";
            echo"<th bgcolor='#EEEEEE'>Observacion</th>\n";
			echo"<th bgcolor='#EEEEEE'>Solucion</th>\n";

        while ($row=mysql_fetch_row($resultado))
            {
            echo "<tr>\n";
            echo "<td align='left'>$row[0]</td>\n";
            echo "<td align='left'> $row[1]</td>\n";
            echo "<td align='left'>$row[2]</td>\n";
            echo "<td align='left'>$row[3]</td>\n";
            echo "<td align='left'>$row[4]</td>\n";
            echo "<td align='left'>$row[5]</td>\n";
            echo "<td align='left'>$row[6]</td>\n";
            echo "<td align='left'>$row[7]</td>\n";	
			 echo "<td align='left'>$row[8]</td>\n";
            echo "</tr>\n";
            }
        echo "</table>\n";
?>  
</div>
</body>
</html>      
