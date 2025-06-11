<?php
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

$success = $error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['username'];
    $nim = $_POST['nim'];
    $password = $_POST['password'];
    $role = $_POST['role']; // Ambil role dari form

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $stmt = $pdo->prepare("INSERT INTO users (nama, nim, password, role) VALUES (?, ?, ?, ?)");
    try {
        $stmt->execute([$nama, $nim, $hashedPassword, $role]);
        header("Location: login.php");
        exit();
    } catch (PDOException $e) {
        $error = "Gagal mendaftar: " . $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Register</title>
  <link rel="stylesheet" href="../css/register.css">
</head>
<body>
  <div class="form-container">
    <form method="POST" class="form-box">
      <h2>Register</h2>
      <?php if ($error) echo "<p class='error'>$error</p>"; ?>
      <input type="text" name="username" placeholder="Nama" required>
      <input type="text" name="nim" placeholder="NIM" required>
      <input type="password" name="password" placeholder="Password" required>
      <button type="submit">Register</button>
      <p class="link-text">Sudah punya akun? <a href="login.php">Login</a></p>
    </form>
  </div>
</body>
</html>
