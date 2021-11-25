<?php

	//Cream objecte mysqli a variable conexio
	$conn = new mysqli("localhost", "Afont", "", "LloguerVacacional");

	//Cream objecte statement amb la consulta a la base de dades
	$stmt = $conn->prepare("SELECT * FROM cases ORDER BY poblacio");

	if ($conn->connect_error){
		die("Connection failed: " . $conn->connect_error);
	}

	//Executam la consulta i retorna el resultat amb les dades
	$stmt->execute();
	$result = $stmt->get_result();

	//Bucle que printeara etiquetes options
	while($row = mysqli_fetch_array($result)) {
		echo "<option value='".$row['poblacio']."'>".$row['poblacio']."</option>";

	}
?>