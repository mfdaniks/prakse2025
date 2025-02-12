<?php
require 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $query = "INSERT INTO users (username, password) VALUES (?, ?)";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ss", $username, $hashed_password);
    
    if ($stmt->execute()) {
        echo "Lietotājs veiksmīgi reģistrēts!";
    } else {
        echo "Kļūda: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>

