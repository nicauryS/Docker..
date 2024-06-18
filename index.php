<?php
$servername = getenv('MYSQL_HOST') ?: 'db';
$username = getenv('MYSQL_USER') ?: 'testuser';
$password = getenv('MYSQL_PASSWORD') ?: 'testpassword';
$dbname = getenv('MYSQL_DATABASE') ?: 'testdb';


// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
echo "Conexión exitosa a la base de datos";
echo "\n";
echo "<h2> Hola Dania sierra  </h2>";
?>
