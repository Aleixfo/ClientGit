<?php
header("Content-Type: application/json; charset=UTF-8");

$conn = new mysqli("localhost", "Afont", "", "concesionari");
$stmt = $conn->prepare("SELECT * FROM marca ORDER BY nom");
$stmt->execute();
$result = $stmt->get_result();
$outp = $result->fetch_all(MYSQLI_ASSOC);

echo json_encode($outp);
?>