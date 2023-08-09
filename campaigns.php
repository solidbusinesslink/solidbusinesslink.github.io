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
              <li><a href="index.php?lang=bm"><?= __('Malay')?></a></li>
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
<header class="page-header" data-background="images/durian/durian-type.jpeg" data-stellar-background-ratio="0.7">
	<div class="container">
	    <h2><?= __('Durian Species')?></h2>
		<p><?= __('All Species of Durian')?></p>
	</div>
	<!-- end container -->
	 <div class="parallax-element" data-stellar-ratio="2"></div>
    <!-- end parallax-element --> 
</header>
<!-- end page-header -->
<section class="content-section">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
			<div class="image-caption-box">
		  	<figure> <img src="images/durian/D197.jpg" alt="Image"> </figure>
				<div class="content"> 
                  <small><?= __('Origin: Pahang')?></small>
                  <h5><?= __('D197 Musang King')?></h5>
                  <p><?= __('The taste is fragrant and sweet')?></p>
                </div>
		  </div>
		  <!-- end image-caption-box -->
		</div>
		<!-- end col-6 -->
      <div class="col-md-6">
			<div class="image-caption-box">
		  	<figure> <img src="images/durian/D13.jpg" alt="Image"> </figure>
				<div class="content"> 
                  <small><?= __('Origin: Whole Malaysia')?></small>
                  <h5><?= __('D13')?></h5>
                  <p><?= __('The flesh is white and yellow, slightly bitter and sweet, with a sticky taste.')?></p>
                </div>
		  </div>
		  <!-- end image-caption-box -->
		</div>
		<!-- end col-6 -->
		
      <div class="col-md-6">
			<div class="image-caption-box">
		  	<figure> <img src="images/durian/D101.jpg" alt="Image"> </figure>
				<div class="content"> 
                  <small><?= __('Origin: Johor')?></small>
                  <h5><?= __('D101')?></h5>
                  <p><?= __('The flesh is golden in color and small. The sweetness is high, and the pulp of the old tree will bring back a little sweetness.')?></p>
                </div>
		  </div>
		  <!-- end image-caption-box -->
		</div>
		<!-- end col-6 -->
      <div class="col-md-6">
			<div class="image-caption-box">
		  	<figure> <img src="images/durian/D163.jpg" alt="Image"> </figure>
				<div class="content"> 
                    <small><?= __('Origin: Penang')?></small>
                    <h5><?= __('D163')?></h5>
                    <p><?= __('It is characterized by its thick flesh, dense, slightly dry and sticky taste, slightly bitter taste, and a chocolate scent.')?></p>
                </div>
		  </div>
		  <!-- end image-caption-box -->
		</div>
		<!-- end col-6 -->
		
    <div class="col-md-6">
			<div class="image-caption-box">
		  	<figure> <img src="images/durian/D175.jpg" alt="Image"> </figure>
				<div class="content"> 
                    <small><?= __('Origin: Penang')?></small>
                    <h5><?= __('D175')?></h5>
                    <p><?= __('The meat is dense and the taste is rich and sweet.')?></p>
                </div>
		  </div>
		  <!-- end image-caption-box -->
		</div>
		<!-- end col-6 -->
    <div class="col-md-6">
			<div class="image-caption-box">
		  	<figure> <img src="images/durian/D24.jpg" alt="Image"> </figure>
				<div class="content"> 
                    <small><?= __('Origin: Whole Malaysia')?></small>
                    <h5><?= __('D24')?></h5>
                    <p><?= __('The fruit is thin and round, the flesh is orange-yellow, the taste is sweet and the flesh is soft.')?></p>
                </div>
		  </div>
		  <!-- end image-caption-box -->
		</div>
		<!-- end col-6 -->
		<ul class="pagination">
            <li class="page-item active"> <a class="page-link" href="campaigns.php">1</a> </li>
            <li class="page-item"> <a class="page-link" href="durian2.php">2</a> </li>
            <li class="page-item"> <a class="page-link" href="durian2.php"><?= __('Next')?></a> </li>
        </ul>
    </div>
    <!-- end row --> 
  </div>
  <!-- end container --> 
</section>
<!-- end content-section -->	
<footer class="footer">
  <div class="container">
    <div class="row">
        <div class="footer-bottom"> <span>© 2021 Durian Duke | <?= __('Friendship can be established even if the deal may not success.')?></span> </div>
    </div>
    <!-- end row --> 
  </div>
  <!-- end container --> 
</footer>
<!-- end footer --> 

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