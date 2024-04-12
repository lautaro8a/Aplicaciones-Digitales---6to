<?php
// Datos de conexión a la base de datos
$servername = "127.0.0.1";
$username = "root@localhost";
$dbname = "Colegio";

// Crear conexión
$conn = new mysqli($servername, $username, $dbname);

// Comprobar conexión
if ($conn->connect_error) {
    die("La conexión ha fallado: " . $conn->connect_error);
}

// Obtener los datos del formulario
$Idalumno = $_post['Id alumno']
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$edad = $_POST['edad'];

// Preparar la consulta SQL para insertar los datos en la base de datos
$sql = "INSERT INTO alumnos (Id alumno, nombre, apellido, edad) VALUES ('$Idalumno', '$nombre', '$apellido', $edad)";

if ($conn->query($sql) === TRUE) {
    echo "Datos insertados correctamente";
} else {
    echo "Error al insertar datos: " . $conn->error;
}

// Cerrar la conexión
$conn->close();
?>
