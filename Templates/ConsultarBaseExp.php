<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/Plantilla_exp.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<script language="JavaScript">

			function abrir(url) { 
			open(url,'','top=100,left=100,width=1000,height=400') ; 
			} 						
			
</script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>Sesión Experto</title>
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

			function Modificar(f)
			{
                var dato1 = f.id_b.value;
				var dato2 = f.ser.value;
				var dato3 = f.tip.value;
				var dato4 = f.obs.value;

               if(dato1=='' || dato2=='' || dato3=='' || dato4=='')
				{
                    alert("Error: Por favor ingrese valores");
                }
				else
				{
						if (confirm("Esta seguro que desea Modificar?"))
						{	
							f.action="../controlador/generico/modificarBase_exp.php";
						}
						else {}
				}
			}	
			
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
			
			function fotos(f)
			{
			var txtfoto = f.Foto;	
			var btnfoto = f.btnfoto;
			
			txtfoto.src = btnfoto.src;			
			
			}
			
</script>
<style type="text/css">
<!--
.Estilo4 {font-family: Calibri;
	font-size: 20px;
	font-weight: bold;
}
#apDiv1 {
	position:absolute;
	left:351px;
	top:503px;
	width:609px;
	height:120px;
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
      <table width="1086" border="0">
        <tr>
          <td width="204" height="311" valign="top"><p>&nbsp;</p>&nbsp;&nbsp;&nbsp;&nbsp;<ul id="MenuBar1" class="MenuBarVertical">
            <li><a href="Gestionar_Requerimiento_exp.php" class="MenuBarItemSubmenu">Crear Solicitud</a> </li>
            <li><a href="#" class="MenuBarItemSubmenu" 
            onclick="javascript:abrir('../modelo_clases/BuscarRequerimiento.php')">Requerimientos</a></li>
            <li><a href="Base_Conocimiento_exp.php" class="MenuBarItemSubmenu">Crear Base Conocimiento</a> </li>
            <li><a href="ConsultarRequerimientoExperto.php" class="MenuBarItemSubmenu">Consultar Solicitud</a></li>
            <li><a href="ConsultarBaseExp.php" class="MenuBarItemSubmenu">Base Conocimiento</a></li>
          </ul></td>
          <td width="10">&nbsp;</td>
          <td width="787" valign="top"><!-- InstanceBeginEditable name="EditRegion1" -->
            
          <form id="form1" name="form1" action="" method="post">
          <div id="apDiv1" style="overflow:scroll"><table width="1100" border="0" height="50" id="tablacod">
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
</table></div>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p align="center"><span class="Estilo4">Consultar Base de Conocimiento</span></p>
            <p align="center">&nbsp;</p>
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
            <p align="center">&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            </form>
          <!-- InstanceEndEditable --></td>
          <td width="67" valign="top"><table width="67" border="0">
            <tr>
              <td align="right"><a href="salir.php"><img src="../Imagenes/cerrar_sesion.png" alt="" width="32" height="32" 
             border="none" title="Cerrar Sesion"/></a><a href="Menu_exp.php"><img src="../Imagenes/inicio.PNG" alt="" width="28" height="28" 
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
