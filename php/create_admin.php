<?php
// Buat koneksi ke database
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

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Insert dengan role 'admin'
    $stmt = $pdo->prepare("INSERT INTO users (nama, nim, password, role) VALUES (?, ?, ?, 'admin')");
    try {
        $stmt->execute([$nama, $nim, $hashedPassword]);
        $success = "User admin berhasil dibuat!";
    } catch (PDOException $e) {
        $error = "Gagal membuat admin: " . $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Buat Admin Baru</title>
</head>
<body>
    <h2>Buat User Admin Baru</h2>
    <?php if ($success) echo "<p style='color:green;'>$success</p>"; ?>
    <?php if ($error) echo "<p style='color:red;'>$error</p>"; ?>

    <form method="POST">
        <input type="text" name="username" placeholder="Nama admin" required><br><br>
        <input type="text" name="nim" placeholder="NIM" required><br><br>
        <input type="password" name="password" placeholder="Password" required><br><br>
        <button type="submit">Buat Admin</button>
    </form>
</body>
</html>
