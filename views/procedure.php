<?php
// Verifica si se recibió una solicitud POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Nombre de la columna que el usuario desea seleccionar
    $columnName = $_POST["column"]; // El nombre de la columna se pasa desde el formulario
    
    // Conexión a la base de datos
    $server = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "p03";

    // Crea la conexión
    $conn = new mysqli($server, $dbusername, $dbpassword, $dbname);
    
    // Verifica la conexión
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepara la llamada al procedimiento almacenado
    $stmt = $conn->prepare("CALL SelectColumnFromUsuario(?)");
    if ($stmt === false) {
        die("Error preparing statement: " . $conn->error);
    }

    // Define el nombre de la columna que deseas seleccionar
    $stmt->bind_param("s", $columnName);

    // Ejecuta la llamada al procedimiento almacenado
    if ($stmt->execute()) {
        // Procesa los resultados
        $result = $stmt->get_result();
        while ($row = $result->fetch_assoc()) {
            echo $row[$columnName] . "<br>";
        }
        $result->free();
    } else {
        echo "Error executing statement: " . $stmt->error;
    }

    // Cierra la conexión
    $stmt->close();
    $conn->close();
}
?>