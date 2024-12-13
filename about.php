

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
<link href="assets/images/favicon/favicon.ico" rel="icon">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
<!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js"></script>
      <script src="assets/js/respond.min.js"></script>
    <![endif]-->

<!-- Document Title
    ============================================= -->
	<title>KIRLI OTOMOTİV</title>
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
						<a class="logo" href="index.php" title="Anasayfa">
        <img src="assets/images/logo/logo-light.png" 
             alt="Logo - Anasayfa" 
             style="width: 150px; height: 150px; position: relative; top: -25px;">
    </a>
</div>
<div class="container">
    <div class="navbar-header">
        <!-- Menü açma butonunu koruyoruz -->
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#header-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>

       
    </div>
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
								<a href="shop-product-grid-fullwidth.php" class="dropdown-toggle">Güncel Araçlarımız</a>
									<ul class="mega-menu left">
									</ul>
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
	<section id="page-title" class="page-title">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-6">
					<h1>HAKKIMIZDA</h1>
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
	<!-- #page-title end -->
	
	<!-- Featured #1
============================================= -->
	<section id="featured1" class="featured featured-1">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-6">
					<div class="heading">
						<p class="subheading">HİKAYEMİZ</p>
						<h2>BİZ KİMİZ</h2>
					</div>
					<!-- .heading end -->
					<div class="about-accordion">
						<div class="panel-group accordion" id="accordion02" role="tablist" aria-multiselectable="true">
							
							<!-- Panel 01 -->
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingOne">
									<h4 class="panel-title">
										<a class="accordion-toggle" role="button" data-toggle="collapse" data-parent="#accordion02" href="#collapse02-1" aria-expanded="true" aria-controls="collapse02-1">TARİHÇEMİZ</a>
										<span class="icon"></span>
									</h4>
								</div>
								<div id="collapse02-1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne" aria-expanded="false">
									<div class="panel-body">
										<div class="pull-left pr-30">
											<img src="assets/images/shortcode/1.jpg" alt="about">
										</div>
										<div>Kırlı Oto Galeri, 2022 yılında, otomotiv sektöründe müşteri memnuniyetini ve güveni esas alarak faaliyete geçti. Kuruluşumuzdan bu yana, işimizin temeline karşılıklı güveni yerleştirerek, müşterilerimize en iyi hizmeti sunma hedefiyle çalışıyoruz. Otomobil alım-satım sürecinin sadece bir ticari işlem olmadığını, aynı zamanda güvene dayalı bir ilişki olduğunu biliyoruz. Bu bilinçle, tüm faaliyetlerimizi şeffaflık ve dürüstlük ilkeleri çerçevesinde yürütüyoruz. </div>
									</div>
								</div>
							</div>
							
							<!-- Panel 02 -->
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingTwo">
									<h4 class="panel-title">
										<a class="accordion-toggle collapsed" role="button" data-toggle="collapse" data-parent="#accordion02" href="#collapse02-2" aria-expanded="false" aria-controls="collapse02-2"> MİSYONUMUZ </a>
									</h4>
								</div>
								<div id="collapse02-2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo" aria-expanded="false">
									<div class="panel-body"> Misyonumuz, her bütçeye ve ihtiyaca hitap eden, fiyat-performans oranı yüksek araçlar sunarak müşterilerimizin beklentilerini aşmaktır. Araç sahibi olma sürecinde sunduğumuz çözümlerle, alım-satım işlemini sadece bir işlem olarak görmüyor, aynı zamanda müşterilerimize uzun vadeli güvenilir bir partner olmayı hedefliyoruz. Özellikle vadeli satış seçeneklerimiz, müşterilerimizin ihtiyaçlarına esnek çözümler sunma konusundaki kararlılığımızın bir göstergesidir. </div>
								</div>
							</div>
							
							<!-- Panel 03 -->
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingThree">
									<h4 class="panel-title">
										<a class="accordion-toggle collapsed" role="button" data-toggle="collapse" data-parent="#accordion02" href="#collapse02-3" aria-expanded="false" aria-controls="collapse02-3">VİZYONUMUZ</a>
									</h4>
								</div>
								<div id="collapse02-3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree" aria-expanded="true">
									<div class="panel-body"> Vizyonumuz, sektörümüzde güvenilirlik ve müşteri odaklı hizmetle anılan bir marka olmak, her adımda müşteri memnuniyetini ön planda tutarak sektörde öncü konuma ulaşmaktır. Yalnızca araç satışı yapmıyor, aynı zamanda bu süreci en şeffaf şekilde yöneterek, müşterilerimizin doğru kararlar almasına yardımcı oluyoruz. Araçlarımızın boya, kaporta ve mekanik aksamları, kendi bünyemizde deneyimli ekibimiz tarafından detaylı kontrollerden geçirilir. Müşterilerimize sunduğumuz her aracın durumu hakkında en küçük detaya kadar bilgilendirme yapıyoruz, böylece alım sürecinde hiçbir sürpriz yaşanmaması için titizlikle çalışıyoruz. </div>
								</div>
							</div>
							
							
						</div>
						<!-- .accordion end -->
					</div>
					<!-- .about-accordion end -->
				</div>
				<!-- .col-md-6 end -->
				<div class="col-xs-12 col-sm-12 col-md-6">
					<div class="heading">
						<p class="subheading">Güvenilir Hizmet</p>
						<h2>NEDEN KIRLI OTOMOTİV </h2>
					</div>
					<!-- .heading end -->
					<div class="row">
						<div class="col-xs-12 col-sm-6 col-md-6">
							<div class="feature-panel">
								<div class="feature-icon">
									<i class="icon icon-Time"></i>
								</div>
								<h4 class="text-uppercase">Her Zaman Ulaşılabilir</h4>
								<p>Müşterilerimize haftanın her günü ve her saatinde hizmet veriyoruz. İhtiyacınız olan desteği alabilmeniz için daima yanınızdayız. Araç alım-satım sürecinde aklınıza takılan her konuda hızlı ve etkili çözümler sunarak güvenilir bir hizmet sağlıyoruz.</p>
							</div>
						</div>
						<!-- .col-md-6 end -->
						<div class="col-xs-12 col-sm-6 col-md-6">
							<div class="feature-panel">
								<div class="feature-icon">
									<i class="icon icon-Shield"></i>
								</div>
								<h4 class="text-uppercase">Adil ve Şeffaf Fiyatlandırma</h4>
								<p>Araçlarımızda her zaman makul ve rekabetçi fiyatlar sunarız. Bütçenizi koruyarak, uygun ödeme planlarıyla hayalinizdeki aracı size ulaştırıyoruz. Fiyatlandırmada şeffaflık ilkesiyle hareket ederek, gizli maliyetlerden kaçınıyor ve her detayı sizinle paylaşıyoruz.</p>
							</div>
						</div>
						<!-- .col-md-6 end -->
						<div class="col-xs-12 col-sm-6 col-md-6">
							<div class="feature-panel mb-0">
								<div class="feature-icon">
									<i class="icon icon-Wallet"></i>
								</div>
								<h4 class="text-uppercase">En İyi Fırsatlar</h4>
								<p>Kırlı Oto Galeri, müşterilerine en uygun  cazip ödeme seçenekleri sunar. Vadeli ödeme imkânları ile bütçenize uygun fırsatları değerlendirebilirsiniz.</p>
							</div>
						</div>
						<!-- .col-md-6 end -->
						<div class="col-xs-12 col-sm-6 col-md-6">
							<div class="feature-panel mb-0">
								<div class="feature-icon">
									<i class="icon icon-Star"></i>
								</div>
								<h4 class="text-uppercase">Satış Sonrası Destek</h4>
								<p>Beklenmedik durumlarda yanınızda olarak hızlı çözümler sunuyoruz.</p>
							</div>
						</div>
					</div>
				</div>
				<!-- .col-md-6 end -->
			</div>
			<!-- .row end -->
		</div>
		<!-- .container end -->
	</section>
	<!-- #featured1 end -->
	
	<!-- Blog
