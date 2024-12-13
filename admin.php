<?php
session_start();
include 'db.php'; // Veritabanı bağlantısını dahil edin

// Kullanıcı girişi kontrolü
if (!isset($_SESSION['user_logged_in'])) {
    header("Location: login.php");
    exit; // Yönlendirme sonrası çıkış yap
}

// Sayfaları ve araçları listele
try {
    $sayfalar = $db->query("SELECT * FROM sayfalar")->fetchAll(PDO::FETCH_ASSOC);
    $araclar = $db->query("SELECT * FROM araclar")->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Veri çekme hatası: " . $e->getMessage());
}

// Sayfa içeriği güncelleme işlemi
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['sayfa_guncelle'])) {
    $sayfa_adi = htmlspecialchars($_POST['sayfa_adi']);
    $icerik = htmlspecialchars($_POST['icerik']);

    try {
        $stmt = $db->prepare("UPDATE sayfalar SET icerik = :icerik WHERE sayfa_adi = :sayfa_adi");
        $stmt->execute([':icerik' => $icerik, ':sayfa_adi' => $sayfa_adi]);
        header("Location: admin.php?msg=guncelleme_basarili");
        exit; // Yönlendirme sonrası çıkış yap
    } catch (PDOException $e) {
        echo "<div class='alert alert-danger'>Hata: " . $e->getMessage() . "</div>";
    }
}

// Araç silme işlemi
if (isset($_GET['sil'])) {
    $id = (int)$_GET['sil']; // ID'yi int olarak al
    try {
        $stmt = $db->prepare("DELETE FROM araclar WHERE id = :id");
        $stmt->execute([':id' => $id]);
        header("Location: admin.php?msg=silme_basarili");
        exit; // Yönlendirme sonrası çıkış yap
    } catch (PDOException $e) {
        echo "<div class='alert alert-danger'>Silme hatası: " . $e->getMessage() . "</div>";
    }
}

