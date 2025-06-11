<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: php/login.php");
    exit();
}

// Ambil role dari session, default ke 'client' kalau gak ada
$role = isset($_SESSION['role']) ? $_SESSION['role'] : 'client';
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <title>Dashboard</title>
</head>
<body>
  <h2>Selamat datang, <?= htmlspecialchars($_SESSION['username']) ?>!</h2>

  <?php if ($role === 'admin'): ?>
    <p>Anda login sebagai <strong>Admin</strong>.</p>
    <p><a href="admin_panel.php">Menu Admin</a></p>
  <?php else: ?>
    <p>Anda login sebagai <strong>Pengguna Biasa</strong>.</p>
  <?php endif; ?>

  <p><a href="php/logout.php">Logout</a></p>
</body>
</html>
