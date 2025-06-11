<?php
session_start();

$host = "localhost";
$dbname = "hmdt";
$dbuser = "root";
$dbpass = "";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $dbuser, $dbpass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Koneksi gagal: " . $e->getMessage());
}

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Ambil user dari DB
    $stmt = $pdo->prepare("SELECT * FROM users WHERE nama = ?");
    $stmt->execute([$username]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

if ($user && password_verify($password, $user['password'])) {
    $_SESSION['username'] = $user['nama'];
    $_SESSION['user_id'] = $user['id'];
    $_SESSION['role'] = $user['role']; // Tambahkan role

    // Redirect berdasarkan role
    if ($user['role'] === 'admin') {
        header("Location: admin_dashboard.php");
    } else {
        header("Location: welcome.html");
    }
    exit();
}

}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <link rel="stylesheet" href="../css/login.css">
</head>
<body>
  <div class="login-container">
    <form method="POST" class="login-box">
      <h2>Login</h2>
      <?php if ($error) echo "<p class='error'>$error</p>"; ?>
      <input type="text" name="username" placeholder="Nama" required>
      <input type="password" name="password" placeholder="Password" required>
      <button type="submit">Masuk</button>
      <p class="register-link">Belum punya akun? <a href="register.php">Daftar di sini</a></p>
    </form>
  </div>
</body>
</html>
