<?php 
require 'lang.php';
?>

<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="theme-color" content="#009a4e"/>
<title>Durian Duke</title>
<meta name="author" content="Themezinho">
<meta name="description" content="From durian orchard, production and processing, cold chain transportation and export documents, cold storage, marketing, to create your own brand, and even drop shipping.">
<meta name="keywords" content="agriculture, food, fruit, durian, king of fruits, musang king, raub, malaysia">

<!-- SOCIAL MEDIA META -->
<meta property="og:description" content="From durian orchard, production and processing, cold chain transportation and export documents, cold storage, marketing, to create your own brand, and even drop shipping.">
<meta property="og:image:url" content="https://durianduke.com/images/favicon.png">
<meta property="og:site_name" content="Durian Duke">
<meta property="og:title" content="Durian Duke">
<meta property="og:type" content="website">
<meta property="og:url" content="https://durianduke.com/">

<!-- TWITTER META -->
<meta name="twitter:card" content="summary">
<meta name="twitter:site" content="@DurianDuke">
<meta name="twitter:creator" content="@DurianDuke">
<meta name="twitter:title" content="Durian Duke">
<meta name="twitter:description" content="From durian orchard, production and processing, cold chain transportation and export documents, cold storage, marketing, to create your own brand, and even drop shipping.">
<meta name="twitter:image" content="https://durianduke.com/images/favicon.png">

<!-- FAVICON FILES -->
<link href="ico/apple-touch-icon-144-precomposed.png" rel="apple-touch-icon" sizes="144x144">
<link href="ico/apple-touch-icon-114-precomposed.png" rel="apple-touch-icon" sizes="114x114">
<link href="ico/apple-touch-icon-72-precomposed.png" rel="apple-touch-icon" sizes="72x72">
<link href="ico/apple-touch-icon-57-precomposed.png" rel="apple-touch-icon">
<link href="images/favicon.png" rel="shortcut icon">

<!-- CSS FILES -->
<link rel="stylesheet" href="css/lineicons.css">
<link rel="stylesheet" href="css/fancybox.min.css">
<link rel="stylesheet" href="css/swiper.min.css">
<link rel="stylesheet" href="css/odometer.min.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">
</head>
<body>
  <div class="preloader"> <img src="images/preloader.gif" alt="Image"> </div>
  <!-- end preloader -->
  <div class="page-transition"></div>
  <!-- end page-transition -->
  <aside class="side-widget">
    <div class="inner">
      <div class="logo"> <a href="index.php"><img src="images/logo.png" alt="Image"></a> </div>
      <!-- end logo -->
      <div class="hide-mobile">
        <p><?= __('Friendship can be established even if the deal may not success.')?></p>
        <figure class="gallery">
          <a href="images/slide02.jpg" data-fancybox>
            <img src="images/slide02.jpg" alt="Image">
          </a>
          <a href="images/slide03.jpg" data-fancybox>
            <img src="images/slide03.jpg" alt="Image">
          </a>
        </figure>
      </div>
      <!-- end hide-mobile -->
      <div class="show-mobile">
        <div class="site-menu">
         <ul>
            <li><a href="index.php"><?= __('Home')?></a></li>
            <li><a href="about.php"><?= __('Durian Duke')?></a></li>
            <li><a href="#"><?= __('Durian Species')?></a>
                <ul>
                    <li><a href="campaigns.php"><?= __('Popular Species')?></a></li>
                    <li><a href="durian.php"><?= __('Other Species')?></a></li>
                </ul>
            </li>
            <li>
                <a href="#"><?= __('FAQs')?></a>
                <ul>
                <li><a href="explore-farming.php"><?= __('Defrost Steps')?></a></li>
                <li><a href="our-work.php"><?= __('T&C')?></a></li>
                </ul>
            </li>
            <li>
            <a href="#"><?= __('Durian Knowledge')?></a>
            <ul>
              <li><a href="book.php"><?= __('Durian Books')?></a></li>
              <li><a href="news.php"><?= __('Durian Knowledge')?></a></li>
            </ul>
          </li>
          <li>
            <a href="#"><?= __('Language')?></a>
            <ul>
              <li><a href="index.php?lang=en"><?= __('English')?></a></li>
              <li><a href="index.php?lang=zh"><?= __('Chinese')?></a></li>
              <li><a href="index.php?lang=bm"><?= __('Malay')?></a></li>
            </ul>
          </li>
        </ul>
        </div>
        <!-- end site-menu --> 
      </div>
      <!-- end show-mobile --> 
      <small>© 2021 Durian Duke</small> </div>
    <!-- end inner --> 
  </aside>
