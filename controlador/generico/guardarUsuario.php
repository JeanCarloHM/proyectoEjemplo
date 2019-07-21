<?php
include ("../../modelo_clases/clsUsuario.php");
 
  //var_dump($_POST);
  
 if((isset($_POST['Cedula'])!='')){
 $usu= new clsUsuario();
		$usu ->SetCedula ($_POST['Cedula']);
		$usu ->SetNombre ($_POST['Nombre']);		
		$usu ->SetApellido ($_POST['Apellido']);
		$usu ->SetTelefono ($_POST['Telefono']);
		$usu ->SetCiudad ($_POST['Ciudad']);
		$usu ->SetDireccion ($_POST['Direccion']);
		$usu ->SetEmail($_POST['Email']);
		$usu ->SetId_perfil ($_POST['Id_perfil']);
		
			
 $usu->Guardar();
 header('../Templates/Gestionar_usuario.php');
  }
  else
  {           
  //alert("Error: ingrese los valores");

  }
  
?>
