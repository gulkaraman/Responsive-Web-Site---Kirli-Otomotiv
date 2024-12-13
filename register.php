<?php
session_start();
include 'db.php'; // Veritabanı bağlantısını dahil edin

// Kayıt işlemi
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $kullanici_adi = htmlspecialchars($_POST['kullanici_adi']);
    $sifre = password_hash(htmlspecialchars($_POST['sifre']), PASSWORD_DEFAULT); // Şifreyi hashle

    // Kullanıcı adı var mı kontrol et
    $stmt = $db->prepare("SELECT COUNT(*) FROM kullanicilar WHERE kullanici_adi = :kullanici_adi");
    $stmt->execute([':kullanici_adi' => $kullanici_adi]);

    if ($stmt->fetchColumn() == 0) {
        // Kullanıcıyı veritabanına ekle
        $stmt = $db->prepare("INSERT INTO kullanicilar (kullanici_adi, sifre) VALUES (:kullanici_adi, :sifre)");
        $stmt->execute([':kullanici_adi' => $kullanici_adi, ':sifre' => $sifre]);

        // Kayıt işlemi başarılı
        $basari = "Kayıt başarıyla tamamlandı! Giriş yapabilirsiniz.";
    } else {
        $hata = "Bu kullanıcı adı zaten alınmış.";
    }
}
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kayıt Ol</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Kayıt Ol</h2>
        <?php if (isset($hata)): ?>
            <div class="alert alert-danger"><?php echo $hata; ?></div>
        <?php endif; ?>
        <?php if (isset($basari)): ?>
            <div class="alert alert-success"><?php echo $basari; ?></div>
        <?php endif; ?>
        <form action="register.php" method="post">
            <div class="form-group">
                <label for="kullanici_adi">Kullanıcı Adı:</label>
                <input type="text" name="kullanici_adi" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="sifre">Şifre:</label>
                <input type="password" name="sifre" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Kayıt Ol</button>
        </form>
        <p>Zaten bir hesabınız var mı? <a href="login.php">Giriş yapın</a></p> <!-- Giriş bağlantısı -->
    </div>
</body>
</html>