<!-- end side-widget -->
<div class="topbar">
<div class="container"> 
  <!--div class="text">That's right, we only sell 100% organic</div-->
  <div class="text"></div> 
  <!--div class="social-media"> 
    Follow us
    <ul>
      <li><a href="#"><i class="lni lni-facebook-filled"></i></a></li>
      <li><a href="#"><i class="lni lni-twitter-original"></i></a></li>
      <li><a href="#"><i class="lni lni-instagram"></i></a></li>
      <li><a href="#"><i class="lni lni-youtube"></i></a></li>
      <li><a href="#"><i class="lni lni-pinterest"></i></a></li>
    </ul>
  </div> 
  <div class="phone"><i class="lni lni-mobile"></i> +1 (850) 344 0 66</div--> 
</div>
<!-- end container --> 
</div>
<!-- end topbar -->
<nav class="navbar">
<div class="container">
      <div class="logo"> <a href="index.php"> <img src="images/logo.png" srcset="images/logo@2x.png" alt="Image"> </a> </div>
      <!-- end logo -->
      <div class="site-menu">
        <ul>
          <li><a href="index.php"><?= __('Home')?></a></li>
          <li><a href="about.php"><?= __('Durian Duke')?></a></li>
          <li><a href="#"><?= __('Durian Species')?></a>
            <ul>
              <li><a href="campaigns.php"><?= __('Popular Species')?></a></li>
              <li><a href="durian.php"><?= __('Other Species')?></a></li>
            </ul>
          </li>
          <li><a href="#"><?= __('FAQs')?></a>
            <ul>
              <li><a href="explore-farming.php"><?= __('Defrost Steps')?></a></li>
              <li><a href="our-work.php"><?= __('T&C')?></a></li>
            </ul>
          </li>
          <li>
            <a href="#"><?= __('Durian Knowledge')?></a>
            <ul>
              <li><a href="book.php"><?= __('Durian Books')?></a></li>
              <li><a href="news.php"><?= __('Durian Knowledge')?></a></li>
            </ul>
          </li>
          <li>
            <a href="#"><?= __('Language')?></a>
            <ul>
              <li><a href="index.php?lang=en"><?= __('English')?></a></li>
              <li><a href="index.php?lang=zh"><?= __('Chinese')?></a></li>
            </ul>
          </li>
        </ul>
      </div>
      <!-- end site-menu -->
      <!--div class="search-button"><i class="lni lni-search-alt"></i></div-->
      <!-- end search-button -->
      <div class="hamburger-menu"> <span></span> <span></span> <span></span> </div>
      <!-- end hamburger-menu --> 
    </div>
    <!-- end container --> 
</nav>
<!-- end navbar -->
<header class="page-header" data-background="images/gallery/gallery.jpg" data-stellar-background-ratio="0.7">
	<div class="container">
	    <h2><?= __('Durian Duke')?></h2>
		<p><?= __('Cultivate more people enter Malaysia Durian Industrial.')?></p>
	</div>
	<!-- end container -->
	 <div class="parallax-element" data-stellar-ratio="2"></div>
    <!-- end parallax-element --> 
</header>
<!-- end page-header -->
<section class="content-section" data-background="images/section-bg01.png" data-stellar-background-ratio="1.2">
  <div class="container">
    <div class="row align-items-center">
		<div class="col-12">
		<div class="section-title text-left">
		    <h6></h6>
          <h2><?= __('Durian Duke Group Malaysia')?></h2>
        </div>
			<!-- end section-title -->
		</div>
          <!-- end col-12 -->
      <div class="col-lg-6">
        <div class="side-content left">
          <p><?= __('Super one-stop service for Malaysian durians.')?></p>
          <p><?= __('From durian orchard, production and processing, cold chain transportation and export documents, cold storage, marketing, to create your own brand, and even drop shipping.')?></p>
          <p><?= __('The goal of the Durian Duke Club is to gather and integrate talents, share and exchange durian knowledge and understanding of the market on this big stage, and complement each other in the entire durian industry chain.')?></p>
          <p><?= __('The Duke of Malaysia’s club positions durians as the worlds, and they are in love with each other and forget each other. Looking forward to the creation of a stable international market for Malaysian durians!')?></p>
		  </div>
        <!-- end side-content --> 
      </div>
      <!-- end col-6 -->
      <div class="col-lg-6">
		  <div class="side-image">
		    <img src="images/aboutus.jpg" alt="Image"> 
		  </div>
		  <!-- end side-image -->
      </div>
      <!-- end col-6 --> 
    </div>
    <!-- end row --> 
  </div>
  <!-- end container --> 
