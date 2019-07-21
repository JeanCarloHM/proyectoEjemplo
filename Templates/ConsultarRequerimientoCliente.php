<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php

session_start();

if($_SESSION["autentificado"]!=1)
{
header("location:Home.php");
}

?>
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/Plantilla_cli.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>Sesión Cliente</title>
<!-- InstanceEndEditable -->
<style type="text/css">
<!--
body {
	background-color: #D5D5D5;
	background-image: url(../Imagenes/fondo2.jpg);
}
-->
</style>
<style type="text/css">
<!--
.Estilo1 {
	font-size: 18px;
	font-weight: bold;
}
.Estilo3 {color: #FFFFFF}
-->
</style>
<script src="../SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<link href="../SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />
<link href="../SpryAssets/SpryMenuBarVertical.css" rel="stylesheet" type="text/css" />
<!-- InstanceBeginEditable name="head" -->
<script type="text/javascript"></script>
<script language="JavaScript">

			function limpiar(f)
			{}
			
			function buscarcod(f){
		
			var dato1 = f.campo;
			var dato2 = f.enviar;	
			var numero = f.numero;	
			
			if(dato1.value=='Todo')
			{
			 window.open("../modelo_clases/BuscarRequerimiento_cli.php","",			    
			 "width=950,height=398,menubar=no,status=no")
			}
			}
						
			function enviar(f)
			{
				f.action="salir.php";

			}
			
</script>
<style type="text/css">
<!--
.Estilo14 {font-family: Calibri;
	font-weight: bold;
	font-size: 20px;
}
#apDiv1 {
	position:absolute;
	left:352px;
	top:476px;
	width:619px;
	height:94px;
	z-index:1;
}
-->
</style>
<!-- InstanceEndEditable -->
</head>

<body>
<table width="1024" height="441" border="0" align="center">
  <tr>
    <td width="1010" height="437" valign="top" bgcolor="#EAEAEA"><table width="200" border="0" align="center" bordercolor="#359D9B">
      <tr>
        <td bgcolor="#77AAAE"><img src="../Imagenes/banner.png" width="1083" height="157" /></td>
      </tr>
    </table>
      <table width="1084" border="0">
        <tr>
          <td width="211" height="311" valign="top"><p>&nbsp;</p>&nbsp;&nbsp;&nbsp;&nbsp;<ul id="MenuBar1" class="MenuBarVertical">
            <li><a href="Gestionar_Requerimiento_cli.php" class="MenuBarItemSubmenu">Ingresar Solicitud</a> </li>
            <li><a href="Base_Conocimiento_cli.php" class="MenuBarItemSubmenu">Base Conocimiento</a> </li>
            <li><a href="ConsultarRequerimientoCliente.php" class="MenuBarItemSubmenu">Consultar Solicitudes</a></li>
          </ul></td>
          <td width="10">&nbsp;</td>
          <td width="777" valign="top"><!-- InstanceBeginEditable name="EditRegion1" -->
            
         <form id="form1" name="form1" action="" method="post">
         <div id="apDiv1" style="overflow:scroll">
            <table width="1100" border="0" height="50" id="tablacod">
  <tr>
    <td id="ped">
	<?php 
	  
	    include("../modelo_clases/conexion.php");
		
		$link = conection();
        
		if(isset($_POST['enviar'])) {
		
		$query = "select 
		Id_requerimiento,Cedula,Estado,Serial ,Fecha_apertura, Fecha_cierre,Observacion,Solucion
		from requerimiento WHERE Cedula = '{$_SESSION['user']}' and Serial = '{$_POST['Valor']}'";

	$result = mysql_query($query,$link);

	$found = false; 
	
	$numero = mysql_num_rows($result); // obtenemos el número de filas


	echo "<p>";
	        echo "<table border='1' width='1500' height='50'>\n";
        	echo"<th bgcolor='#EEEEEE'>Numero</th>\n";
       		echo"<th bgcolor='#EEEEEE'>Cedula</th>\n";
        	echo"<th bgcolor='#EEEEEE'>Estado</th>\n";
            echo"<th bgcolor='#EEEEEE'>Serial</th>\n";
            echo"<th bgcolor='#EEEEEE'>Fecha Apertura</th>\n";
            echo"<th bgcolor='#EEEEEE'>Fecha Cierre</th>\n";
            echo"<th bgcolor='#EEEEEE'>Observacion</th>\n";
			echo"<th bgcolor='#EEEEEE'>Solucion</th>\n";
			
			while ($row = mysql_fetch_array($result))
 			{
			$found = true;
            echo "<tr>\n";
			
            echo "<td><input  type='text' name='id_r' value='".$row[0]."' size='15'>
			</td>\n";
			
            echo "<td><input  type='text' name='ced' value='".$row[1]."' size='15' disabled></td>\n";
			
            echo "<td>			
			<input  type='text' name='est' value='".$row[2]."' size='15' disabled>
			</td>\n";
			
            echo "<td><input  type='text' name='ser' value='".$row[3]."' size='10'>
			</td>\n";
			
            echo "<td><input  type='text' name='fap' value='".$row[4]."' size='5' disabled></td>\n";
			
            echo "<td><input  type='text' name='fci' value='".$row[5]."' size='5' disabled>
			</td>\n";
			
            echo "<td><input  type='text' name='obs' value='".$row[6]."' size='50' >
			</td>\n";
			
            echo "<td><input  type='text' name='sol' value='".$row[7]."' size='50'></td>\n";
			
			echo "</tr>\n";

		 }
        echo "</table>\n";
	echo "<input  type='hidden' name='numero' value='".$numero."' size='5'>";

	}
	echo "</p>";

	//if(!$found) {

	//echo "No se encontró el dato introducido";

	//}
			
	?></td>
  </tr>
