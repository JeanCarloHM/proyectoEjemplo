<?php
include ("../../modelo_clases/clsBase_exp.php");
 
  //var_dump($_POST);
  
 if((isset($_POST['guardar'])!='')){
 $base= new clsBase_exp();
		$base ->SetId_bconocimiento ('');
		$base ->SetSerial ($_POST['Serial']);		
		$base ->SetTipo ($_POST['Tipo']);
		$base ->SetId_proveedor ($_POST['Id_proveedor']);
		$base ->SetPalabra_clave ($_POST['Palabra_clave']);
		$base ->SetObservaciones ($_POST['Observaciones']);
		
			
 $base->Guardar();
 header('../Templates/Base_Conocimiento_exp.php');
  }
  else
  {           
  //alert("Error: ingrese los valores");

  }
  
?>