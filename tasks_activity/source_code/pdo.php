<?php
$host = "localhost";
$dbname = "studentdb";
$username = "postgres"; // default PostgreSQL username
$port = "5432";         // default PostgreSQL port
$password = "ASCDstephen13";

try {
    $pdo = new PDO("pgsql:host=$host;port=$port;dbname=$dbname", $username, $password);

    // Show errors properly
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    echo "Database connected successfully!";

} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>