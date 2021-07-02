<?php

// DATABASE CONFIG 1
class config {
    private $username = 'root';
    private $password = '';
    private $pdo = null;

    public function conn(){
        try {
            $this->pdo = new PDO('mysql:host=localhost;dbname=api',$this->username,$this->password);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
        return $this->pdo;
    }
}

// DATABASE CONFIG 2
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'api');
 
try{
    $pdo = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
    die("ERROR: Could not connect. " . $e->getMessage());
}

// DATABASE CONFIG 3
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "api";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

?>