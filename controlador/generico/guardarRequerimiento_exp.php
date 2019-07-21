<?php
include ("../../modelo_clases/clsRequerimiento_exp.php");
 
  //var_dump($_POST);
  
 if((isset($_POST['guardar'])!='')){
 $req= new clsRequerimiento_exp();
		$req ->SetId_requerimiento ('');
		$req ->SetCedula ($_POST['Cedula']);		
		$req ->SetEstado ($_POST['Estado']);
		$req ->SetAsignado ($_POST['Asignado']);
		$req ->SetSerial ($_POST['Serial']);
		$req ->SetFecha_apertura ($_POST['Fecha_apertura']);
		$req ->SetFecha_cierre($_POST['Fecha_cierre']);
		$req ->SetObservacion ($_POST['Observacion']);
		$req ->SetSolucion ($_POST['Solucion']);
		
			
 $req->Guardar();
 header('../Templates/Gestionar_Requerimiento_exp.php');
  }
  else
  {           
  //alert("Error: ingrese los valores");

  }
  
?>