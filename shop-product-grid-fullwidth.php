<?php
include 'db.php'; // PDO bağlantısı

// Belirli bir aracın bilgilerini alma
if (isset($_GET['id'])) {
    $id = (int)$_GET['id'];
    $stmt = $db->prepare("SELECT * FROM araclar WHERE id = :id");
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    $arac = $stmt->fetch(PDO::FETCH_ASSOC);
} else {
    // Eğer id verilmediyse hata sayfasına yönlendirme
    header('Location: index.php');
    exit();
}
?>

<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
<!-- Document Meta
    ============================================= -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!--IE Compatibility Meta-->
<meta name="author" content="zytheme" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="description" content="construction html5 template">
<link href="assets/images/favicon/favicon.ico" rel="icon">

<!-- Fonts
    ============================================= -->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i%7CRaleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i%7CUbuntu:300,300i,400,400i,500,500i,700,700i' rel='stylesheet' type='text/css'>

<!-- Stylesheets
    ============================================= -->
<link href="assets/css/external.css" rel="stylesheet">
<link href="assets/css/bootstrap.min.css" rel="stylesheet">
<link href="assets/css/style.css" rel="stylesheet">
<link href="assets/css/custom.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
<meta name="description" content="construction html5 template">
<link href="assets/images/favicon/favicon.ico" rel="icon">
<title>KIRLI OTOMOTİV</title>
<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
<!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js"></script>
      <script src="assets/js/respond.min.js"></script>
    <![endif]-->

<!-- Document Title
    ============================================= -->
<title>Autoshop | E-commerce Html5 Template</title>
<style>
        .product-img img {
            width: 828px; /* Resim genişliği */
            height: 938px; /* Resim yüksekliği */
            object-fit: cover; /* Resmi kapsayacak şekilde ayarlama */
        }
    </style>
</head>
<body>
	<?php
	$phone1 = "+90 (542) 228 99 38";
	$phone2	= "+90 (541) 472 96 88";
	$email = "kirliotomotiv@gmail.com";
	$address = "Pazar, 15400 Gölhisar/Burdur";
?>
<div id="wrapper" class="wrapper clearfix">
	<header id="navbar-spy" class="header header-1">
		<div class="top-bar">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-md-5">
					<ul class="list-inline top-contact">
			<!-- İlk Telefon Numarası -->
			<li>
				<a href="tel:<?php echo $phone1; ?>">
				<i class="fas fa-phone-alt"></i> 
				<span>Ara:</span> <?php echo $phone1; ?>
				</a>
			</li>

			<!-- İkinci Telefon Numarası -->
			<li>
				<a href="tel:<?php echo $phone2; ?>">
				<i class="fas fa-phone-alt"></i> 
				<span>Ara:</span> <?php echo $phone2; ?>
				</a>
			</li>
		</ul>
