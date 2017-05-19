<?php 
include_once "conexion.php"; 
	$sql = "SELECT carne,nombre from usuarios order by carne";
	$result = mysql_query($sql);	
	echo 'Bienvenido.';	
	echo "<table border = 1>";
	echo "<tr><th>Carnet</th> <th>Nombre</th></tr>";
	while($row = mysql_fetch_object($result)){ 
		$carne = $row->carne;
		$nombre = $row->nombre;
		echo "<tr>";
		echo "<td>".$carne."</td>";
		echo "<td>".$nombre."</td>";
		echo"</tr>";			
	} 
	echo "</table>";	
    	echo '<a href="logout.php">Logout</a>';					
?>
