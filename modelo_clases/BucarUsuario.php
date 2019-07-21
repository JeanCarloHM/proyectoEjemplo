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
		Cedula,Nombre,Apellido,Telefono,Ciudad,Direccion,Email,Id_perfil from usuario
	    order by Cedula asc",$link);
        	echo "<table border='1' width='1000' height='100'>\n";
        	echo"<th bgcolor='#EEEEEE'>Cedula</th>\n";
       		echo"<th bgcolor='#EEEEEE'>Nombre</th>\n";
        	echo"<th bgcolor='#EEEEEE'>Apellido</th>\n";
            echo"<th bgcolor='#EEEEEE'>Telefono</th>\n";
            echo"<th bgcolor='#EEEEEE'>Ciudad</th>\n";
            echo"<th bgcolor='#EEEEEE'>Direccion</th>\n";
            echo"<th bgcolor='#EEEEEE'>Email</th>\n";
            echo"<th bgcolor='#EEEEEE'>Id_perfil</th>\n";

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
            echo "</tr>\n";
            }
        echo "</table>\n";
?>  
</div>
</body>
</html>      
