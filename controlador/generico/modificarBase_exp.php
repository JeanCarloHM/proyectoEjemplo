<?php
include ("../../modelo_clases/clsBase_exp.php");
 
  //var_dump($_POST);
  
 if((isset($_POST['modificar'])!='')){
 $base= new clsBase_exp();
		$base ->SetId_bconocimiento ($_POST['id_b']);
		$base ->SetSerial ($_POST['ser']);		
		$base ->SetTipo ($_POST['tip']);
		$base ->SetId_proveedor ($_POST['id_p']);
		$base ->SetPalabra_clave ($_POST['pal']);
		$base ->SetObservaciones ($_POST['obs']);
		
			
 $base->modificar();
 header('../Templates/Base_Conocimiento_exp.php');
  }
  else
  {           
  //alert("Error: ingrese los valores");

  }
  
?>

