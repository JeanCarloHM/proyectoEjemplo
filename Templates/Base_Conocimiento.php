<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php

session_start();

if($_SESSION["autentificado"]!=1)
{
header("location:Home.php");
}

?>
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/plantilla_adm.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<script language="JavaScript">

			function abrir(url) { 
			open(url,'','top=100,left=100,width=1000,height=400') ; 
			} 						
			
</script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>Sesión Administrador</title>
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
            function Guardar(f)
			{
                var dato1 = f.Id_bconocimiento.value;
				var dato2 = f.Serial.value;
				var dato3 = f.Tipo.value;
				var dato4 = f.Observaciones.value;

               if(dato1=='')
				{
                    alert("Error: Por favor ingrese valores");
                }
				else
				{
					if (confirm("Esta seguro que desea guardar?"))
					{	
                    	f.action="../controlador/generico/guardarBase.php";
                    }
					else {}
				}
            }
			
			function Modificar(f)
			{
                var dato1 = f.id_b.value;
				var dato2 = f.ser.value;
				var dato3 = f.tip.value;
				var dato4 = f.obs.value;

               if(dato1=='' || dato3=='' || dato4=='')
				{
                    alert("Error: Por favor ingrese valores");
                }
				else
				{
						if (confirm("Esta seguro que desea Modificar?"))
						{	
							f.action="../controlador/generico/modificarBase.php";
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
<script language='javascript' src="../SpryAssets/popcalendar.js"></script>
<style type="text/css">
<!--
.Estilo4 {	font-family: Calibri;
	font-size: 20px;
	font-weight: bold;
}
.Estilo5 {font-family: Calibri}
#apDiv1 {
	position:absolute;
	left:1057px;
	top:190px;
	width:66px;
	height:34px;
	z-index:1;
}
#apDiv2 {
	position:absolute;
	left:367px;
	top:673px;
	width:608px;
	height:79px;
	z-index:2;
}
-->
</style>
<!-- InstanceEndEditable -->
</head>

<body>
<table width="1090" height="441" border="0" align="center">
  <tr>
    <td width="1084" height="437" valign="top" bgcolor="#EAEAEA"><table width="200" border="0" align="center" bordercolor="#359D9B">
      <tr>
        <td bgcolor="#77AAAE"><img src="../Imagenes/banner.png" width="1083" height="157" /></td>
      </tr>
    </table>
      <table width="1090" border="0">
        <tr>
          <td width="206" height="311" valign="top"><p>&nbsp;</p>&nbsp;&nbsp;&nbsp;&nbsp;<ul id="MenuBar1" class="MenuBarVertical">
            <li><a href="Gestionar_usuario.php" class="MenuBarItemSubmenu">Crear Usuario</a> </li>
            <li><a href="Gestionar_Requerimiento.php" class="MenuBarItemSubmenu">Ingresar Solicitud</a> </li>
            <li><a href="#" class="MenuBarItemSubmenu"
            onclick="javascript:abrir('../modelo_clases/BuscarRequerimiento.php')">Requerimientos</a></li>
            <li><a href="Base_Conocimiento.php" class="MenuBarItemSubmenu">Crear Base Conocimiento</a></li>
            <li><a href="ConsultarRequerimientoAdmin.php" class="MenuBarItemSubmenu">Consultar Solicitud</a></li>
            <li><a href="ConsultarBaseAdmin.php" class="MenuBarItemSubmenu">Base Conocimiento</a></li>
          </ul></td>
          <td width="8">&nbsp;</td>
          <td width="791" valign="top"><!-- InstanceBeginEditable name="EditRegion1" -->
            <form id="form1" name="form1" action="" method="post">
            <p align="center" class="Estilo4">&nbsp;</p>
            <p align="center" class="Estilo4">Registrar Base de Conocimiento</p>
            <p>&nbsp;</p>
            <div align="left">
              <table width="734" border="0" align="center">
                  <tr>
                    <td width="110" align="left"><div align="left"><span class="Estilo5">Código</span></div></td>
                    <td width="191"><?php include("../modelo_clases/IncrementoBaseConocimiento.php"); ?>&nbsp;</td>
                    <td width="87"><span class="Estilo5">Serial</span></td>
                    <td width="328"><input type="text" name="Serial" id="Serial" /></td>
                  </tr>
                  <tr>
                    <td><div align="left"><span class="Estilo5">Proveedor</span></div></td>
                    <td><select name="Id_proveedor" id="Id_proveedor" onchange="buscarcod(form1)">
                      <option> </option>
      <?php
		$link = conection();
		$consulta="SELECT * FROM proveedor";
		$result = mysql_query($consulta,$link);
		while ($row = mysql_fetch_row($result))
		{
		?>
	  <option value="<?php echo $row[0]?>" id="id_pro" > <?php echo $row[1]; ?> </option>
	
	 <?php 
		}
		mysql_free_result($result);

		?>
        </select></td>
                    <td><span class="Estilo5">Tipo Equipo</span></td>
                    <td><select name="Tipo" id="Tipo" onchange="buscarcod(form1)">
                      <option value="Nevera">Nevera</option>
                      <option value="Televisor">Televisor</option>
                      <option value="Computador">Computador</option>
                                                            </select></td>
                  </tr>
                  <tr>
                  </tr>
                  <tr>
                  <td width="110"><span class="Estilo5">Palabra Calve</span></td>
                    <td width="191"><input type="text" name="Palabra_clave" id="Palabra_clave" /></td>
                  </tr>
                  
                          </table>
            </div>
            
              <div align="left">
                <table width="734" border="0" align="center">
                  <tr>
                    <td width="110" align="left" class="Estilo5">Observaciones</td>
                    <td width="614"><textarea name="Observaciones" cols="70" rows="5" id="Observaciones"></textarea></td>
                    </tr>
                  </table>
              </div>
              <p><br />
            </p>
            <table width="66" border="0" align="center">
              <tr>
                <td><div align="center">
                  <input name="Nuevo" type="submit" class="botonimagenNuevo" id="Nuevo" value="" />
                </div></td>
                <td><div align="center">
                  <input name="guardar" type="submit" class="imagen01" id="guardar" value="" onclick="Guardar(form1)"/>
                </div>
                  <div align="center"></div>
                  <div align="center"></div></td>
                </tr>
            </table>
            <p>&nbsp;</p>
            <p align="center">&nbsp;</p>
            <p align="center">&nbsp;</p>
            <p align="center">&nbsp;</p>
            <p align="center">&nbsp;</p>
            </form>
          <!-- InstanceEndEditable --></td>
          <td width="67" valign="top"><table width="67" border="0">
            <tr>
              <td width="90" align="right"><a href="salir.php"><img src="../Imagenes/cerrar_sesion.png" alt="" width="32" height="32" 
             border="none" title="Cerrar Sesion"/></a><a href="Menu_adm.php"><img src="../Imagenes/inicio.PNG" alt="" width="28" height="28" 
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
