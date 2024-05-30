<?php
 // Conexión a la base de datos
 $server = "localhost"; //Esta línea especifica el servidor de la base de datos
 $dbusername = "root";//Especifica el nombre de usuario de la base de datos
 $dbpassword = "";//Especifica la contraseña de la base de datos
 $dbname = "p03";//Especifica el nombre de la base de datos a conectar

 $conn = new mysqli($server, $dbusername, $dbpassword, $dbname); /*Se crea un objeto para la base datos y 
 sus campos*/

 // Verifica la conexión
 if ($conn->connect_error) {//Condicional para ver si hay un error al conectarse a la base de datos
    die("Connection failed: " . $conn->connect_error);//caso de haber un error mostrar este mensaje
}

//Recoger los datos del formulario
$usrName = $_POST['usrName'];//Para el nombre del usuario
$userPw = $_POST['userPw'];//Para la contraseña del usuario

//crear consulta que se desea hacer en la base de datos
$sql = "SELECT * FROM usuario WHERE usrName = '$userName' AND userPw = '$password'";

//Ejecuta la consulta 
$result = $conn->qurey($sql);

//verifica si el usuario existe
if($result->num_rows > 0){
    include('views/logged.html');//si existe 

}else{
    include('views/errorLogin.html');//si no existe
}

$conn->closed();//Y se cierra la conexión con la base de datos 
?>