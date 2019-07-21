<?php
include ("../../modelo_clases/clsRequerimiento.php");
 
  //var_dump($_POST);
  
 if((isset($_POST['modificar'])!='')){
 $req= new clsRequerimiento();
		$req ->SetId_requerimiento ($_POST['id_r']);
		$req ->SetCedula ($_POST['ced']);		
		$req ->SetEstado ($_POST['est']);
		$req ->SetAsignado ($_POST['asi']);
		$req ->SetSerial ($_POST['ser']);
		$req ->SetFecha_apertura ($_POST['fap']);
		$req ->SetFecha_cierre($_POST['fci']);
		$req ->SetObservacion ($_POST['obs']);
		$req ->SetSolucion ($_POST['sol']);
		
			
 $req->modificar();
 header('../Templates/Gestionar_Requerimiento.php');
  }
  else
  {           
  //alert("Error: ingrese los valores");

  }
  
?>

