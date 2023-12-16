//Nama: Henrycarnegie
//Nim: 121140054
//Kelas Praktikum: RC
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "prak8";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>