<?php
session_start();
if (!isset($_SESSION['username']) || $_SESSION['role'] !== 'admin') {
    header("Location: login.php");
    exit();
}

// Jika sudah login sebagai admin, langsung redirect ke index.php
header("Location: ../index.php");
exit();
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Admin Dashboard</title>
</head>
<body>
  <h2>Halo, Admin <?= htmlspecialchars($_SESSION['username']) ?>!</h2>
  <p><a href="logout.php">Logout</a></p>
</body>
</html>