</table>
            </div>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p align="center"><span class="Estilo14">Consultar Solicitudes</span></p>
            <table width="66" border="0" align="center">
              <tr>
                <td width="95"><div align="center">
                    <input name="Nuevo" type="submit" class="botonimagenNuevo" id="Nuevo" value="" title="Limpiar" />
                </div></td>
                <td width="28"><div align="center">
                    <input name="enviar" type="submit" class="botonimagenBuscar" id="enviar" value=""  title="Buscar"/>
                </div></td>
              </tr>
            </table>
            <p align="center">&nbsp;</p>
            <table width="446" border="0" align="center">
              <tr>
                <td width="80">Buscar por:</td>
                <td width="126"><select name="campo" id="campo" onchange="buscarcod(form1)">
                    <option value="Todo">Cedula</option>
                    <option value="Serial" selected="selected">Serial</option>
                  </select>
                </td>
                <td width="60">Valor:</td>
                <td width="162"><input type="text" name="Valor" id="Valor" /></td>
              </tr>
            </table>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            </form>
          <!-- InstanceEndEditable --></td>
          <td width="68" align="right" valign="top"><table width="67" border="0">
            <tr>
              <td align="right"><a href="salir.php"><img src="../Imagenes/cerrar_sesion.png" alt="" width="32" height="32" 
             border="none" title="Cerrar Sesion"/></a><a href="Menu_cli.php"><img src="../Imagenes/inicio.PNG" alt="" width="28" height="28" 
             border="none" title="Inicio"/></a></td>
            </tr>
          </table></td>
        </tr>
      </table>
      <table width="1083" border="0">
        <tr>
          <td width="1021" bgcolor="#77AAAE"><div align="center"><span class="Estilo3">Almacen de electrodomésticos  ACME </span></div></td>
        </tr>
      </table>
    </td>
  </tr>
</table>
<script type="text/javascript">
<!--
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgRight:"../SpryAssets/SpryMenuBarRightHover.gif"});
//-->
</script>
</body>
<!-- InstanceEnd --></html>
