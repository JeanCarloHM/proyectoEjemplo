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
</head>
<body>

<div id="apDiv1" style="overflow:scroll">
<?php  
		include("conexion.php");
		$link = conection();
        $resultado=mysql_query("select 
		Id_bconocimiento,Serial,Tipo,p.Id_proveedor,Palabra_clave ,Observaciones,p.Nombre 
		from base_conocimiento b inner join proveedor p on b.Id_proveedor=p.Id_proveedor
	    order by Id_bconocimiento asc",$link);
        	echo "<table border='1' width='1000' height='50'>\n";
        	echo"<th bgcolor='#EEEEEE'>Codigo</th>\n";
       		echo"<th bgcolor='#EEEEEE'>Serial</th>\n";
        	echo"<th bgcolor='#EEEEEE'>Tipo</th>\n";
			echo"<th bgcolor='#EEEEEE'>Proveedor</th>\n";
        	echo"<th bgcolor='#EEEEEE'>Palabra Clave</th>\n";
            echo"<th bgcolor='#EEEEEE'>Observaciones</th>\n";

        while ($row=mysql_fetch_row($resultado))
            {
            echo "<tr>\n";
            echo "<td align='left'>$row[0]</td>\n";
            echo "<td align='left'> $row[1]</td>\n";
            echo "<td align='left'>$row[2]</td>\n";
            echo "<td align='left'>$row[4]</td>\n";
			echo "<td align='left'>$row[5]</td>\n";
			echo "<td align='left'>$row[6]</td>\n";
            echo "</tr>\n";
            }
        echo "</table>\n";
?>  
</div>
</body>
</html>      
