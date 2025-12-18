
<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}


$DB_HOST = '127.0.0.1';
$DB_NAME = 'oceanstars_db';
$DB_USER = 'root';
$DB_PASS = ''; // change if needed

$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
];

try {
    $pdo = new PDO("mysql:host=$DB_HOST;dbname=$DB_NAME;charset=utf8mb4", $DB_USER, $DB_PASS, $options);
} catch (Exception $e) {
    die("DB Connection failed: " . $e->getMessage());
}
 



// <?php
// $host = "localhost";
// $user = "root";
// $pass = "";
// $db   = "oceanstars";

// try {
//     $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
//     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// } catch (PDOException $e) {
//     die("DB Error: " . $e->getMessage());
// }




