<?php 


/* 
Creació de fitxers JSON a partir del contingut d'una taula de la BBDD. Utilitzar PHP.

Fitxer 1: Taula sense claus externes.
Fitxer 2: Taula amb 1 o més claus externes.
*/

/* 
Creació de fitxers JSON a partir del contingut d'una taula de la BBDD. Utilitzar PHP.

Fitxer 1: Taula sense claus externes.
Fitxer 2: Taula amb 1 o més claus externes.
*/


header("Content-Type: application/json; charset=UTF-8");

$conn = new mysqli("localhost", "root", "admin", "concesionari");
$stmt = $conn->prepare("SELECT * FROM marca ORDER BY nom");
$stmt->execute();
$result = $stmt->get_result();
$outp = $result->fetch_all(MYSQLI_ASSOC);

echo json_encode($outp);



?>