// Araç ekleme işlemi
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['arac_ekle'])) {
    $marka = htmlspecialchars($_POST['marka']);
    $model = htmlspecialchars($_POST['model']);
    $yil = (int)$_POST['yil'];
    $motor_hacmi = htmlspecialchars($_POST['motor_hacmi']);
    $yakit_turu = htmlspecialchars($_POST['yakit_turu']);
    $aciklama = htmlspecialchars($_POST['aciklama']);

    // Fotoğraf yükleme işlemi
    $target_dir = "uploads/"; // Yükleme dizini
    $foto = $target_dir . basename($_FILES["foto"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($foto, PATHINFO_EXTENSION));

    // Resim kontrolü
    $check = getimagesize($_FILES["foto"]["tmp_name"]);
    if ($check === false) {
        echo "<div class='alert alert-danger'>Dosya bir resim değil.</div>";
        $uploadOk = 0;
    }

    // Dosya boyutu kontrolü
    if ($_FILES["foto"]["size"] > 5000000000000000) {
        echo "<div class='alert alert-danger'>Dosya çok büyük.</div>";
        $uploadOk = 0;
    }

    // Dosya uzantısı kontrolü
    if (!in_array($imageFileType, ['jpg', 'jpeg', 'png', 'gif'])) {
        echo "<div class='alert alert-danger'>Sadece JPG, JPEG, PNG ve GIF dosyalarına izin verilir.</div>";
        $uploadOk = 0;
    }

    // Herhangi bir hata yoksa dosyayı yükle
    if ($uploadOk == 1) {
        if (move_uploaded_file($_FILES["foto"]["tmp_name"], $foto)) {
            try {
                $stmt = $db->prepare("INSERT INTO araclar (marka, model, yil, motor_hacmi, yakit_turu, foto, aciklama) 
                                      VALUES (:marka, :model, :yil, :motor_hacmi, :yakit_turu, :foto, :aciklama)");
                $stmt->execute([
                    ':marka' => $marka,
                    ':model' => $model,
                    ':yil' => $yil,
                    ':motor_hacmi' => $motor_hacmi,
                    ':yakit_turu' => $yakit_turu,
                    ':foto' => $foto,
                    ':aciklama' => $aciklama
                ]);
                header("Location: admin.php?msg=ekleme_basarili");
                exit; // Yönlendirme sonrası çıkış yap
            } catch (PDOException $e) {
                echo "<div class='alert alert-danger'>Ekleme hatası: " . $e->getMessage() . "</div>";
            }
        } else {
            echo "<div class='alert alert-danger'>Dosya yüklenirken hata oluştu.</div>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Paneli</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-size: 1rem;
        }
        @media (max-width: 768px) {
            body {
                font-size: 0.9rem;
            }
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Yan Menü -->
            <div class="col-md-3 bg-light">
                <h4>Admin Paneli</h4>
                <ul class="list-group">
    <?php foreach ($sayfalar as $sayfa): ?>
        <li class="list-group-item">
            <a href="?sayfa=<?php echo htmlspecialchars($sayfa['sayfa_adi']); ?>">
                <?php echo ucfirst($sayfa['sayfa_adi']); ?> Düzenle
            </a>
        </li>
    <?php endforeach; ?>
    <li class="list-group-item"><a href="?sayfa=araclar">Araç Listesi</a></li>
    <li class="list-group-item"><a href="logout.php">Çıkış Yap</a></li> <!-- Çıkış bağlantısı -->
</ul>

            </div>


            <!-- Ana İçerik -->
            <div class="col-md-9">
                <?php if (isset($_GET['msg'])): ?>
                    <div class="alert alert-info">
                        <?php
                        switch ($_GET['msg']) {
                            case 'guncelleme_basarili':
                                echo "Sayfa başarıyla güncellendi!";
                                break;
                            case 'silme_basarili':
                                echo "Araç başarıyla silindi!";
                                break;
                            case 'ekleme_basarili':
                                echo "Araç başarıyla eklendi!";
                                break;
                        }
                        ?>
                    </div>
                <?php endif; ?>

                <?php if (isset($_GET['sayfa']) && $_GET['sayfa'] != 'araclar'): ?>
                    <?php
                    $sayfa_adi = htmlspecialchars($_GET['sayfa']);
                    $stmt = $db->prepare("SELECT icerik FROM sayfalar WHERE sayfa_adi = :sayfa_adi");
                    $stmt->execute([':sayfa_adi' => $sayfa_adi]);
                    $sayfa = $stmt->fetch(PDO::FETCH_ASSOC);
                    ?>
                    <h2><?php echo ucfirst($sayfa_adi); ?> Sayfası</h2>
                    <form action="admin.php" method="post">
                        <input type="hidden" name="sayfa_adi" value="<?php echo $sayfa_adi; ?>">
                        <div class="form-group">
                            <textarea name="icerik" rows="10" class="form-control"><?php echo htmlspecialchars($sayfa['icerik']); ?></textarea>
                        </div>
                        <button type="submit" name="sayfa_guncelle" class="btn btn-primary">Güncelle</button>
                    </form>
                <?php else: ?>
                    <h2>Araç Listesi</h2>
                    <form action="admin.php" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <input type="text" name="marka" class="form-control" placeholder="Marka" required>
                            <input type="text" name="model" class="form-control" placeholder="Model" required>
                            <input type="number" name="yil" class="form-control" placeholder="Yıl" required>
                            <input type="text" name="motor_hacmi" class="form-control" placeholder="Motor Hacmi" required>
                            <input type="text" name="yakit_turu" class="form-control" placeholder="Yakıt Türü" required>
                            <textarea name="aciklama" class="form-control" placeholder="Açıklama" required></textarea>
                            <input type="file" name="foto" class="form-control-file" required>
                        </div>
                        <button type="submit" name="arac_ekle" class="btn btn-success">Araç Ekle</button>
                    </form>

                    <h3>Mevcut Araçlar</h3>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Marka</th>
                                <th>Model</th>
                                <th>Yıl</th>
                                <th>Motor Hacmi</th>
                                <th>Yakıt Türü</th>
                                <th>Fotoğraf</th>
                                <th>İşlemler</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($araclar as $arac): ?>
                                <tr>
                                    <td><?php echo htmlspecialchars($arac['marka']); ?></td>
                                    <td><?php echo htmlspecialchars($arac['model']); ?></td>
                                    <td><?php echo htmlspecialchars($arac['yil']); ?></td>
                                    <td><?php echo htmlspecialchars($arac['motor_hacmi']); ?></td>
                                    <td><?php echo htmlspecialchars($arac['yakit_turu']); ?></td>
                                    <td><img src="<?php echo htmlspecialchars($arac['foto']); ?>" alt="Araç Fotoğrafı" width="100"></td>
                                    <td>
                                        <a href="?sil=<?php echo $arac['id']; ?>" class="btn btn-danger">Sil</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>