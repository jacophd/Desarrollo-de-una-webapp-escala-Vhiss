<?php
// Conexión a la base de datos
$servername = "127.0.0.1";
$username = "root";
$password = "";
$database = "mdpslogin";

$conn = new mysqli($servername, $username, $password, $database);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error en la conexión: " . $conn->connect_error);
}

// Obtener el ID proporcionado desde la solicitud
$id = $_GET['id'];

// Consulta SQL con el ID proporcionado
$sql = "SELECT * FROM pacData WHERE id = $id";
$result = $conn->query($sql);

// Crear un arreglo para almacenar los resultados
$resultados = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $resultados[] = $row;
    }
}

// Cerrar la conexión
$conn->close();

// Devolver los resultados como JSON
header('Content-Type: application/json');
echo json_encode($resultados);

?>