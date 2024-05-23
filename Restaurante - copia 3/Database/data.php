

<?php

error_reporting(E_ALL); ini_set('display_errors', 1);

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "reserva";

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}


$nombre = $_POST['nombre'];
$email = $_POST['email'];
$numero = $_POST['numero'];
$direccion = $_POST['direccion'];
$fecha_reserva = $_POST['fecha_reserva'];
$hora_reserva = $_POST['hora_reserva'];
$personas = $_POST['personas'];
$mensaje = $_POST['mensaje'];


$sql = "INSERT INTO reserva_resta (no_reserva, nombre, email, numero_per, mensaje	numero, direccion, fecha, hora)
        VALUES ('$nombre', '$email', '$numero', '$direccion', '$fecha_reserva', '$hora_reserva', '$personas', '$mensaje')";

if ($conn->query($sql) === TRUE) {
    echo "Reserva realizada con éxito";
} else {
    echo "Error al realizar la reserva: " . $conn->error;
}

$conn->close();
?>
