<?php

class clsBase
 {
		private $Id_bconocimiento;
		private $Serial;
		private $Tipo;
		private $Id_proveedor;
		private $Palabra_clave;
		private $Observaciones;
		

        public function clsBase(){}

        public function SetId_bconocimiento($id_bconocimiento){ $this->Id_bconocimiento= $id_bconocimiento; }

        public function GetId_bconocimiento(){return $this->Id_bconocimiento;}
		
		public function SetSerial($serial ){$this->Serial  = $serial ;}

        public function GetSerial (){return $this->Serial ;}
		
		public function SetTipo($tipo){ $this->Tipo= $tipo;}

        public function GetTipo(){return $this->Tipo;}
		
		public function SetId_proveedor($id_proveedor){ $this->Id_proveedor= $id_proveedor;}

        public function GetId_proveedor(){return $this->Id_proveedor;}
		
		public function SetPalabra_clave($palabra_clave){ $this->Palabra_clave= $palabra_clave;}

        public function GetPalabra_clave(){return $this->Palabra_clave;}
		
		public function SetObservaciones($observaciones){$this->Observaciones= $observaciones;}

        public function GetObservaciones(){return $this->Observaciones;}		
			
        
        public function Guardar()
        {
		
        include("conexion.php");
					
		$query ="INSERT INTO base_conocimiento (Id_bconocimiento ,Serial,Tipo,Id_proveedor,Palabra_clave,Observaciones)
        VALUES
        ('".$this->Id_bconocimiento." ','".$this->Serial."','".$this->Tipo."','".$this->Id_proveedor."','".$this->Palabra_clave."',
		'".$this->Observaciones."')";				
		$link = conection();
		
		mysql_query($query,$link) or die("problema al insertar".mysql_error());
		
		header( "Location:../../Templates/Base_Conocimiento.php");
		
		    /*echo "<a href='../../Templates/planilla_operadores.php' >volver</a>"; 
			
			echo "<script language=JavaScript>";
   			echo "alert('se han guardado los datos exitosamente');";
    		echo "</script>";
			
			$fp = fopen('pruebaguardarplanilla.txt','w+');	
			fwrite($fp,$query);
			fclose($fp);*/
     

        }		
		
		public function modificar()	
		{
		
		include("conexion.php");
		
		$query="update base_conocimiento  set Serial ='".$this->Serial."',
		Tipo='".$this->Tipo."',
		Palabra_clave='".$this->Palabra_clave."',Observaciones='".$this->Observaciones."'

	    WHERE Id_bconocimiento ='".$this->Id_bconocimiento."'";
		
		$link = conection();
		
		mysql_query($query,$link) or die("problema al modificar".mysql_error());
		
		header( "Location:../../Templates/ConsultarBaseAdmin.php");
		
		/*echo "<a href='../../Templates/planilla_rendimiento.php' >volver</a>"; 
		
			echo "<script language=JavaScript>";
   			echo "alert('se ha modificado con exito');";
    		echo "</script>";*/
			
			$fp = fopen('pruebaMODIFICAR.txt','w+');	
			fwrite($fp,$query);
			fclose($fp);
		
		}	
		
		public function valorincremento()
        {
		include("conexion.php");
		$link = conection();
		    
    	$BuscarID=mysql_query("SELECT Id_bconocimiento FROM base_conocimiento ORDER BY Id_bconocimiento DESC 	
		LIMIT 1",$link) or die("problema al insertar".mysql_error());

    		 while  ($registro=MYSQL_FETCH_ROW($BuscarID))
	 			{
     			 $codigo = $registro[0];
     			 $codigo++; 
     			}
	 	echo "<input  type='text' name='Id_bconocimiento' value='".$codigo."' size='2' 
		disabled='disabled'>";    
        }	
  }     

?>