</div>
					<div class="col-xs-12 col-sm-6 col-md-7">
						<ul class="list-inline pull-right top-links">
							<li>
								<a href="https://www.google.com/maps/search/?api=1&query=Pazar,+15400+Gölhisar/Burdur" target="_blank">
									<i class="fas fa-map-marker-alt"></i> 
									<span><?php echo $address; ?></span> 
								
								</a>
							</li>
							
							<li>
								<a href="https://www.facebook.com/pages/Kırlı%20Otomotiv/113528251670158/" target="_blank">
									<i class="fab fa-facebook-f"></i>
								</a>
							</li>
							<li>
								<a href="https://www.instagram.com/krl_garage/" target="_blank">
									<i class="fab fa-instagram"></i>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div style="display: flex; justify-content: space-between; align-items: center; padding: 10px 120px;">
        <!-- Logo -->
        <div>
            <a class="logo" href="index.php">
                <img src="assets/images/logo/logo-light.png" alt="" style="width: 150px; height: 150px;">
            </a>
        </div>

        <!-- Navigasyon -->
        <div class="collapse navbar-collapse pull-right" id="header-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-left">
                <li class="has-dropdown active">
                    <a href="index.php">ANASAYFA</a>
                </li>
                <li>
                    <a href="about.php">HAKKIMIZDA</a>
                </li>
                <li class="has-dropdown">
                    <a href="shop-product-grid-fullwidth.php" data-toggle="dropdown" class="dropdown-toggle">ARAÇLARIMIZ</a>
                    <ul class="dropdown-menu">
                        <li class="dropdown-submenu">
                            <a href="shop-product-grid-fullwidth.php" data-toggle="dropdown" class="dropdown-toggle">Güncel Araçlarımız</a>
                            <ul class="mega-menu left"></ul>
                        </li>
                    </ul>
                </li>
                <li class="has-dropdown pull-left">
                    <a href="contact-2.php" class="dropdown-toggle">İLETİŞİM</a>
                </li>
            </ul>

            <!-- Arama Modülü -->
            <div class="module module-search pull-left">
                <div class="search-icon">
                    <i class="fa fa-search"></i>
                    <span class="title">search</span>
                </div>
                <div class="search-box">
                    <form class="search-form" onsubmit="return openNewPage();">
                        <div class="input-group">
                            <input type="text" name="query" class="form-control" placeholder="Araç, Marka, Model" required oninput="toggleButton(this.value)">
                            <span class="input-group-btn">
                                <button class="btn" type="submit"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
	<section id="page-title" class="page-title">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-6">
					<h1>GÜNCEL ARAÇLARIMIZ</h1>
				</div>
				<!-- .col-md-6 end -->
				<div class="col-xs-12 col-sm-12 col-md-6">
					<ol class="breadcrumb text-right">
						<li>
							<a href="index.php">Anasayfa</a>
						</li>
						
					</ol>
				</div>
				<!-- .col-md-6 end -->
			</div>
			<!-- .row end -->
		</div>
		<!-- .container end -->
	</section>
	<div class="container">
        <div class="row">
            <div class="col-xs-12 product">
                <div class="product-img">
                    <img src="<?php echo htmlspecialchars($arac['foto']); ?>" alt="<?php echo htmlspecialchars($arac['marka']); ?>" />
                </div>
                <div class="product-bio">
                    <h1><?php echo htmlspecialchars($arac['marka']) . ' ' . htmlspecialchars($arac['model']); ?></h1>
                    <p><h6>Yıl: </h6><?php echo htmlspecialchars($arac['yil']); ?></p>
                    <p><h6>Motor Hacmi: </h6><?php echo htmlspecialchars($arac['motor_hacmi']); ?> L</p>
                    <p><h6>Yakıt Türü: </h6><?php echo htmlspecialchars($arac['yakit_turu']); ?></p>
					<p><h6>Açıklama: </h6><?php echo htmlspecialchars($arac['aciklama']); ?></p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- #shopgrid end -->

<!-- Offers
============================================= -->
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12">
					<ul class="pagination">
						<li class="active">
							<a href="#">1</a>
						</li>
						<li>
							<a href="#">2</a>
						</li>
						<li>
							<a href="#">3</a>
						</li>
						<li>
							<a href="#" aria-label="Next">
							<span aria-hidden="true"><i class="fa fa-angle-right"></i></span>
							</a>
						</li>
					</ul>
				</div>
				<!-- .col-md-12 end -->
			</div>
		</div>
		<!-- .container end -->
	</section>
	<!-- #offers end -->
	
	<!-- Footer #2
============================================= -->
<footer id="footer" class="footer footer-2">
	<!-- Footer Info
