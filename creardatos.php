<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "demo";
$conn = new mysqli($servername, $username, $password); 
if ($conn->connect_error) {
    die("No se pudo establecer conexión: " . $conn->connect_error);
}
echo "Conexión establecida<br>";
$sql = "CREATE DATABASE demo CHARSET utf8 COLLATE utf8_spanish_ci";
if (mysqli_query($conn, $sql)) {
    echo "Base de datos demo creada<br>";
} else {
    echo "Error al crear base de datos demo: " . $conn->error . "<br>";
}
mysql_select_db("demo",$conn);

$sql = "CREATE TABLE emails (email VARCHAR(50),nombre VARCHAR(50),apellido VARCHAR(50),fecha_nacimiento DATE)";

if ($conn->query($sql)) {
    echo "Tabla creada<br>";
} else {
    echo "Error al crear tabla: " . $conn->error. "<br>";
}

$sql = "INSERT INTO emails(email, nombre, apellido, fecha_nacimiento)
VALUES ('juan1245@gmail.com','Juan', 'Pérez', '2000-8-20')";

if ($conn->query($sql)) {
    echo "Nueva fila creada<br>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error  . "<br>";
}
$sql = "INSERT INTO emails(email, nombre, apellido, fecha_nacimiento)
VALUES ('Eli5423@hotmail.com','Eliana', 'Rodríguez', '2001-5-12')";

if ($conn->query($sql)) {
    echo "Nueva fila creada<br>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error . "<br>";
}

$conn->close();
?>