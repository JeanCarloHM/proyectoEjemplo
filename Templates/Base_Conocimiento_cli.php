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
			
			function buscarcod(f){
		
			var dato1 = f.campo;
			var dato2 = f.enviar;	
			var numero = f.numero;	
			
			if(dato1.value=='Todo')
			{
			 window.open("../modelo_clases/BuscarBase.php","",			    
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
	left:358px;
	top:478px;
	width:627px;
	height:92px;
	z-index:1;
}
#apDiv2 {
	position:absolute;
	left:1057px;
	top:190px;
	width:66px;
	height:34px;
	z-index:2;
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
            <p>&nbsp;</p>
            <p align="center"><span class="Estilo14">Consultar Base Conocimiento</span></p>
            <p>&nbsp;</p>
            <table width="101" border="0" align="center">
              <tr>
                <td><div align="center">
                    <input name="Nuevo" type="submit" class="botonimagenNuevo" id="Nuevo" value=""  title="Limpiar"/>
                </div></td>
                <td><div align="center">
                    <input name="modificar" type="submit" class="botonimagenEditar" id="modificar" value="" onclick="Modificar(form1)"
                    title="Modificar" />
                </div></td>
                <td><div align="center">
                    <input name="enviar" type="submit" class="botonimagenBuscar" id="enviar" value="" title="Buscar" />
                </div></td>
              </tr>
            </table>
            <p>&nbsp;</p>
            <table width="446" border="0" align="center">
              <tr>
                <td width="80">Buscar por:</td>
                <td width="126"><select name="campo" id="campo" onchange="buscarcod(form1)">
                    <option value="Id_bconocimiento">Código</option>
                    <option value="Serial">Serial</option>
                    <option value="Tipo">Tipo Equipo</option>
                    <option value="Id_bconocimiento">Proveedor</option>
                    <option value="Palabra_clave">Palabra Clave </option>
                    <option value="Todo">Todo</option>
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
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <div id="apDiv1" style="overflow:scroll"> <table width="1100" border="0" height="50" id="tablacod">
  <tr>
    <td id="ped">
	<?php 
		
		include("../modelo_clases/conexion.php");
		$link = conection();
        
		if(isset($_POST['enviar'])) {
		
		$query = "select 
		Id_bconocimiento,Serial,Tipo,p.Id_proveedor,Palabra_clave ,Observaciones,p.Nombre 
		from base_conocimiento b inner join proveedor p on b.Id_proveedor=p.Id_proveedor
		 WHERE Id_bconocimiento = '{$_POST['Valor']}' OR `{$_POST['campo']}` like '%{$_POST['Valor']}%'
		 or p.Nombre = '{$_POST['Valor']}' ";

	$result = mysql_query($query,$link);

	$found = false; 
	
	$numero = mysql_num_rows($result); // obtenemos el número de filas


	echo "<p>";
	        echo "<table border='1' width='1000' height='50'>\n";
        	echo"<th bgcolor='#EEEEEE'>Codigo</th>\n";
       		echo"<th bgcolor='#EEEEEE'>Serial</th>\n";
        	echo"<th bgcolor='#EEEEEE'>Tipo</th>\n";
			echo"<th bgcolor='#EEEEEE'>Proveedor</th>\n";
        	echo"<th bgcolor='#EEEEEE'>Palabra Clave</th>\n";
            echo"<th bgcolor='#EEEEEE'>Observaciones</th>\n";
			
			while ($row = mysql_fetch_array($result))
 			{
			$found = true;
            echo "<tr>\n";
			
            echo "<td><input  type='text' name='id_b' value='".$row[0]."' size='15'>
			</td>\n";
			
            echo "<td><input  type='text' name='ser' value='".$row[1]."' size='15'></td>\n";
			
            echo "<td><input  type='text' name='tip' value='".$row[2]."' size='15' disabled>
			</td>\n";
			
			echo "<td><input  type='text' name='id_p' value='".$row[6]."' size='10' disabled>
			</td>\n";
			
			echo "<td><input  type='text' name='pal' value='".$row[4]."' size='10'>
			</td>\n";
			
			
            echo "<td><input  type='text' name='obs' value='".$row[5]."' size='10'>
			</td>\n";
			
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
</table> </div>
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
