<?php
session_start();
include 'db.php'; // Veritabanı bağlantısını dahil edin

// Giriş işlemi
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $kullanici_adi = htmlspecialchars($_POST['kullanici_adi']);
    $sifre = htmlspecialchars($_POST['sifre']);

    // Kullanıcıyı veritabanında kontrol et
    $stmt = $db->prepare("SELECT * FROM kullanicilar WHERE kullanici_adi = :kullanici_adi");
    $stmt->execute([':kullanici_adi' => $kullanici_adi]);

    if ($stmt->rowCount() > 0) {
        $kullanici = $stmt->fetch(PDO::FETCH_ASSOC);
        
        // Şifreyi doğrula
        if (password_verify($sifre, $kullanici['sifre'])) {
            // Kullanıcıyı oturumda sakla
            $_SESSION['user_logged_in'] = true;
            header("Location: admin.php");
            exit;
        } else {
            $hata = "Kullanıcı adı veya şifre hatalı!";
        }
    } else {
        $hata = "Kullanıcı adı veya şifre hatalı!";
    }
}
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giriş Yap</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Giriş Yap</h2>
        <?php if (isset($hata)): ?>
            <div class="alert alert-danger"><?php echo $hata; ?></div>
        <?php endif; ?>
        <form action="login.php" method="post">
            <div class="form-group">
                <label for="kullanici_adi">Kullanıcı Adı:</label>
                <input type="text" name="kullanici_adi" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="sifre">Şifre:</label>
                <input type="password" name="sifre" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Giriş Yap</button>
        </form>
        <p>Hesabınız yok mu? <a href="register.php">Kayıt olun</a></p> <!-- Kayıt bağlantısı -->
    </div>
</body>
</html>
