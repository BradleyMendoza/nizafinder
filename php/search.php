<?php
include 'connect.php';

$search = $_GET['search'];
$sql = "SELECT ps.codigo AS id, ps.clase, ci.resumen, ps.descripcion AS producto_servicio 
            FROM productos_servicios ps, clases_internacionales ci 
            WHERE ps.clase = ci.clase AND ps.descripcion LIKE '%$search%'";

$result = $conn->query($sql);

$rows = array();
while($r = mysqli_fetch_assoc($result)) {
    $rows[] = $r;
}
echo json_encode($rows);

$conn->close();
?>
