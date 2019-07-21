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
<title>Menu Administrador</title>
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
<style type="text/css">
<!--
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
	left:853px;
	top:194px;
	width:180px;
	height:19px;
	z-index:1;
}
.Estilo4 {font-family: Arial, Helvetica, sans-serif}
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
                      <div id="apDiv2">
            <font color="#DF4239">Cedula: 
          <?php  echo $_SESSION["user"];?></font>
            </div>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p class="Estilo4"><strong>CREAR SOLICITUD:</strong> Por ésta opción se ingresan los requerimientos (Preguntas y Problemas) de los clientesque llaman a través de la linea 018000-ACME. </p>
            <p class="Estilo4"><strong>REQUERIMIENTOS:</strong> Por ésta opción se listan todos los requerimientos que han realizado los clientes.</p>
            <p class="Estilo4"><strong>BASE DE CONOCIMIENTOS:</strong> Por ésta opción usted podrá consultar soluciones documentadas por nuestros técnicos y el fabricante del equipo, a problemas conocidos.</p>
            <p class="Estilo4"><strong>CONSULTAR SOLICITUD:</strong> Por ésta opción usted podrá consultar todas las solicitudes que no han sido solucionadas (abiertas) para realizarles su atención.</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
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
