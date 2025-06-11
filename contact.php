<?php
session_start();
$is_logged_in = isset($_SESSION['user_id']);  // sesuaikan key session login kamu
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Contact Us</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<header class="bg-white shadow-md py-4 px-6 flex items-center justify-between">
  <!-- Logo Text + Logo Image -->
  <div class="flex items-center space-x-4">
    <div class="text-2xl font-bold text-gray-800">HMDT</div>
    <div class="w-12 h-12">
      <img src="image/gambar.jpg" alt="Logo HMDT" class="h-full w-full object-cover rounded-full" />
    </div>
  </div>

  <!-- Navigation -->
<nav class="hidden md:flex space-x-6 text-sm font-medium text-gray-700">
  <a href="index.php" class="hover:text-blue-600">Home</a>
  <a href="#" class="hover:text-blue-600">About</a>
  <a href="#" class="hover:text-blue-600">Student Info</a>
  <a href="#" class="hover:text-blue-600">Articles</a>
  <a href="contact.php" class="hover:text-blue-600">Contact</a>
</nav>


  <!-- Buttons -->
  <div class="hidden md:flex space-x-3">
    <button class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 transition">Partnership</button>
    <button class="bg-gray-800 text-white px-4 py-2 rounded-md hover:bg-gray-900 transition">Visit Store</button>
  </div>
</header>

<body class="bg-gradient-to-b from-orange to-blue-50 text-gray-800 font-sans">

  <!-- Header Title -->
  <section class="text-center py-12">
    <h1 class="text-4xl font-bold text-orange-950">Pesan dan Kesan</h1>
    <p class="text-lg mt-2">We would love to hear from you.</p>
  </section>

  <!-- Contact Section -->
  <section class="max-w-6xl mx-auto px-6 md:flex md:gap-8 py-10">
  <!-- Contact Info -->
 <div class="relative rounded-lg p-8 w-full md:w-1/2 shadow-md overflow-hidden text-white">
  <!-- Layer gambar background -->
  <div class="absolute inset-0 bg-center bg-cover opacity-65" 
       style="background-image: url('bg-contact.jpg');"></div>

  <!-- Layer semi-overlay agar teks tetap kontras (optional) -->
  <div class="absolute inset-0 bg-orange-900/40"></div>

  <!-- Konten utama -->
  <div class="relative z-10">
    <h2 class="text-sm uppercase text-white mb-2">Pesan dan Kesan</h2>
    <h3 class="text-2xl font-semibold mb-4">Don't hesitate to contact us for more information.</h3>
    <p class="mb-6 text-sm text-white/90">
      If you have questions, please contact us via the contact form or contact information on this page.
    </p>
    <ul class="space-y-4 text-white text-base">
      <li class="flex items-center">
        <span class="text-orange-300 mr-3">📞</span>
        <span><strong>Organization Relations & Non-Profit (Humas)</strong><br>0891 2345 6789</span>
      </li>
      <li class="flex items-center">
        <span class="text-orange-300 mr-3">📞</span>
        <span><strong>Project & Media Partnership (Birpro)</strong><br>0891 2345 6789</span>
      </li>
      <li class="flex items-center">
        <span class="text-orange-300 mr-3">📧</span>
        <span><strong>Contact Us (Humas)</strong><br>hmdt@gmail.com</span>
      </li>
    </ul>
  </div>
</div>

    <!-- Contact Form -->
    <div class="bg-white rounded-lg p-8 mt-8 md:mt-0 w-full md:w-1/2 shadow-md">
      <h3 class="text-2xl font-bold text-orange-950 mb-6">Send us a message</h3>
      <form class="space-y-4">
        <div class="flex gap-4">
          <input type="text" placeholder="Name" class="w-1/2 border border-gray-300 px-4 py-2 rounded-md" required>
          <input type="text" placeholder="Phone" class="w-1/2 border border-gray-300 px-4 py-2 rounded-md" required>
        </div>
        <input type="email" placeholder="Email" class="w-full border border-gray-300 px-4 py-2 rounded-md" required>
        <input type="text" placeholder="Subject" class="w-full border border-gray-300 px-4 py-2 rounded-md" required>
        <textarea placeholder="Message" class="w-full border border-gray-300 px-4 py-2 rounded-md h-32" required></textarea>
<?php if ($is_logged_in): ?>  
  <button type="submit" class="w-full bg-orange-800 text-white py-2 rounded-md hover:bg-orange-900">SEND</button>
<?php else: ?>
  <button type="button" onclick="redirectToLogin()" class="w-full bg-orange-800 text-white py-2 rounded-md hover:bg-orange-900">SEND</button>
<?php endif; ?>

      </form>
    </div>
  </section>

<footer class="bg-white border-t border-gray-300 mt-12 text-gray-800 font-sans">
  <div class="max-w-5xl mx-auto flex flex-col md:flex-row justify-center items-start gap-10 px-6 py-10">

    <!-- Quick Links -->
    <div class="flex-1 max-w-xs text-right">
      <h4 class="font-bold mb-4 text-lg">Quick Links</h4>
      <ul class="space-y-2 text-sm">
        <li><a href="#" class="hover:text-blue-600">High Achiever</a></li>
        <li><a href="#" class="hover:text-blue-600">Competition</a></li>
        <li><a href="#" class="hover:text-blue-600">Scholarship</a></li>
      </ul>
    </div>

    <!-- Logo & Socials -->
    <div class="flex flex-col items-center">
      <img src="image/logo.png" alt="HMDT" class="w-20 h-20 rounded-full mb-4">
      <div class="flex space-x-3 mt-2">
        <a href="https://x.com/infohmdt" class="bg-orange-600 hover:bg-red-700 text-white w-9 h-9 rounded-full flex items-center justify-center text-sm">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="https://www.youtube.com/@hmdtuniversitastelkom3275" class="bg-orange-600 hover:bg-red-700 text-white w-9 h-9 rounded-full flex items-center justify-center text-sm">
          <i class="fab fa-youtube"></i>
        </a>
        <a href="https://www.instagram.com/infohmdt" class="bg-orange-600 hover:bg-red-700 text-white w-9 h-9 rounded-full flex items-center justify-center text-sm">
          <i class="fab fa-instagram"></i>
        </a>
        <a href="https://www.tiktok.com/@infohmdt_" class="bg-orange-600 hover:bg-red-700 text-white w-9 h-9 rounded-full flex items-center justify-center text-sm">
          <i class="fab fa-tiktok"></i>
        </a>
      </div>
    </div>

    <!-- Contact Info -->
    <div class="flex-1 max-w-xs text-left">
      <h4 class="font-bold mb-4 text-lg">Contact Info</h4>
      <ul class="space-y-2 text-sm">
        <li><i class="fas fa-phone text-blue-500 mr-2"></i> 081234567890 (Partnership)</li>
        <li><i class="fas fa-comments text-blue-500 mr-2"></i> 081234567890 (Organization & NGO)</li>
        <li><i class="fas fa-envelope text-blue-500 mr-2"></i> hmdt@gmail.com</li>
      </ul>
    </div>

  </div>

  <div class="border-t border-gray-200 text-center text-sm py-4 text-gray-600 font-semibold">
    &copy; 2025 HMDT - All rights reserved.
  </div>
</footer>
<script>
function redirectToLogin() {
  alert("Silakan login terlebih dahulu untuk mengirim pesan.");
  window.location.href = "php/login.php";
}
</script>

</body>
</html>