</section>
<!-- end content-section -->
<section class="content-section" data-background="images/section-bg01.png" data-stellar-background-ratio="1.2">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6">
        <div class="side-image">
          <img src="images/gallery/globe.jpg" alt="Image"> 
        </div>
        <!-- end side-image -->
      </div>
      <!-- end col-6 -->
      <div class="col-lg-6">
        <div class="side-content left">
          <p><?= __('We distribute to many regions and countries around the world to serve Malaysian durians.')?></p>
		    </div>
        <!-- end side-content --> 
      </div>
      <!-- end col-6 --> 
    </div>
    <!-- end row --> 
  </div>
  <!-- end container --> 
</section>
<!-- end content-section -->
<section class="content-section">
  <div class="container">
    <div class="row align-items-center">
        <div class="col-12">
            <div class="section-title">
                <figure> <img src="images/section-title-shape.png" alt="Image"> </figure>
                <h6></h6>
                <h2><?= __('Gallery')?></h2>
            </div>
        </div>
        <!-- end col-12 -->
    </div>
    <!-- end row -->
    <ul class="gallery-grid">
		<li>
		    <figure><a href="images/gallery/gallery01.jpeg" data-fancybox><img src="images/gallery/gallery01.jpeg" alt="Image"></a></figure>
		</li>
		<!-- end li -->
		<li>
		    <figure><a href="images/gallery/gallery06.png" data-fancybox><img src="images/gallery/gallery06.png" alt="Image"></a></figure>
		</li>
		<!-- end li -->
		<li>
		    <figure><a href="images/gallery/gallery03.jpeg" data-fancybox><img src="images/gallery/gallery03.jpeg" alt="Image"></a></figure>
		</li>
		<!-- end li -->
		<li>
		    <figure><a href="images/gallery/gallery04.png" data-fancybox><img src="images/gallery/gallery04.png" alt="Image"></a></figure>
		</li>
		<!-- end li -->
		<li>
		    <figure><a href="images/gallery/gallery05.png" data-fancybox><img src="images/gallery/gallery05.png" alt="Image"></a></figure>
		</li>
		<!-- end li -->
		<li>
		    <figure><a href="images/gallery/gallery07.png" data-fancybox><img src="images/gallery/gallery07.png" alt="Image"></a></figure>
		</li>
		<!-- end li -->
	</ul>
  </div>
  <!-- end container --> 
</section>
<!-- end content-section ->	
<section class="content-section">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="section-title">
          <h6></h6>
          <h2></h2>
        </div>
        <!-- end section-title -> 
      </div>
      <!-- end col-12 ->
      <div class="col-lg-2 col-md-4 col-6">
        <figure class="logo-item"><img src="images/logo01.jpg" alt="Image"></figure>
      </div>
      <!-- end col-2 ->
      <div class="col-lg-2 col-md-4 col-6">
        <figure class="logo-item"><img src="images/logo02.jpg" alt="Image"></figure>
      </div>
      <!-- end col-2 ->
      <div class="col-lg-2 col-md-4 col-6">
        <figure class="logo-item"><img src="images/logo03.jpg" alt="Image"></figure>
      </div>
      <!-- end col-2 ->
      <div class="col-lg-2 col-md-4 col-6">
        <figure class="logo-item"><img src="images/logo04.jpg" alt="Image"></figure>
      </div>
      <!-- end col-2 ->
      <div class="col-lg-2 col-md-4 col-6">
        <figure class="logo-item"><img src="images/logo05.jpg" alt="Image"></figure>
      </div>
      <!-- end col-2 ->
      <div class="col-lg-2 col-md-4 col-6">
        <figure class="logo-item"><img src="images/logo06.jpg" alt="Image"></figure>
      </div>
      <!-- end col-2 -> 
    </div>
    <!-- end row -> 
  </div>
  <!-- end container -> 
</section>
<!-- end content-section -->
<!--footer class="footer">
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
        <div class="logo"> <a href="#"> <img src="images/logo.png" srcset="images/logo@2x.png" alt="Image"> </a> </div>
        <p>footer_desc</p>
      </div>
      <div class="footer-separator"></div>
      <div class="col-12">
        <div class="footer-bottom">  <span>© 2021 Durian Duke | footer_desc ?></span> </div>
      </div>
    </div>
  </div>
</footer>
<!-- end footer --> 

<footer class="footer">
  <div class="container">
    <div class="row">
        <div class="footer-bottom"> <span>© 2021 Durian Duke | <?= __('Friendship can be established even if the deal may not success.')?></span> </div>
    </div>
    <!-- end row --> 
  </div>
  <!-- end container --> 
</footer>

<!-- JS FILES --> 
<script src="js/jquery.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/swiper.min.js"></script> 
<script src="js/fancybox.min.js"></script> 
<script src="js/imagesloaded.pkgd.min.js"></script> 
<script src="js/isotope.min.js"></script> 
<script src="js/jquery.stellar.js"></script> 
<script src="js/odometer.min.js"></script> 
<script src="js/scripts.js"></script>
</body>
</html>