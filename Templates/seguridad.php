<?php
include("control.php");
session_start();
if($_SESSION["autentificado"]!=1)
{
header("location:Home.php");

exit();
}
?>