============================================= -->
	<section id="blog" class="blog blog-grid bg-gray">
		<div class="container heading">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12">
					<p class="subheading">Yeni Haberler</p>
					<h2>HAKKIMIZDA HABERLER</h2>
				</div>
				<!-- .col-md-12 end -->
			</div>
			<!-- .row end -->
			
			<div class="row heading-desc">
				<div class="col-xs-12 col-sm-12 col-md-10">
					<p>Kırlı Oto Galeri olarak her araç teslimatında mutlu anlar biriktiriyoruz. Müşterilerimizle gerçekleştirdiğimiz araç alım-satım sürecinin ardından, bu değerli anları ölümsüzleştirmek için fotoğraflar çekiyoruz. Satış sonrası memnuniyet, bizim için sürecin en önemli parçasıdır. Her müşterimizin yüzündeki gülümseme, güvene dayalı hizmet anlayışımızın en büyük göstergesidir.

Bu bölümde, müşterilerimizle gerçekleştirdiğimiz araç teslimatı anlarına dair fotoğrafları görebilir ve Kırlı Oto Galeri'nin müşteri memnuniyeti odaklı yaklaşımına tanıklık edebilirsiniz. Bizimle çalışan her müşteri, uzun soluklu bir iş birliğinin parçası olur. Satış sonrası destek ve güvene dayalı ilişkilerimizle her zaman yanınızdayız!

Siz de bu mutlu anlara katılmak ve Kırlı Oto Galeri ailesinin bir parçası olmak için bize uğrayın!</p>
				</div>
			</div>
			<div style="width: 100%; height: 100%;">
    	<embed src="https://www.instagram.com/krl_garage/embed" style="width: 100%; height: 1000px;" />
	</div>
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
							<i class="fa fa-phone" style="margin-right: 5px;"></i> tel:+90 (542) 228 99 38
							+90 (541) 472 96 88
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

					<!-- .col-md-2 end -->
				</div>
			</div>
			<!-- .container end -->
		</div>
		<!-- .footer-widget end -->
		
		<!-- Footer Bar
	============================================= -->
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
									<a href="#">Stores</a>
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