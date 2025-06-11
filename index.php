<?php
session_start();
error_reporting(0);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $pdo->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->execute([$username]);
    $user = $stmt->fetch();

    if ($user && password_verify($password, $user['password'])) {
    $_SESSION['username'] = $user['nama'];
    $_SESSION['role'] = $user['role'];
    header("Location: index.php");  // langsung ke index.php
    exit();
}

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['username'] = $username;
        header("Location: ../welcome.html"); // ganti ke lokasi file welcome.html
        exit();
    } else {
        $error = "Username atau password salah!";
    }
}
?>


<?php include('php/navbar.php'); ?>
<!DOCTYPE html>
<html lang="id">
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HMDT 2025</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
 <header class="navbar">
  <div class="navbar-container">
    <!-- Kiri: Logo dan Teks -->
    <div class="navbar-left">
      <img src="image/gambar.jpg" alt="Logo HMDT" class="logo">
      <div class="logo-text">
        <div class="title">HMDT</div>
        <div class="subtitle">Teknologi Telekomunikasi</div>
      </div>
    </div>

    <!-- Tengah: Navigation -->
    <nav class="navbar-nav">
      <a href="#">Home</a>
      <a href="#">About</a>
      <a href="#">Student Info</a>
      <a href="#">Articles</a>
      <a href="contact.php">Contact</a>
    </nav>

    <!-- Kanan: Tombol -->
    <div class="navbar-right">
      <button class="btn">Partnership</button>
      <button class="btn"><a href="https://www.instagram.com/dtt.store_/">Visit Store</a></button>
      <a href="php/login.php" class="btn btn-outline-secondary">Login</a>
    </div>
  </div>
</header>



  <!-- Hero Section -->
<section class="hero">
  <div class="hero-container">
    <div class="hero-text">
      <h1>Welcome to<br><span>Himpunan Mahasiswa Diploma Teknik Telekomunikasi</span></h1>
      <p>Himpunan Mahasiswa Diploma Teknik Telekomunikasi atau bisa disingkat HMDT, merupakan sebuah Himpunan yang berada di prodi Teknik Telekomunikasi yang berada di Fakultas Ilmu Terapan</p>
    </div>
    <div class="hero-img">
      <img src="image/rektorat1.png" alt="Gedung Bangkit" class="hero-image">
    </div>
  </div>
</section>

  <!-- Video Section -->
  <section class="video-profile">
    <div class="video-profile-container">
      <div class="video-profile-video">
        <iframe width="100%" height="315"
          src="https://www.youtube.com/embed/WpS9RMCMn5U?si=V59sjrr8UhlQc2ku"
          title="Video Profil HMDT"
          frameborder="20"
          allowfullscreen>
        </iframe>
      </div>
      <div class="video-profile-text">
        <h4 class="video-subtitle">Who We Are</h4>
        <h2 class="video-title">Video Profile</h2>
        <p class="video-desc">
          With the spirit of Empowering Inclusivity, BEM FEB UI is here to create a more inclusive space, empower every voice, and embrace diversity in all aspects of life.
        </p>
        <a href="https://youtu.be/WpS9RMCMn5U?si=V59sjrr8UhlQc2ku" class="video-button" target="_blank">Discover More</a>
      </div>
    </div>
  </section>

  <!-- Vision & Mission Section -->
  <section class="vision-mission">
    <div class="vision-mission-container">
      <div class="vision-mission-text">
        <h4 class="vision-mission-subtitle">Who We Are</h4>
        <h2 class="vision-mission-title">Our Vision</h2>
        <p class="vision-mission-paragraph">
          Menjadi program vokasi unggul dalam riset terapan dan kewirausahaan pada tahun 2028 yang berperan aktif dalam pengembangan teknologi terapan di bidang Telekomunikasi Digital
        </p>
        <h2 class="vision-mission-title">Our Mission</h2>
        <ul class="vision-mission-list">
          <li>➤ Mengembangkan dan menyelenggarakan pendidikan vokasi berstandar Internasional di bidang Teknologi Telekomunikasi dan menghasilkan lulusan yang mampu mengembangkan profesionalisme dalam bidang Telekomunikasi Digital.</li>
          <li>➤ Mengembangkan, menghasilkan, menyebarluaskan, dan menerapkan teknologi dan inovasi terapan di bidang Teknologi Telekomunikasi Digital pada industri berstandar Internasional.</li>
          <li>➤ Mengembangkan kerjasama dengan industri dan masyarakat nasional dan internasional.</li>
          <li>➤ Mengembangkan keterampilan untuk menjadi technopreneur yang mampu mengembangkan usaha secara mandiri di bidang Telekomunikasi.</li>
        </ul>
      </div>

      <div class="vision-mission-image-wrapper">
        <img src="image/Anggota.jpg" alt="Foto HMDT" class="vision-mission-image">
        <div class="vision-mission-badge">
          <p class="year">2025</p>
          <p class="label">HMDT</p>
        </div>
      </div>
    </div>
  </section>

<footer class="footer">
  <div class="footer-container">
    
    <!-- Quick Links -->
    <div class="footer-section">
      <h4>Quick Links</h4>
      <ul>
        <li><a href="#">High Achiever</a></li>
        <li><a href="#">Competition</a></li>
        <li><a href="#">Scholarship</a></li>
      </ul>
    </div>

    <!-- Logo & Socials -->
    <div class="footer-section center">
      <img src="image/logo.png" alt="HMDT" class="footer-logo">
      <div class="social-icons">
        <a href="https://x.com/infohmdt"><i class="fab fa-twitter"></i></a>
        <a href="https://www.youtube.com/@hmdtuniversitastelkom3275"><i class="fab fa-youtube"></i></a>
        <a href="https://www.instagram.com/infohmdt?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="><i class="fab fa-instagram"></i></a>
        <a href="https://www.tiktok.com/@infohmdt_?is_from_webapp=1&sender_device=pc"><i class="fab fa-tiktok"></i></a>
      </div>
    </div>

    <!-- Contact Info -->
    <div class="footer-section">
      <h4>Contact Info</h4>
      <ul>
        <li><i class="fas fa-phone"></i> 081234567890 (Partnership)</li>
        <li><i class="fas fa-comments"></i> 081234567890 (Organization & NGO)</li>
        <li><i class="fas fa-envelope"></i> hmdt@gmail.com</li>
      </ul>
    </div>
  </div>

  <div class="footer-bottom">
    <p>&copy; 2025 HMDT - All rights reserved.</p>
  </div>
</footer>


</body>
</html>