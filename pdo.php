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
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // 1. Retrieve and trim input
    $fullname = trim($_POST['fullname'] ?? '');
    $age      = trim($_POST['age'] ?? '');
    $course   = trim($_POST['course'] ?? '');
    $favorite = trim($_POST['favorite'] ?? '');
    $bio      = trim($_POST['bio'] ?? '');

$errors = [];

if (empty($errors)) {
        try {
            // Use schema-qualified table name
            $sql = "INSERT INTO studentdbs.studentprof (fullname, age, course, favorite, bio)
                    VALUES (:fullname, :age, :course, :favorite, :bio)";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([
                ':fullname' => $fullname,
                ':age'      => $age !== '' ? (int)$age : null,
                ':course'   => $course,
                ':favorite' => $favorite,
                ':bio'      => $bio
            ]);
            echo "Data inserted successfully!";

            header('Location: profile.php');  // redirect to the form page
        exit;
        } catch (PDOException $e) {
            echo "Database error: " . $e->getMessage();
        }
    } else {
        foreach ($errors as $error) {
            echo "<p style='color:red;'>$error</p>";
        }
    }
}


?>