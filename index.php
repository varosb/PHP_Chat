<?php
session_start();
session_destroy();


?>

<html>
 <head>
   <title>Seleccionar</title>
 </head>
<body>
 <form method="post" action="chat.php">
Nombre <input type="text" name="nombre"><br>
Mensaje <input type="text" name="mensaje">
<br>

<input type="submit" value="Enviar">
</form>


</body>
</html>

