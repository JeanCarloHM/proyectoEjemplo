<?php
class clsRequerimiento_exp
 {
		private $Id_requerimiento;
		private $Cedula;
		private $Estado;
		private $Asignado;
		private $Serial;
		private $Fecha_apertura;
		private $Fecha_cierre;
		private $Observacion;
		private $Solucion;
		

        public function clsRequerimiento_exp(){}
		
		public function SetId_requerimiento($id_requerimiento ){$this->Id_requerimiento  = $id_requerimiento ;}

        public function GetId_requerimiento (){return $this->Id_requerimiento ;}

        public function SetCedula($cedula){ $this->Cedula= $cedula; }

        public function GetCedula(){return $this->Cedula;}
		
		public function SetEstado($estado){ $this->Estado= $estado;}

        public function GetEstado(){return $this->Estado;}
		
		public function SetAsignado($asignado){$this->Asignado= $asignado;}

        public function GetAsignado(){return $this->Asignado;}
		
	    public function SetSerial($serial){$this->Serial= $serial;}

        public function GetSerial(){return $this->Serial;}	
		
		public function SetFecha_apertura($fecha_apertura){$this->Fecha_apertura= $fecha_apertura;}

        public function GetFecha_apertura(){return $this->Fecha_apertura;}
		
		public function SetFecha_cierre($fecha_cierre){$this->Fecha_cierre= $fecha_cierre;}

        public function GetFecha_cierre(){return $this->Fecha_cierre;}
		
		public function SetObservacion($observacion){$this->Observacion= $observacion;}

        public function GetObservacion(){return $this->Observacion;}
		
		public function SetSolucion($solucion){$this->Solucion= $solucion;}

        public function GetSolucion(){return $this->Solucion;}			
			
        
        public function Guardar()
        {
		
        include("conexion.php");
					
		$query ="INSERT INTO requerimiento  (Id_requerimiento,Cedula,Estado,Asignado,
		Serial ,Fecha_apertura, Fecha_cierre,Observacion,solucion)
        VALUES
        ('".$this->Id_requerimiento." ','".$this->Cedula."','".$this->Estado."',
		'".$this->Asignado."',
		'".$this->Serial."','".$this->Fecha_apertura."','".$this->Fecha_cierre."',
		'".$this->Observacion."','".$this->Solucion."')";				
		$link = conection();
		
		mysql_query($query,$link) or die("problema al insertar".mysql_error());
		
		header( "Location:../../Templates/Gestionar_Requerimiento_exp.php");
		
		    /*echo "<a href='../../Templates/planilla_operadores.php' >volver</a>"; 
			
			echo "<script language=JavaScript>";
   			echo "alert('se han guardado los datos exitosamente');";
    		echo "</script>";*/
			
			$fp = fopen('pruebaguardarplanilla.txt','w+');	
			fwrite($fp,$query);
			fclose($fp);
     

        }		
		
		public function modificar()	
		{
		
		include("conexion.php");
		
		$query="update requerimiento  set Cedula ='".$this->Cedula."',
		Estado='".$this->Estado."',
		Asignado='".$this->Asignado."',Serial='".$this->Serial."',
		Fecha_apertura='".$this->Fecha_apertura."',
		Fecha_cierre='".$this->Fecha_cierre."', Observacion='".$this->Observacion."',
		Solucion='".$this->Solucion."'

	    WHERE Id_requerimiento ='".$this->Id_requerimiento."'";
		
		$link = conection();
		
		mysql_query($query,$link) or die("problema al modificar".mysql_error());
		
		header( "Location:../../Templates/ConsultarRequerimientoExperto.php");
		
		/*echo "<a href='../../Templates/planilla_rendimiento.php' >volver</a>"; 
		
			echo "<script language=JavaScript>";
   			echo "alert('se ha modificado con exito');";
    		echo "</script>";*/
			
			/*$fp = fopen('pruebaMODIFICAR.txt','w+');	
			fwrite($fp,$query);
			fclose($fp);*/
		
		}
		
		public function valorincremento()
        {
		include("conexion.php");
		$link = conection();
		    
    	$BuscarID=mysql_query("SELECT Id_requerimiento FROM requerimiento ORDER BY Id_requerimiento DESC 	
		LIMIT 1",$link) or die("problema al insertar".mysql_error());

    		 while  ($registro=MYSQL_FETCH_ROW($BuscarID))
	 			{
     			 $codigo = $registro[0];
     			 $codigo++; 
     			}
	 	echo "<input  type='text' name='Id_requerimiento' value='".$codigo."' size='2' 
		disabled='disabled'>";    
        }		
  }     

?>
