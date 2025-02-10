<?php
$host = "localhost";
$dbusername = "daniels";
$dbpassword = "MyP@ssword123";
$dbname = "prakse";

$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);

if ($conn->connect_error) {
    die("Savienojums neizdevās: " . $conn->connect_error);
}

$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT * FROM users WHERE username = ? LIMIT 1";
$stmt = $conn->prepare($query);
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 1) {
    $user = $result->fetch_assoc();

    if ($password === $user['password']) {
    } else {
        header("Location: config.php");
        exit();
    }
} else {
    header("Location: index.php");
    exit();
}

$stmt->close();
$conn->close();
?>
