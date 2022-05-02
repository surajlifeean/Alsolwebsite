<?php
$servername = "localhost";
$username = "root";
$password = "";

// try {
//   $conn = new PDO("mysql:host=$servername;dbname=alsol_user", $username, $password);
//   // set the PDO error mode to exception
//   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//   // echo "Connected successfully";
// } catch(PDOException $e) {
// }

$conn = mysqli_connect($servername, $username , $password,"alsol_user");
// Check connection
if (mysqli_connect_errno()){
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}


?>