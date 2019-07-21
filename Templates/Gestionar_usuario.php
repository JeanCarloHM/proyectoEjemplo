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
                var dato1 = f.Cedula.value;
				var dato2 = f.Nombre.value;
				var dato3 = f.Apellido.value;
				var dato4 = f.Telefono.value;
				var dato5 = f.Ciudad.value;
				var dato6 = f.Direccion.value;
				var dato7 = f.Email.value;
				var dato8 = f.Id_perfil.value;

               if(dato1=='' || dato2=='' || dato3=='' || dato4=='' || dato5=='' || dato6=='' || 
				dato7==''|| dato8=='')
				{
                    alert("Error: Por favor ingrese valores");
                }
				else
				{
					if (confirm("Esta seguro que desea guardar?"))
					{	
                    	f.action="../controlador/generico/guardarUsuario.php";
                    }
					else {}
				}
            }
			
			function Modificar(f)
			{
                var dato1 = f.ced.value;
				var dato2 = f.nom.value;
				var dato3 = f.ape.value;
				var dato4 = f.tel.value;
				var dato5 = f.ciu.value;
				var dato6 = f.dir.value;
				var dato7 = f.ema.value;
				var dato8 = f.id_p.value;

               if(dato1=='' || dato2=='' || dato3=='' || dato4=='' || dato5=='' || dato6=='' || dato7=='' || dato8=='')
				{
                    alert("Error: Por favor ingrese valores");
                }
				else
				{
				    if (dato8=='Experto' || dato8=='Agente' || dato8=='Administrador')
					{
						if (confirm("Esta seguro que desea Modificar?"))
						{	
							f.action="../controlador/generico/modificarUsuario.php";
						}
						else {}
					}
					else {alert("Error: Perfil Incorrecto"); }
				}
					
           	   
			}	
			
			function buscarcod(f){
		
			var dato1 = f.campo;
			var dato2 = f.enviar;	
			var numero = f.numero;	
			
			if(dato1.value=='Todo')
			{
			 window.open("../modelo_clases/BuscarUsuario.php","",			    
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
#apDiv1 {	position:absolute;
	left:1057px;
	top:190px;
	width:66px;
	height:34px;
	z-index:1;
}
#apDiv2 {
	position:absolute;
	left:1057px;
	top:190px;
	width:66px;
	height:34px;
	z-index:1;
}
.Estilo4 {
	font-family: Calibri;
	font-size: 20px;
	font-weight: bold;
}
.Estilo5 {font-family: Calibri}
.Estilo12 {font-family: Calibri; font-size: 16px; }
.Estilo16 {font-family: Calibri; font-size: 16; }
.Estilo17 {font-family: Calibri; font-size: 24px; }
#apDiv3 {
	position:absolute;
	left:340px;
	top:542px;
	width:633px;
	height:103px;
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
            <p align="center" class="Estilo4">Crear Usuario</p>
            <p>&nbsp;</p>
            <table width="774" border="0" align="center">
              <tr>
                <td width="211" class="Estilo17"><span class="Estilo12">Documento de Identificación</span></td>
                <td width="192"><input type="text" name="Cedula" id="Cedula" /></td>
                <td width="127" class="Estilo12"><span class="Estilo16">Nombre</span></td>
                <td width="226"><input type="text" name="Nombre" id="Nombre" /></td>
              </tr>
              <tr>
                <td class="Estilo17"><span class="Estilo12">Apellido</span></td>
                <td><input type="text" name="Apellido" id="Apellido" /></td>
                <td class="Estilo12"><span class="Estilo16">Teléfono</span></td>
                <td><input type="text" name="Telefono" id="Telefono" /></td>
              </tr>
              <tr>
                <td class="Estilo17"><span class="Estilo12">Ciudad</span></td>
                <td><input type="text" name="Ciudad" id="Ciudad" /></td>
                <td class="Estilo12"><span class="Estilo16">Dirección</span></td>
                <td><input type="text" name="Direccion" id="Direccion" /></td>
              </tr>
              <tr>
                <td class="Estilo17"><span class="Estilo12">E-mail</span></td>
                <td><input type="text" name="Email" id="Email" /></td>
                <td class="Estilo12"><span class="Estilo16">Tipo Perfil</span></td>
                <td>
                  
      <select name="Id_perfil" id="Id_perfil" >
      <option> </option>
      <?php
		include("../modelo_clases/conexion.php");
		$link = conection();
		$consulta="SELECT Id_perfil FROM perfil";
		$result = mysql_query($consulta,$link);
		while ($row = mysql_fetch_row($result))
		{
		?>
	  <option value="<?php echo $row[0]?>" id="id_per" > <?php echo $row[0]; ?> </option>
	
	 <?php 
		}
		mysql_free_result($result);

		?>
        </select>
                </td>
              </tr>
            </table>
            <br />
            <table width="130" border="0" align="center">
              <tr>
                <td><div align="center">
                    <input name="Nuevo" type="submit" class="botonimagenNuevo" id="Nuevo" value=""  title="Limpiar"/>
                </div></td>
                <td>
                    <input name="guardar" type="submit" class="imagen01" id="guardar" value="" onclick="Guardar(form1)" title="Guardar"/>
                  
                    <div align="center"></div>
                  <div align="center"></div></td>
                <td><div align="center">
                    <input name="modificar" type="submit" class="botonimagenEditar" id="modificar" value="" 
                    onclick="Modificar(form1)" title="Modificar"/>
                </div></td>
                <td><div align="center">
                    <input name="enviar" type="submit" class="botonimagenBuscar" id="enviar" value="" title="Buscar"  />
                </div></td>
              </tr>
            </table>
            <br />
            <table width="471" border="0" align="center">
              <tr>
                <td width="206"><span class="Estilo5">Documento de Identificación</span></td>
                 <td width="92"><select name="campo" id="campo" onchange="buscarcod(form1)">
                   <option value="Cedula">Cedula</option>
                   <option value="Todo">Todo</option>
                                  </select></td>
                <td width="159"><input type="text" name="Valor" id="Valor" /></td>
              </tr>
            </table>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p align="center">&nbsp;</p>
            <div id="apDiv3" style="overflow:scroll">
           <table width="1100" border="0" height="50" id="tablacod">
  <tr>
    <td id="ped">
	<?php 
		
		$link = conection();
        
		if(isset($_POST['enviar'])) {
		
		$query = "select 
		Cedula,Nombre,Apellido,Telefono,Ciudad,Direccion,Email,Id_perfil from usuario WHERE Cedula = '{$_POST['Valor']}'";

	$result = mysql_query($query,$link);

	$found = false; 
	
	$numero = mysql_num_rows($result); // obtenemos el número de filas


	echo "<p>";
	        echo "<table border='1' width='1000' height='50'>\n";
        	echo"<th bgcolor='#EEEEEE'>Cedula</th>\n";
       		echo"<th bgcolor='#EEEEEE'>Nombre</th>\n";
        	echo"<th bgcolor='#EEEEEE'>Apellido</th>\n";
            echo"<th bgcolor='#EEEEEE'>Telefono</th>\n";
            echo"<th bgcolor='#EEEEEE'>Ciudad</th>\n";
            echo"<th bgcolor='#EEEEEE'>Direccion</th>\n";
            echo"<th bgcolor='#EEEEEE'>Email</th>\n";
            echo"<th bgcolor='#EEEEEE'>Id_perfil</th>\n";
			
			while ($row = mysql_fetch_array($result))
 			{
			$found = true;
            echo "<tr>\n";
			
            echo "<td><input  type='text' name='ced' value='".$row[0]."' size='15'>
			</td>\n";
			
            echo "<td><input  type='text' name='nom' value='".$row[1]."' size='15'></td>\n";
			
            echo "<td>			
			<input  type='text' name='ape' value='".$row[2]."' size='15'>
			</td>\n";
			
            echo "<td><input  type='text' name='tel' value='".$row[3]."' size='10'>
			</td>\n";
			
            echo "<td><input  type='text' name='ciu' value='".$row[4]."' size='5'></td>\n";
			
            echo "<td><input  type='text' name='dir' value='".$row[5]."' size='18' >
			</td>\n";
			
            echo "<td><input  type='text' name='ema' value='".$row[6]."' size='25' >
			</td>\n";
			
            echo "<td><input  type='text' name='id_p' value='".$row[7]."' size='10'></td>\n";
			
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
