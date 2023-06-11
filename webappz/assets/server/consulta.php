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
$sql = "SELECT * FROM pacData WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();

// Obtener los resultados
$resultados = array();

if ($result->num_rows > 0) {
    $resultados = $result->fetch_assoc();
}

// Cerrar la conexión
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Resultado de consulta</title>
</head>
<body>
    <h2>Resultado de consulta</h2>

    <?php if (!empty($resultados)) : ?>
        <form>
            <?php foreach ($resultados as $campo => $valor) : ?>
                <div>
                    <label for="<?php echo $campo; ?>"><?php echo $campo; ?>:</label>
                    <input type="text" id="<?php echo $campo; ?>" name="<?php echo $campo; ?>" value="<?php echo $valor; ?>" readonly>
                </div>
            <?php endforeach; ?>
        </form>
    <?php else : ?>
        <p>No se encontraron resultados.</p>
    <?php endif; ?>
</body>
</html>