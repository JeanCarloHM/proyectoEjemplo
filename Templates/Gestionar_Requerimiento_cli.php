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
            function Guardar(f)
			{
                var dato1 = f.Id_requerimiento.value;
				var dato2 = f.Cedula.value;
				var dato3 = f.Estado.value;
				var dato4 = f.Asignado.value;
				var dato5 = f.Serial.value;
				var dato6 = f.Fecha_apertura.value;
				var dato7 = f.Fecha_cierre.value;
				var dato8 = f.Observacion.value;

               if(dato1=='' || dato2=='' || dato3=='' || dato4=='' || dato5=='' || dato6=='' || 
				dato7==''|| dato8=='')
				{
                    alert("Error: Por favor ingrese valores");
                }
				else
				{
					if (confirm("Esta seguro que desea guardar?"))
					{	alert("Su Solicitud ha sido Registrada");
                    	f.action="../controlador/generico/guardarRequerimiento_cli.php";
						
                    }
					else {}
				}
            }
			
			function Modificar(f)
			{

						if (confirm("Esta seguro que desea Modificar?"))
						{	
							f.action="../controlador/generico/modificarRequerimiento_cli.php";
						}
						else {}
					
           	   
			}	
			
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
<script language='javascript' src="../SpryAssets/popcalendar.js"></script>
<style type="text/css">
<!--
.Estilo14 {font-family: Calibri;
	font-weight: bold;
	font-size: 20px;
}
.Estilo12 {font-family: Calibri; font-size: 16px; }
.Estilo16 {font-family: Calibri; font-size: 16; }
.Estilo5 {font-family: Calibri; font-size: 24px; }
.Estilo4 {font-family: Calibri}
#apDiv1 {
	position:absolute;
	left:364px;
	top:657px;
	width:589px;
	height:98px;
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
            <p align="center">&nbsp;</p>
            <p align="center"><span class="Estilo14">Ingresar  Solicitud</span></p>
            <table width="774" border="0" align="center">
              <tr>
                <td width="149" class="Estilo12">Número:</td>
                <td width="236"><?php include("../modelo_clases/IncrementoRequerimiento.php"); ?>
                  &nbsp;</td>
                <td width="154" class="Estilo12">Cedula</td>
                <td width="217"><input type="hidden" name="Cedula" id="Cedula" value="<?php  echo $_SESSION["user"];?>"/>
                  <input type="text" name="Cedula2" id="Cedula2" value="<?php  echo $_SESSION["user"];?>" disabled="disabled"/>                </td>
              </tr>
              <tr>
                <td class="Estilo5"><span class="Estilo12">Fecha Apertura</span></td>
                <td><input type="hidden" name="Fecha_apertura" id="dateArrival1"  value="<?php echo date("d/m/y");?>" 
                />
                  <input type="text" name="dateArrival" id="dateArrival3"  value="<?php echo date("d/m/y");?>" 
                 disabled="disabled"/></td>
                <td class="Estilo12">Fecha Cierre</td>
                <td><input type="hidden" name="Fecha_cierre" id="dateArrival2"  value="<?php echo date("d/m/y");?>" />
                  <input type="text" name="dateArrival2" id="dateArrival4"  value=""  
                  disabled="disabled"/></td>
              </tr>
              <tr>
                <td class="Estilo5"><span class="Estilo12">Serial del Equipo:</span></td>
                <td><input type="text" name="Serial" id="Serial" /></td>
                <td class="Estilo12"><select name="Estado" id="Estado" disabled="disabled" style="display:none">
                  <option value="Abierto" selected="selected">Abierto</option>
                  <option value="Resuelto">Resuelto</option>
                  <option value="Pendiente">Pendiente</option>
                  <option value="Cerrado">Cerrado</option>
                  <option value="Garantia Vencida">Garantia Vencida</option>
                  <option value="Proveedor">Proveedor</option>
                </select></td>
                <td><input name="Asignado" type="hidden" id="Asignado" value="Agente" />
                  <input type="hidden" name="Solucion" id="Solucion"  /></td>
              </tr>
            </table>
            <table width="774" border="0" align="center">
              <tr>
                <td width="150" align="left" class="Estilo4">Descripcion</td>
                <td width="614"><textarea name="Observacion" cols="70" rows="5" id="Observacion"></textarea></td>
              </tr>
            </table>
            <p>&nbsp;</p>
            <table width="75" border="0" align="center">
              <tr>
                <td><div align="center">
                    <input name="Nuevo" type="submit" class="botonimagenNuevo" id="Nuevo" value=""  title="Limpiar"/>
                </div></td>
                <td><div align="center">
                    <input name="guardar" type="submit" class="imagen01" id="guardar" value="" onclick="Guardar(form1)"  
                    title="Guardar"/>
                  </div>
                    <div align="center"></div>
                  <div align="center"></div></td>
                
              </tr>
            </table>
            <p>&nbsp;</p>
            <p align="center">&nbsp;</p>
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
