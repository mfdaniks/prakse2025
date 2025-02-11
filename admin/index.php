<?php
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="lv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panelis</title>
    <link rel="stylesheet" href="AdminLTE/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="AdminLTE/plugins/bootstrap/css/bootstrap.min.css">
</head>
<body class="hold-transition sidebar-mini">

<div class="wrapper">
    <?php include 'header.php'; ?>

    <div class="content-wrapper">
        <div class="container mt-4">
            <?php
            if (isset($_GET['page'])) {
                $page = $_GET['page'];
                $allowed_pages = ['dashboard', 'products', 'gallery', 'settings'];

                if (in_array($page, $allowed_pages)) {
                    include $page . ".php";
                } else {
                    echo "<h2>Kļūda: Lapa nav atrasta!</h2>";
                }
            } else {
                include "dashboard.php";
            }
            ?>
        </div>
    </div>

    <?php include 'footer.php'; ?>
</div>

<script src="AdminLTE/plugins/jquery/jquery.min.js"></script>
<script src="AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="AdminLTE/dist/js/adminlte.min.js"></script>

</body>
</html>
