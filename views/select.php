<?php
  // Conexión a la base de datos
  $dbusername = "root";// Nombre de usuario de la base de datos
  $dbpassword = "";// Contraseña de la base de datos
  $dbname = "p03";// Nombre de la base de datos

  // Conexión a la base de datos mediante una intancia
  $conn = new mysqli("localhost", $dbusername, $dbpassword, $dbname);

  // Verifica la conexión
  if ($conn->connect_error) {// Comprueba si hay errores de conexión
    die("Error en la conexión: " . $conn->connect_error);/* Si hay un error, muestra un mensaje de error y detiene el 
    script*/
}

// Consulta para obtener los datos de la tabla usuario
$result = $conn->query("SELECT * FROM usuario");/*Realiza una consulta SQL para seleccionar todos los registros 
de la tabla "usuario"*/

if($result ->num_rows >0){// Si se encontraron filas en el resultado de la consulta
    echo "<table>";// Empieza una tabla HTML para mostrar los datos
    echo "<tr><th>ID</th><th>Nombre</th><th>Contraseña</th></tr>";  // Crea una fila de encabezados de tabla
    while($row = $result ->fetch_assoc()){// Itera sobre cada fila del resultado de la consulta
        echo "<tr><td>" . $row["id"] ."</td><td>" . $row["usrName"] 
        ."</td><td>" . $row["usrPw"] ."</td><td>". $row["usrLastName"]
         ."</td><td>". $row["age"] ."</td><td>";  // Imprime los datos de cada fila en una fila de tabla HTML
    }
    echo "</table>";// Cierra la etiqueta de la tabla HTML
}else {
    echo "No se encontraron registros.";/*Si no se encontraron registros, muestra un mensaje indicando
     que no se encontraron registros*/
}

$conn->close();// Cierra la conexión a la base de datos
?>