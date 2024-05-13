<?php
define('ROOT_URL', 'http://localhost/~maiu/blog_Maiu/');
$servername = "localhost";
$username = "maiu"; // Your database username
$password = "Parool1"; // Your database password
$dbname = "blog";
$dsn = "mysql:host=$servername;dbname=$dbname";
try {
    $pdo = new PDO($dsn, $username, $password);
    //$conn = new PDO("mysql:host=$servername;blog=$dbname", $username, $password);
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connected successfully"; 
} catch(PDOException $e) {
    throw new PDOException("Connection failed: ". $e->getMessage());
    //echo "Connection failed: " . $e->getMessage();
}
if($pdo == true){
    echo "Connected successfully hopefully";
} else {
    echo "Connection fucking failed";
}
?>

