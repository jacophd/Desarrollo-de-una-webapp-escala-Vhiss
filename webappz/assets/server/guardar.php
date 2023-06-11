<?php
// Obtener los datos del formulario

$nombre = $_POST['nombre']; 
$cedul = $_POST['cedul'];
$criteriO1 = $_POST['criteriO1'];
$criteriO2 = $_POST['criteriO2'];
$criteriO3 = $_POST['criteriO3'];
$criteriO4 = $_POST['criteriO4'];
$criteriO5 = $_POST['criteriO5'];
$acrofobia1 = $_POST['acrofobia1'];

// Conexión a la base de datos MySQL
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "mdpslogin";

$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "CREATE TABLE IF NOT EXISTS pacdata (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255),
    cedul INT,
    criteriO1 INT,
    criteriO2 INT,
    criteriO3 INT,
    criteriO4 INT,
    criteriO5 INT,
    acrofobia1 VARCHAR(255)
)";

if ($conn->query($sql) === TRUE) {
    echo "Tabla pacdata creada exitosamente";
} else {
    echo "Error al crear la tabla pacdata: " . $conn->error;
}

// Verificar la conexión
if ($conn->connect_error) {
    die("Error al conectar a la base de datos: " . $conn->connect_error);
}

// Insertar los datos en la tabla correspondiente
$sql = "INSERT INTO pacData (nombre, cedul, criteriO1, criteriO2, criteriO3, criteriO4, criteriO5, acrofobia1) VALUES ('$nombre','$cedul', '$criteriO1', '$criteriO2', '$criteriO3', '$criteriO4', '$criteriO5','$acrofobia1')";

if ($conn->query($sql) === TRUE) {
    echo "Datos guardados correctamente";
} else {
    echo "Error al guardar los datos: " . $conn->error;
}

$conn->close();
?>