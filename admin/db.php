<?php
$servername = "localhost";
$username = "daniels";
$password = "MyP@ssword123";
$database = "prakse";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Savienojuma kļūda: " . $conn->connect_error);
}
?>
