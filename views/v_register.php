<!DOCTYPE html><!--informa al navegador qué versión de HTML (o XML) se usó para escribir el documento.-->
<html lang="es"><!--Indica el comienzo del documento HTML.-->
<head><!--con esta etiqueta de cierre indicamos que queremos que hasta acá queremos que sea todo el 
    encabezado o los elementos que se ocuparán en el cuerpo-->
    <meta charset="UTF-8"><!--Define la sección de encabezado del documento HTML, que contiene información sobre 
    el documento, como el título y los metadatos.-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"><!--Este meta elemento configura la 
    vista del puerto (viewport) de la página para que se ajuste al ancho del dispositivo y se inicie con una escala
    inicial de 1.-->
    <title>Registro</title><!--Define el título de la página que aparecerá en la pestaña
    del navegador.-->
    <link rel="stylesheet" href="/Loginp03/CSS/style.css"><!--Enlaza la página con una hoja de estilos
    externa llamada "Style.css" que se encuentra en la carpeta "CSS" del directorio raíz del sitio web.-->
</head><!-- indica el cierre de la etiqueta del encabezado -->
<body><!--contiene todo el contenido visible de la página, como texto, imágenes, videos, formularios, etc.-->
    <form action="/Loginp03/views/register.php" method="post"> <!-- Controles de entrada y otros elementos del
     formulario -->
        <label for="id">Introduzca el id</label> <!--Etiqueta de instrucción-->
        <input type="number" id="id" name="id" required> <br><!--Elemento de entrada de datos-->
        <label for="usrName">Introduzca su nombre</label><!--Etiqueta de instrucción-->
        <input type="text" id="usuarioN" name="usrName" required> <br><!--Elemento de entrada de datos-->
        <label for="userPw">Introduzca el password</label><!--Etiqueta de instrucción-->
        <input type="password" id="UsP" name="userPw" required> <br><!--Elemento de entrada de datos-->
        <label for="usrLastName">Introduzca su apellido</label><!--Etiqueta de instrucción-->
        <input type="text" id="nomApell" name="usrLastName" required> <br><!--Elemento de entrada de datos-->
        <label for="age">Introduzca su edad</label><!--Etiqueta de instrucción-->
        <input type="number" id="edad" name="age" required> <br><!--Elemento de entrada de datos-->
        <label for="column">Selecciona la columna a mostrar:</label><!--Etiqueta de instrucción-->
        <select id="column" name="column"><!--Etiqueta de despliegue-->
            <option value="id">ID</option><!--Etiqueta de opción del menú desplegable-->
            <option value="usrName">Nombre de usuario</option><!--Etiqueta de opción del menú desplegable-->
            <option value="userPw">Contraseña</option><!--Etiqueta de opción del menú desplegable-->
            <option value="usrLastName">Apellido</option><!--Etiqueta de opción del menú desplegable-->
            <option value="age">Edad</option><!--Etiqueta de opción del menú desplegable-->
        </select> <br><!--Etiqueta de cierre del select-->
        <input type="submit" value="Registrar"><!--Etiqueta de entrada de datos-->
    </form><!--Etiqueta de cierre del form-->
</body><!--En esta etiqueta indicamos que hasta aquí llegará la estructura visible de nuestra página web-->
</html><!--En esta etiqueta indicamos que hasta aquí llegará la estructura visible de nuestra página web-->