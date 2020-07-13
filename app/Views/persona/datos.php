<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body bgcolor="#eeddss">

	<h1>DATOS PERSONALES</h1><br>

<table border="0">
	

	<?php foreach($datos as $per) { ?>
	<tr>
		<?php echo $per['nombre']; ?> <br>
		<?php echo $per['apellido1']; ?> <br>
		<?php echo $per['apellido2']; ?>
	</tr>
	<?php } ?>
</table>

</body>
</html>
