<html>
 <head>
   <title>CHAT</title>
 </head>
<body>


<?php
error_reporting(E_ALL & ~E_NOTICE);
//creamos la sesion
session_start();
$_SESSION['nombre'] = $_REQUEST['nombre'];
$admitidos=array('Diego','Aurelio');

// FIN SESION
$mensaje=$_REQUEST["mensaje"];

//CHAT



//ADMITIDOS - ENTRAR
if (in_array($_SESSION['nombre'], $admitidos, true)) {

echo "<center> <img src='admin.png'><br> </center>";
echo "<center>Bienvenido ","<b>", $_SESSION['nombre'],"</b>. Tu cuenta es<font color='red'> <i>administrador</i> </font> </center> ";

// MENSAJE ADMIN


echo "<b>Chat: </b>";
@$f1=fopen("listado.txt","a","<br>");

	if ($f1!=null)
	 {
	   fwrite($f1,"<b><p align='right'> <img src='admin.png'> <font color='red'>".$_SESSION['nombre'].": </font> </b>"."<i>".$mensaje."</i>"." <b> < </b> </p>");
	   echo "<b> <font color='green'>ON</font></b><br>----------------<br><br>";
	   fclose($f1);
	 }
	else 
	    echo "<b> <font color='red'>OFF</font></b><br>----------------";

echo `cat listado.txt`;

}
else {


// NO ADMITIDOS
if ($_SESSION['nombre']!=$admitidos)
			//echo "NO ERES:";
			//foreach($admitidos as $valor){
		        //echo "<br> -". $valor;

echo "<center> <img src='limitado.png'><br> </center>";
echo "<center>Bienvenido ","<b>", $_SESSION['nombre'],"</b>. Tu cuenta es<font color='blue'> <i>limitada</i> </font>    </center> ";

//caja mensaje

echo "<b>Chat: </b>";
@$f1=fopen("listado.txt","a","<br>");

	if ($f1!=null)
	 {
	   fwrite($f1,"<b><p align='left'> > <img src='limitado.png' height='25' width='25'>&nbsp;<font color='blue'>".$_SESSION['nombre'].": </font></b>"."<i>".$mensaje."</i>"."</p>");
	   echo "<b> <font color='green'>ON</font></b><br>----------------<br><br>";
	   fclose($f1);
	 }
	else 
	    echo "<b> <font color='red'>OFF</font></b><br>----------------";

echo `cat listado.txt`;


}



?>
