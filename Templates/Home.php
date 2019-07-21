<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Home</title>
<style type="text/css">
<!--
body {
	background-color: #D5D5D5;
	background-image: url(../Imagenes/fondo2.jpg);
}
-->
</style>
<script src="../SpryAssets/SpryTabbedPanels.js" type="text/javascript"></script>
<link href="../SpryAssets/SpryTabbedPanels.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.Estilo1 {
	font-size: 18px;
	font-weight: bold;
}
.Estilo3 {color: #FFFFFF}
-->
</style>


<script language="JavaScript">

			function enviar(f)
			{
				f.action="control.php";

			}
</script>
</head>

<body>
<form action="" method="post" name="form1">
<table width="1024" height="351" border="0" align="center">
  <tr>
    <td width="1010" height="347" valign="top" bgcolor="#EAEAEA"><table width="200" border="0" align="center" bordercolor="#359D9B">
      <tr>
        <td bgcolor="#77AAAE"><img src="../Imagenes/banner.png" width="1010" height="157" /></td>
      </tr>
    </table>
      <div id="TabbedPanels1" class="TabbedPanels">
        <ul class="TabbedPanelsTabGroup">
          <li class="TabbedPanelsTab" tabindex="0">Mesa de Ayuda</li>
          <li class="TabbedPanelsTab" tabindex="0">Iniciar Sesión</li>
        </ul>
        <div class="TabbedPanelsContentGroup">
          <div class="TabbedPanelsContent">
            <table width="327" height="76" border="0" align="center">
              <tr>
                <td width="321" valign="top"><fieldset>
                <p align="center"><span class="Estilo1">Descripción de la mesa de ayuda</span></p>
                <p align="center">A través de este sistema los clientes pueden ingresar y consultar sus solicitudes relacionadas a los equipos adquiridos en el almacén que estan en garantía y nuestro personal dará respuesta y solución a sus requerimientos.</p>
                </fieldset>
                </td>
              </tr>
            </table>
            <p>&nbsp;</p>
          </div>
          <div class="TabbedPanelsContent">
            <table width="239" height="92" border="0" align="center">
              <tr>
                <td width="233" height="88" valign="top"><fieldset>
                <table width="214" border="0">
                  <tr>
                    <td width="72">Cedula:</td>
                    <td width="164"><input name="usuario" type="text" id="usuario" size="15" /></td>
                  </tr>
                  <tr>
                    <td>Contraseña:</td>
                    <td><input name="contrasena" type="password" id="contrasena" size="17" /></td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td><label>
                    <input name="button" type="submit" 
              class="imagensesion" id="button" value="Iniciar Sesion" title="Iniciar Sesión" onclick="enviar(form1)" />
                    </label></td>
                  </tr>
                  <tr>
                    <td></td>
                  </tr>
                </table>
                </fieldset>
                </td>
              </tr>
            </table>
          </div>
          <table width="200" border="0">
            <tr>
              <td>&nbsp;</td>
            </tr>
          </table>
          <p>&nbsp;</p>
        </div>
    </div>
      <table width="1027" border="0">
        <tr>
          <td width="1021" height="21" bgcolor="#77AAAE"><div align="center"><span class="Estilo3">Almacen de electrodomésticos  ACME </span></div></td>
        </tr>
      </table>
    </td>
  </tr>
</table>
</form>
<script type="text/javascript">

<!--
var TabbedPanels1 = new Spry.Widget.TabbedPanels("TabbedPanels1");
//-->
</script>
</body>
</html>
