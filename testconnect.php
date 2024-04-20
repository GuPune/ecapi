<?php
$servername = "localhost";
$database = "u501804731_kku_db";
$username = "u501804731_root";
$password = "p@ssw0rd";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
mysqli_close($conn);
?>