<?php

class clsUsuario
 {
		private $Cedula;
		private $Nombre;
		private $Apellido;
		private $Telefono;
		private $Ciudad;
		private $Direccion;
		private $Email;
		private $Id_perfil;

        public function clsUsuario(){}

        public function SetCedula($cedula){ $this->Cedula= $cedula; }

        public function GetCedula(){return $this->Cedula;}
		
		public function SetNombre($nombre ){$this->Nombre  = $nombre ;}

        public function GetNombre (){return $this->Nombre ;}
		
		public function SetApellido($apellido){ $this->Apellido= $apellido;}

        public function GetApellido(){return $this->Apellido;}
		
		public function SetTelefono($telefono){$this->Telefono= $telefono;}

        public function GetTelefono(){return $this->Telefono;}
		
	    public function SetCiudad($ciudad){$this->Ciudad= $ciudad;}

        public function GetCiudad(){return $this->Ciudad;}	
		
		public function SetDireccion($direccion){$this->Direccion= $direccion;}

        public function GetDireccion(){return $this->Direccion;}
		
		public function SetEmail($email){$this->Email= $email;}

        public function GetEmail(){return $this->Email;}
		
		public function SetId_perfil($id_perfil){$this->Id_perfil= $id_perfil;}

        public function GetId_perfil(){return $this->Id_perfil;}		
			
        
        public function Guardar()
        {
		
        include("conexion.php");
					
		$query ="INSERT INTO usuario  (Cedula ,Nombre,Apellido,Telefono,
		Ciudad ,Direccion , Email ,`Id_perfil`)
        VALUES
        ('".$this->Cedula." ','".$this->Nombre."','".$this->Apellido."',
		'".$this->Telefono."',
		'".$this->Ciudad."','".$this->Direccion."','".$this->Email."',
		'".$this->Id_perfil."')";				
		$link = conection();
		
		mysql_query($query,$link) or die("problema al insertar".mysql_error());
		
		header( "Location:../../Templates/Gestionar_usuario.php");
		
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
		
		$query="update usuario  set Nombre ='".$this->Nombre."',
		Apellido='".$this->Apellido."',
		Telefono='".$this->Telefono."',Ciudad='".$this->Ciudad."',
		Direccion='".$this->Direccion."',
		Email='".$this->Email."', Id_perfil='".$this->Id_perfil."'

	    WHERE Cedula ='".$this->Cedula."'";
		
		$link = conection();
		
		mysql_query($query,$link) or die("problema al modificar".mysql_error());
		
		header( "Location:../../Templates/Gestionar_usuario.php");
		
		/*echo "<a href='../../Templates/planilla_rendimiento.php' >volver</a>"; 
		
			echo "<script language=JavaScript>";
   			echo "alert('se ha modificado con exito');";
    		echo "</script>";*/
			
			$fp = fopen('pruebaMODIFICAR.txt','w+');	
			fwrite($fp,$query);
			fclose($fp);
		
		}	
  }     

?>