============================================= -->
	<div class="footer-info">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-3">
					<div class="panel-info">
						<div class="info-icon">
							<i class="icon icon-Car"></i>
						</div>
						<div class="info-content">
							<h4>GÜVENİLİR HİZMET</h4>
							<p>İlk andan itibaren, satış ve satış sonrası süreçlerde şeffaflık ve güven üzerine kurulmuş bir hizmet anlayışımız vardır. Müşterilerimiz, bize güvenle danışabilir ve doğru kararlar alabilir.</p>
						</div>
					</div>
				</div>
				<!-- .col-md-3 end -->
				
				<div class="col-xs-12 col-sm-6 col-md-3">
					<div class="panel-info">
						<div class="info-icon">
							<i class="icon icon-Dollars"></i>
						</div>
						<div class="info-content">
							<h4>VADELİ SATIŞ SEÇENEĞİ</h4>
							<p>Güvene dayalı ilişkilerimiz çerçevesinde vadeli satış olanakları sunarak, müşteri memnuniyetini artırıyoruz.</p>
						</div>
					</div>
				</div>
				<!-- .col-md-3 end -->
				
				<div class="col-xs-12 col-sm-6 col-md-3">
					<div class="panel-info">
						<div class="info-icon">
							<i class="icon icon-Calculator"></i>
						</div>
						<div class="info-content">
							<h4>BÜTÇE DOSTU ARAÇLAR</h4>
							<p>Geniş araç yelpazemiz sayesinde, her bütçeye uygun en kaliteli araçları sunuyoruz.</p>
						</div>
					</div>
				</div>
				<!-- .col-md-3 end -->
				
				<div class="col-xs-12 col-sm-6 col-md-3">
					<div class="panel-info">
						<div class="info-icon">
							<i class="icon icon-Wrench"></i>
						</div>
						<div class="info-content">
							<h4>DETAYLI KONTROLLER</h4>
							<p>Satışını gerçekleştirdiğimiz her araç, boya, kaporta ve mekanik açıdan detaylı kontrol edilir ve her detay müşterilerimize şeffaf bir şekilde aktarılır.  </p>
						</div>
					</div>
				</div>
				<!-- .col-md-3 end -->
			</div>
		</div>
		<!-- .container end -->
	</div>
	<!-- .footer-info end -->
	
	<!-- Footer Widget
============================================= -->
	<div class="footer-widget">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-4 footer-widget-about">
					<div class="footer-widget-title">
						<h5>HAKKIMIZDA</h5>
					</div>
					<div class="footer-widget-content">
						<p>Kırlı Otomotiv, 2022 yılında müşteri memnuniyetini öncelik olarak belirleyerek kurulmuştur. Geniş araç yelpazemiz, her bütçeye uygun fiyat-performans araçlarıyla doludur. Amacımız, her müşterimize güvenilir ve kaliteli hizmet sunarak onları mutlu etmektir</p>
						<div class="footer-social">
							<a class="share-instagram" href="https://www.instagram.com/krl_garage/" target="_blank"><i class="fab fa-instagram"></i></a>
							<a class="share-facebook" href="https://www.facebook.com/pages/Kırlı%20Otomotiv/113528251670158/" target="_blank"><i class="fab fa-facebook-f"></i></a>
							<a class="share-google-maps" href="https://g.co/kgs/EuPuYGG" target="_blank"><i class="fas fa-map-marker-alt"></i></a>
							<a class="share-mail" href="mailto:kirliotomotiv@gmail.com" target="_blank"><i class="fas fa-envelope"></i></a>
							<a class="share-phone" href="tel:+905422289938" target="_blank"><i class="fas fa-phone-alt"></i></a>
						</div>
						
						
					</div>
				</div>
				<!-- .col-md-4 end -->
				
				<div class="col-xs-12 col-sm-6 col-md-2 footer-widget-link">
					<div class="footer-widget-content">
						<h5 style="color: white; text-transform: uppercase; font-size: 16px; font-weight: bold; margin-bottom: 10px;">ÇALIŞMA SAATLERİ</h5>
						<ul class="list-unstyled">
							<li>Pazartesi: 09:00 - 17:00</li>
							<li>Salı: 09:00 - 17:00</li>
							<li>Çarşamba: 09:00 - 17:00</li>
							<li>Perşembe: 09:00 - 17:00</li>
							<li>Cuma: 09:00 - 17:00</li>
							<li>Cumartesi: 09:00 - 17:00</li>
							<li>Pazar: Kapalı</li>
						</ul>
					</div>
					
					
				</div>
				<!-- .col-md-2 end -->
				
				<div class="col-xs-12 col-sm-6 col-md-2 footer-widget-link">
					<div class="footer-widget-title">
						<h5>BİLGİLENDİRME</h5>
					</div>
					<div class="footer-widget-content">
						<ul class="list-unstyled">
							<li>
								<a href="index.php">ANASAYFA</a>
							</li>
							<li>
								<a href="about.php">HAKKIMIZDA</a>
							</li>
							<li>
								<a href="shop-product-grid-fullwidth.php">ARAÇLARIMIZ</a>
							</li>
							<li>
								<a href="contact-2.php">İLETİŞİM</a>
							</li>
						</ul>
					</div>
				</div>
				<!-- .col-md-2 end -->
				
				<div class="col-xs-12 col-sm-6 col-md-2 footer-widget-link">
					<h5 style="color: white; text-transform: uppercase; font-size: 16px; font-weight: bold; margin-bottom: 10px;">İLETİŞİM</h5>
					<div style="color: white;">
						<a href="tel:+905422289938" style="color: white; text-decoration: none;">
							<i class="fa fa-phone" style="margin-right: 5px;"></i> tel:+90 542 228 99 38
						</a>
					</div>
				</div>
				
