<?php
session_start();

// Pastikan user sudah login
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

// Tandai bahwa welcome sudah dilewati
$_SESSION['welcome_done'] = true;

// Redirect ke index
header("Location: ../index.php");
exit();
