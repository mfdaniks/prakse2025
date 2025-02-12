<?php
$parole = "MyP@ssword123";
$hashota_parole = password_hash($parole, PASSWORD_DEFAULT);

echo "Hashotā parole: " . $hashota_parole;
?>
