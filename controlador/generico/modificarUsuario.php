<?php
include ("../../modelo_clases/clsUsuario.php");
 
  //var_dump($_POST);
  
 if((isset($_POST['modificar'])!='')){
 $usu= new clsUsuario();
		$usu ->SetCedula ($_POST['ced']);
		$usu ->SetNombre ($_POST['nom']);		
		$usu ->SetApellido ($_POST['ape']);
		$usu ->SetTelefono ($_POST['tel']);
		$usu ->SetCiudad ($_POST['ciu']);
		$usu ->SetDireccion ($_POST['dir']);
		$usu ->SetEmail($_POST['ema']);
		$usu ->SetId_perfil ($_POST['id_p']);
		
			
 $usu->modificar();
 header('../Templates/Gestionar_usuario.php');
  }
  else
  {           
  //alert("Error: ingrese los valores");

  }
  
?>
