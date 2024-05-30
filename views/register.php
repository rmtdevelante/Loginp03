<?php
//var_dump($_POST);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $usrName = $_POST["usrName"];
    $userPw = $_POST["userPw"];
    $usrLastName = $_POST["usrLastName"];
    $age = $_POST["age"];
    
    // Conexión a la base de datos
    $server = "localhost"; //Esta línea especifica el servidor de la base de datos
    $dbusername = "root";//Especifica el nombre de usuario de la base de datos
    $dbpassword = "";//Especifica la contraseña de la base de datos
    $dbname = "p03";//Especifica el nombre de la base de datos a conectar

    $conn = new mysqli($server, $dbusername, $dbpassword, $dbname);
    // Verifica la conexión
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepara la sentencia SQL
    //Se prepara una inserción de datos en la tabla usuario en solamente 5 campos
    $stmt = $conn->prepare("INSERT INTO usuario (id, usrName, usrPw, usrLastName, age) VALUES (?, ?, ?, ?, ?)");
    if ($stmt === false) {//condicional para saber si se pudo conectar a la base de datos
        die("Error preparing statement: " . $conn->error);//mensaje en caso de haber error 
    }

    //Función para vincuanlar las variables con la base de datos.
    $stmt->bind_param("isssi", $id, $usrName, $userPw, $usrLastName, $age);

    // Ejecuta la sentencia SQL
    //Condicional para saber si se ejecutó bien la 
    if ($stmt->execute()) {
        echo "Usuario registrado con éxito";//En caso de que se puede ejecutar la sentencia
    } else {
        echo "Error executing statement: " . $stmt->error;//En caso de que no
    }
 
    // Cierra la sentencia y la conexión
    $stmt->close();
    $conn->close();
}
?>