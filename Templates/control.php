<?php 

include("../modelo_clases/conexion.php");
$link = conection();
session_start();
   $user=($_POST['usuario']); 
   $clave=$_POST['contrasena']; 
  
   $resultado=mysql_query("select Cedula,Nombre,Apellido,Telefono,Ciudad,Direccion,Email,Id_perfil
    from usuario where   	
   Cedula='$user' and Id_perfil='Administrador'",$link);
   
   $resultado02 =mysql_query("select Cedula,Nombre,Apellido,Telefono,Ciudad,Direccion,Email,Id_perfil
    from usuario where   	
   Cedula='$user' and Id_perfil='Agente'",$link);
   
   $resultado03 =mysql_query("select Cedula,Nombre,Apellido,Telefono,Ciudad,Direccion,Email,Id_perfil
    from usuario where   	
   Cedula='$user' and Id_perfil='Cliente'",$link);
   
  $resultado04 =mysql_query("select Cedula,Nombre,Apellido,Telefono,Ciudad,Direccion,Email,Id_perfil
    from usuario where   	
   Cedula='$user' and Id_perfil='Experto'",$link);
    
   if($row = mysql_fetch_array($resultado)) 
   { 
   		  $_SESSION["user"]=$_POST["Cedula"];
		  $_SESSION["autentificado"]=1;
          if($row["Cedula"]==$clave) 
          { 
		  
		  header("location:Menu_adm.php");
		  
           } 		   
           else
		   { 
		    header("location:Home.php");
					  
           } 
       
    }
	
	else if($row = mysql_fetch_array($resultado02)) 
	{
	   	  $_SESSION["user"]=$_POST["Cedula"];
		  $_SESSION["autentificado"]=1;
	      if($row["Cedula"]==$clave) 
           { 		  
		    header("location:Menu_agen.php");		  
           } 		   
           else
		   { 
		    header("location:Home.php");
			}
	
	}
	
		else if($row = mysql_fetch_array($resultado03)) 
	{
	   	  $_SESSION["user"]=$_POST["Cedula"];
		  $_SESSION["autentificado"]=1;
	      if($row["Cedula"]==$clave) 
           { 		  
		    header("location:Menu_cli.php");		  
           } 		   
           else
		   { 
		    header("location:Home.php");
			}
	
	}
	
		else if($row = mysql_fetch_array($resultado04)) 
	{
	   	  $_SESSION["user"]=$_POST["Cedula"];
		  $_SESSION["autentificado"]=1;
	      if($row["Cedula"]==$clave) 
           { 		  
		    header("location:Menu_exp.php");		  
           } 		   
           else
		   { 
		    header("location:Home.php");
			}
	
	}
	
    else
	{ 
		$_SESSION["autentificado"]=2;
		 header("location:Home.php");
		 
    } 

   mysql_free_result($resultado); 

?>