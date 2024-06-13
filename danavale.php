<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "previ";

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$sangre = $_POST['sangre'];
$cc = $_POST['cc'];
$hijos = isset($_POST['hijos']) ? $_POST['hijos'] : 'no';
$direccion = $_POST['direccion'];
$nacimiento = $_POST['fecha'];
$departamento = $_POST['depa'];
$municipio = $_POST['muni'];
$cita = $_POST['cita'];
$especialidad = $_POST['especialidad'];

$sql = "INSERT INTO medicina (nombre, apellido, sangre, cc, hijos, direccion, nacimiento, departamento, municipio, cita, especialidad)
VALUES ('$nombre', '$apellido', '$sangre', '$cc', '$hijos', '$direccion', '$nacimiento', '$departamento', '$municipio', '$cita', '$especialidad')";

if ($conn->query($sql)=== TRUE) {
  echo "Ha registrado su cita exitosamente";
}else {
  echo "Error al registrar su cita:" . $sql . "<br>" . $conn->error;
}

$conn->close()
?>