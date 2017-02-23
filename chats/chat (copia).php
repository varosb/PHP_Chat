<?php
error_reporting(E_ALL & ~E_NOTICE);
//creamos la sesion
session_start();
$_SESSION['nombre'] = $_REQUEST['nombre'];
$admitidos=array('Diego','Aurelio');

// FIN SESION

$mensaje=$_REQUEST["mensaje"];

//CHAT

echo "<b>Chat: </b>";

// USUARIO DIEGO
//if ($_SESSION['nombre']=="Diego")
if ($_SESSION['nombre']==($admitidos))

{


@$f1=fopen("listado.txt","a","<br>");

	if ($f1!=null)
	 {
	   fwrite($f1,"<b><p align='right'><font color='blue'>$nombre: </font></b>"."<i>$mensaje</i>"."<br> < </p>");
	   echo "<b> <font color='green'>ON</font></b><br>----------------<br><br>";
	   fclose($f1);
	 }
	else 
	    echo "<b> <font color='red'>OFF</font></b><br>----------------";

echo `cat listado.txt`;

}

// USUARIO AURELIO
if ($_SESSION['nombre']=="Aurelio")
{
@$f1=fopen("listado.txt","a","<br>");

	if ($f1!=null)
	 {
	   fwrite($f1,"<b><font color='blue'>$nombre: </font></b>"."<i>$mensaje</i>"."<br> >");
	   echo "<b> <font color='green'>ON</font></b><br>----------------<br><br>";
	   fclose($f1);
	 }
	else {
	    echo "<b> <font color='red'>OFF</font></b><br>----------------";
	}
echo `cat listado.txt`;

}

if ($_SESSION['nombre']!="Aurelio" && $_SESSION['nombre']!="Diego")
echo "NO ERES AURELIO NI DIEGO";



?>
