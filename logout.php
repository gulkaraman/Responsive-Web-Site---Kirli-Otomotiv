<?php
session_start(); // Oturumu başlat
session_destroy(); // Oturumu sonlandır
header("Location: login.php"); // Giriş sayfasına yönlendir
exit; // Çıkış yap
?>