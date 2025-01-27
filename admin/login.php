<?php
// Pieslēgšanās datubāzei
$host = "localhost"; // Vai datubāzes adrese
$dbusername = "daniels"; // Tavs datubāzes lietotājvārds
$dbpassword = "MyP@ssword123"; // Tavs datubāzes parole
$dbname = "prakse"; // Tavs datubāzes nosaukums

$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);

// Pārbaude, vai savienojums izdevies
if ($conn->connect_error) {
    die("Savienojums neizdevās: " . $conn->connect_error);
}

// Iegūstam ievadītos datus
$username = $_POST['username'];
$password = $_POST['password'];

// Sagatavojam SQL vaicājumu
$query = "SELECT * FROM users WHERE username = ? LIMIT 1";
$stmt = $conn->prepare($query);
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();

// Pārbaudām, vai lietotājs eksistē
if ($result->num_rows === 1) {
    $user = $result->fetch_assoc();

    // Salīdzinām ievadīto paroli ar šifrēto paroli
    if ($password === $user['password']) { // Salīdzinām nešifrētas paroles
        echo "Esi pieslēdzies";
    } else {
        header("Location: index.php"); // Atgriežamies uz pieslēgšanās lapu
        exit();
    }
} else {
    header("Location: index.php"); // Atgriežamies uz pieslēgšanās lapu
    exit();
}

$stmt->close();
$conn->close();
?>