<!-- Yukarı çıkma butonu -->
<button id="backToTop" class="back-to-top" title="Yukarı Çık" style="font-size: 24px; padding: 10px 15px;">
    <i class="fas fa-chevron-up"></i> <!-- Font Awesome ok ikonu -->
</button>

<script>
    // Butonun görünürlüğünü ayarlama
    const backToTopButton = document.getElementById('backToTop');

    window.onscroll = function() {
        if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
            backToTopButton.style.display = 'block';
        } else {
            backToTopButton.style.display = 'none';
        }
    };

    // Butona tıklandığında sayfanın en üstüne git
    backToTopButton.onclick = function() {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    };
</script>

<style>
    /* Butonun başlangıçta gizli olmasını sağla */
    .back-to-top {
        display: none;
        position: fixed;
        bottom: 20px;
        right: 30px;
        z-index: 1000;
        background-color: #007bff; /* Arka plan rengi */
        color: white; /* Yazı rengi */
        border: none;
        border-radius: 5px;
        cursor: pointer;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
    }

    .back-to-top:hover {
        background-color: #0056b3; /* Hover durumu için arka plan rengi */
    }
</style>

						</ul>
					</div>
				</div>
				<!-- .col-md-2 end -->
				
	<div class="footer-bar">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="powered">
						<p>Kırlı Otomotiv &copy; All Rights Reserved. Made with ❤️ by 
						  <a href="https://www.linkedin.com/in/gül-karaman-8a003924b" target="_blank" rel="noopener noreferrer">
							Gül Karaman
						  </a>
						</p>
						<ul class="list-inline mb-0">
							<li>
								<a href="#">Privacy Policy</a>
							</li>
							<li>
								<a href="#">Terms of Use</a>
							</li>
							
							<li>
								<a href="#">About Us</a>
							</li>
						</ul>
					</div>
				</div>
				
			</div>
		</div>
		<!-- .container end -->
	</div>
	<!-- .footer-copyright end -->
</footer>
</div>
<!-- #wrapper end -->

<!-- Footer Scripts
============================================= -->
<script src="assets/js/jquery-2.2.4.min.js"></script>
<script src="assets/js/plugins.js"></script>
<script src="assets/js/functions.js"></script>
</body>
</html>