<?php
include 'db.php'; // PDO bağlantısı

// Araçları alma
$stmt = $db->query("SELECT * FROM araclar");
$araclar = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="zytheme" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="construction html5 template">
    <link href="assets/images/favicon/favicon.ico" rel="icon">

    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans|Raleway|Ubuntu' rel='stylesheet' type='text/css'>

    <!-- Stylesheets -->
    <link href="assets/css/external.css" rel="stylesheet">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/custom.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <title>KIRLI OTOMOTİV</title>
	<style>
		.row {
			display: flex;
			flex-wrap: wrap; /* Elemanların yeni satıra geçmesini sağlar */
			margin: -15px; /* Negatif margin ile satır arasındaki boşluğu düzenler */
		}

		.product {
			flex: 1 0 21%; /* Her ürün için %21 genişlik, 4 ürün yan yana */
			margin: 15px; /* Ürünler arasındaki boşluk */
			box-sizing: border-box; /* Margin ve padding'in genişliği etkilememesi için */
		}

		.product-img {
			width: 280px; /* Ürün resminin genişliği */
			height: 340px; /* Ürün resminin yüksekliği */
			overflow: hidden; /* Taşan kısmı gizle */
		}

		.product-img img {
			width: 100%; /* Resmin genişliği konteynerle aynı */
			height: 100%; /* Resmin yüksekliği konteynerle aynı */
			object-fit: cover; /* Resmin orantılı şekilde sığdırılması için */
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
			<nav id="primary-menu" class="navbar navbar-fixed-top">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#header-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="logo" href="index.php">
							<img src="assets/images/logo/logo-light.png" 
							alt="" 
							style="width: 150px; height: 150px; position: relative; top: -25px;">
						</a>
                    </div>
				
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse pull-right" id="header-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-left">
						<li class="has-dropdown active">
							<a href="index.php">ANASAYFA</a>
						</li>
						<!-- li end -->
						<li class="has-dropdown">
							</li>
						<li>
							<a href="about.php">HAKKIMIZDA</a>
						</li>
						<li class="has-dropdown">
					<a href="#" data-toggle="dropdown" class="dropdown-toggle">ARAÇLARIMIZ</a>
					<ul class="dropdown-menu">
						<li class="dropdown-submenu">
							<!-- Güncel Araçlarımız bağlantısı, id ile yönlendirme yapıyor -->
							<a href="index.php#shopgrid" class="dropdown-toggle">Güncel Araçlarımız</a>
							<ul class="mega-menu left"></ul>
						</li>
					</ul>
				</li>

							<li class="has-dropdown pull-left">
								<a href="contact-2.php" class="dropdown-toggle">İLETİŞİM</a>
							</li>
							
						<!-- li end -->
					</ul>
					
				<!-- Mod -->
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
            <!-- /input-group -->
        </form>
        
    </div>
</div>

<script>
    function toggleButton(value) {
        const button = document.getElementById('guncel-araclar-btn');
        if (value.trim() !== "") {
            button.style.display = 'inline-block';
        } else {
            button.style.display = 'none';
        }
    }

    function openNewPage() {
        const query = document.querySelector('input[name="query"]').value;
        const newTab = window.open('shop-product-grid-fullwidth.php?query=' + encodeURIComponent(query), '_blank');
        newTab.focus();
        return false; // Formun normal gönderimini engelle
    }
</script>


					
				</div>
				<!-- /.navbar-collapse -->
			</div>
			<!-- /.container-fluid -->
		</nav>
	</header>
	
	<!-- Hero #2
============================================= -->
	<section id="hero" class="hero">
<!-- Slide #1 -->
	<div class="slide bg-overlay">
    <div class="bg-section">
        <img src="assets/images/sliders/1.jpg" alt="Background" />
    </div>
    <div class="container vertical-center">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
                <div class="slide-content">
                    <div class="slide-icon">
                        <div class="slide-heading">Aracınıza Değer Katıyoruz</div>
                        <div class="slide-title">
                            <h2>KIRLI <span class="color-theme">OTOMOTİV</span>'e GÜVENEBİLİRSİNİZ!</h2>
                        </div>
                        <div class="slide-desc">
                            "KIRLI OTOMOTİV, araç tutkunları için mükemmel bir galeri! Otomobil satışlarında vadeli satış desteği, teknik arıza kontrolü ve müşteri bilgilendirmesi ile her zaman yanınızdayız."
                        </div>
                        <div class="slide-action">
                            <a class="btn btn-primary" href="#shopgrid">Şimdi Tıkla</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- .col-md-12 end -->
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</div>
<!-- .slide end -->
	</section>
	<!-- #hero -->
	
	<!-- Shop product grid right sidebar
============================================= -->

<section id="shopgrid" class="shop shop-grid shop-items">
    <div class="container heading">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <p class="subheading">ARAÇLARIMIZ</p>
                <h2>GÜNCEL ARAÇLARIMIZ</h2>
            </div>
        </div>
    </div>
    
    <div class="container">
        <div class="row">
            <?php foreach ($araclar as $arac): ?>
                <div class="product">
                    <div class="product-img">
                        <img src="<?php echo htmlspecialchars($arac['foto']); ?>" alt="<?php echo htmlspecialchars($arac['marka']); ?>" />
                        <div class="product-hover">
                            <div class="product-action">
                                <a class="btn btn-primary" href="shop-product-grid-fullwidth.php?id=<?php echo $arac['id']; ?>">Detaylı İncele</a>
                            </div>
                        </div>
                    </div>
                    <div class="product-bio">
                        <div class="prodcut-cat">
                            <a href="shop-product-grid-fullwidth.php?id=<?php echo $arac['id']; ?>"><?php echo htmlspecialchars($arac['marka']); ?></a>
                        </div>
                        <div class="prodcut-title">
                            <h3>
                                <a href="shop-product-grid-fullwidth.php?id=<?php echo $arac['id']; ?>"><?php echo htmlspecialchars($arac['model']); ?></a>
                            </h3>
							<div class="prodcut-cat">
                        </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<!-- #offers end -->
<section>
    <div>    	
        <embed src="https://www.instagram.com/krl_garage/embed" style="width: 100%; height: 1000px;" />
    </div>
</section>

	
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
					<div class="col-xs-12 col-sm-6 col-md-2 footer-widget-link" 
     style="display: flex; align-items: center; justify-content: space-between;">

    <!-- İletişim Bilgileri -->
    <div style="color: white; margin-right: 20px; max-width: 150px;">
        <h5 style="color: white; text-transform: uppercase; font-size: 16px; font-weight: bold; margin-bottom: 10px;">
            İLETİŞİM
        </h5>
		<li>
    <!-- Telefon numarasına tıklayınca arama yapar -->
    <a href="tel:+905422289938" style="white-space: nowrap;">
        <i class="fas fa-phone-alt"></i> 
        
        <?php 
            $sql = $db->query("SELECT telefon FROM kirlioto")->fetch(PDO::FETCH_ASSOC);
            echo $sql['telefon']; 
        ?>
    </a>
</li>

<!-- Harita -->
<div class="widget widget-iframe" 
     style="flex-shrink: 0; margin-left: 150px; margin-top: -20px;">
    <iframe 
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5275.117038866452!2d29.5138807!3d37.1446351!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14c1230a859e7289%3A0x374908f8436176c7!2sK%C4%B1rl%C4%B1%20Otomotiv!5e0!3m2!1str!2str!4v1697628973701!5m2!1str!2str" 
        width="200" height="200" frameborder="0" style="border: 0;" 
        allowfullscreen="" aria-hidden="false" tabindex="0">
    </iframe>
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


					</div>
					
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