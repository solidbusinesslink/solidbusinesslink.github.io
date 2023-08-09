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
<header class="header">
  <div class="main-slider">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <div class="slide-image" data-background="images/slide01.jpg"></div>
        <!-- end slider-image -->
        <div class="slide-inner">
          <h1><?= __('Durian Factory')?></h1>
          <p><?= __('Production and processing, in line with export guidelines')?></p>
          <!--a href="#">SEE ALL TIPS</a--> 
        </div>
        <!-- end slide-inner --> 
      </div>
      <!-- end swiper-slide -->
      <div class="swiper-slide">
        <div class="slide-image" data-background="images/slide02.jpg"></div>
        <!-- end slider-image -->
        <div class="slide-inner">
          <h1><?= __('Durian Farm')?></h1>
          <p><?= __('Planting, fertilizing, harvesting, harvesting fruit')?></p>
          <!--a href="#">SEE ALL TIPS</a--> 
        </div>
        <!-- end slide-inner --> 
      </div>
      <!-- end swiper-slide -->
      <div class="swiper-slide">
        <div class="slide-image" data-background="images/slide03.jpg"></div>
        <!-- end slider-image -->
        <div class="slide-inner">
          <h1><?= __('Cold chain logistics/export documents')?></h1>
          <p><?= __('GMP, GACC, health certificate, quarantine certificate, certificate of origin, etc.')?></p>
          <!--a href="#">SEE ALL TIPS</a--> 
        </div>
        <!-- end slide-inner --> 
      </div>
      <!-- end swiper-slide -->
      <div class="swiper-slide">
        <div class="slide-image" data-background="images/slide04.jpg"></div>
        <!-- end slider-image -->
        <div class="slide-inner">
          <h1><?= __('Marketing Planning')?></h1>
          <p><?= __('Target Marketing Planning')?></p>
          <!--a href="#">SEE ALL TIPS</a--> 
        </div>
        <!-- end slide-inner --> 
      </div>
      <!-- end swiper-slide -->
    </div>
    <!-- end swiper-wrapper -->
    <div class="button-prev"><i class="lni lni-chevron-left"></i></div>
    <!-- end button-prev -->
    <div class="button-next"><i class="lni lni-chevron-right"></i></div>
    <!-- end button-next -->
    <div class="swiper-pagination"></div>
    <!-- end swiper-pagination -->
    <div class="parallax-element" data-stellar-ratio="2"></div>
    <!-- end parallax-element --> 
  </div>
  <!-- end main-slider --> 
</header>
<!-- end header -->
<section class="content-section" data-background="images/section-bg01.png" data-stellar-background-ratio="1.2">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6">
        <div class="side-content left">
          <h2><?= __('Welcome')?></h2>
          <h6><?= __('Durian Duke Group Malaysia')?></h6>
          <p><?= __('Durian Duke Group act as Durian Academy group sharing and teaching Malaysia Durian knowledge in order to cultivate and developed more peoples enhance their Durian sharing skill.')?></p>
          <a href="about.php" class="custom-button"><?= __('More Info')?></a> </div>
        <!-- end side-content --> 
      </div>
      <!-- end col-6 -->
      <div class="col-lg-6">
          <div class="side-image">
		    <video width="100%" controls><source src="videos/introduction.mp4" type="video/mp4"></video> 
		  </div>
        <!--div class="side-slider">
          <div class="slider">
            <div class="swiper-wrapper">
              <div class="swiper-slide"> <img src="images/side-slide01.jpg" alt="Image"> </div>
              <div class="swiper-slide"> <img src="images/side-slide02.jpg" alt="Image"> </div>
              <div class="swiper-slide"> <img src="images/side-slide03.jpg" alt="Image"> </div>
              <!-- end swiper-slide -> 
            </div>
            <!-- end swiper-wrapper ->
            <div class="swiper-pagination"></div>
            <!-- end swiper-pagination -> 
          </div>
          <!-- end slider ->
        </div>
        <!-- end side-slider --> 
      </div>
      <!-- end col-6 --> 
    </div>
    <!-- end row --> 
  </div>
  <!-- end container --> 
</section>
<!-- end content-section -->
<section class="content-section" data-background="#fbf7f4">
  <div class="container">
    <div class="section-title">
      <figure> <img src="images/section-title-shape.png" alt="Image"> </figure>
      <h6><?= __('Popular Durian')?></h6>
      <h2><?= __('Durian Species')?></h2>
    </div>
    <!-- end section-title --> 
  </div>
  <!-- end container -->
  <div class="carousel-image-box">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <figure> <img src="images/durian/D197_P.jpg" alt="Image"> </figure>
        <div class="content"> 
          <small><?= __('Origin: Pahang')?></small>
          <h5><?= __('D197 Musang King')?></h5>
        </div>
        <!-- end content --> 
      </div>
      <!-- end swiper-slide -->
      <div class="swiper-slide">
        <figure> <img src="images/durian/D200_P.jpg" alt="Image"> </figure>
        <div class="content">
          <small><?= __('Origin: Penang')?></small>
          <h5><?= __('D200')?></h5>
        </div>
        <!-- end content --> 
      </div>
      <!-- end swiper-slide -->
      <div class="swiper-slide">
        <figure> <img src="images/durian/D13_P.jpg" alt="Image"> </figure>
        <div class="content"> 
          <small><?= __('Origin: Whole Malaysia')?></small>
          <h5><?= __('D13')?></h5>
        </div>
        <!-- end content --> 
      </div>
      <!-- end swiper-slide -->
      <div class="swiper-slide">
        <figure> <img src="images/durian/D24_P.jpg" alt="Image"> </figure>
        <div class="content">
          <small><?= __('Origin: Whole Malaysia')?></small>
          <h5><?= __('D24')?></h5>
        </div>
        <!-- end content --> 
      </div>
      <!-- end swiper-slide -->
      <div class="swiper-slide">
        <figure> <img src="images/durian/D101_P.jpg" alt="Image"> </figure>
        <div class="content"> 
          <small><?= __('Origin: Johor')?></small>
          <h5><?= __('D101')?></h5>
        </div>
        <!-- end content --> 
      </div>
      <!-- end swiper-slide -->
      <div class="swiper-slide">
        <figure> <img src="images/durian/D163_P.jpg" alt="Image"> </figure>
        <div class="content">
          <small><?= __('Origin: Penang')?></small>
          <h5><?= __('D163')?></h5>
        </div>
        <!-- end content --> 
      </div>
      <!-- end swiper-slide -->
      <div class="swiper-slide">
        <figure> <img src="images/durian/D175_P.jpg" alt="Image"> </figure>
        <div class="content">
          <small><?= __('Origin: Penang')?></small>
          <h5><?= __('D175')?></h5>
        </div>
        <!-- end content --> 
      </div>
      <!-- end swiper-slide -->
      <div class="swiper-slide">
        <figure> <img src="images/durian/D160_P.jpg" alt="Image"> </figure>
        <div class="content">
          <small><?= __('Origin: Johor, Pahang')?></small>
          <h5><?= __('D160')?></h5>
        </div>
        <!-- end content --> 
      </div>
      <!-- end swiper-slide -->
      <div class="swiper-slide">
        <figure> <img src="images/durian/D198_P.jpg" alt="Image"> </figure>
        <div class="content">
          <small><?= __('Origin: Johor, Selangor')?></small>
          <h5><?= __('D198')?></h5>
        </div>
        <!-- end content --> 
      </div>
      <!-- end swiper-slide -->
      <div class="swiper-slide">
        <figure> <img src="images/durian/D88_P.jpg" alt="Image"> </figure>
        <div class="content">
          <small><?= __('Origin: Johor')?></small>
          <h5><?= __('D88')?></h5>
        </div>
        <!-- end content --> 
      </div>
      <!-- end swiper-slide -->
      <div class="swiper-slide">
        <figure> <img src="images/durian/D208_P.jpg" alt="Image"> </figure>
        <div class="content">
          <small><?= __('Origin: Johor')?></small>
          <h5><?= __('D208')?></h5>
        </div>
        <!-- end content --> 
      </div>
      <!-- end swiper-slide -->
    </div>
    <!-- end swiper-wrapper -->
    <div class="swiper-pagination"></div>
    <!-- end swiper-pagination --> 
  </div>
  <!-- end carousel-image-box --> 
</section>
<!-- end content-section -->
<section class="content-section no-top-spacing">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-12">
        <div class="section-title">
          <h2><?= __('T&C')?></h2>
        </div>
        <!-- end section-title --> 
      </div>
      <!-- end col-12 -->
      <div class="col-lg-3 col-md-3">
          <a href="our-work.php">
            <div class="icon-box">
              <figure><img src="images/tnc/side-image-box01.jpg" alt="Image"></figure>
    			<div class="content">
              <p><?= __('Black Seed')?></p>
    				</div>
    			<!-- end content -->
            </div>
            <!-- end icon-box --> 
          </a>
      </div>
      <!-- end col-4 -->
      <div class="col-lg-3 col-md-3">
          <a href="our-work.php">
            <div class="icon-box">
              <figure><img src="images/tnc/side-image-box02.jpg" alt="Image"></figure>
    			<div class="content">
              <p><?= __('Not Enough Durian')?></p>
    				</div>
    			<!-- end content -->
            </div>
            <!-- end icon-box --> 
          </a>
      </div>
      <!-- end col-4 -->
      <div class="col-lg-3 col-md-3">
          <a href="our-work.php">
            <div class="icon-box">
              <figure><img src="images/tnc/side-image-box03.jpg" alt="Image"></figure>
    			<div class="content">
              <p><?= __('Bad Fruit Problem')?></p>
    				</div>
    			<!-- end content -->
            </div>
            <!-- end icon-box --> 
          </a>
      </div>
      <!-- end col-4 -->
      <div class="col-lg-3 col-md-3">
          <a href="our-work.php">
            <div class="icon-box">
              <figure><img src="images/tnc/side-image-box04.jpg" alt="Image"></figure>
    			<div class="content">
              <p><?= __('Transportation')?></p>
    				</div>
    			<!-- end content -->
            </div>
            <!-- end icon-box -->
          </a>
      </div>
      <!-- end col-4 -->
    </div>
    <!-- end row --> 
  </div>
  <!-- end container --> 
</section>
<!-- end content-section -->
<!--section class="content-section" data-background="#009a4e">
  <div class="container">
    <div class="row">
      <div class="col-12">
		  <div class="timeline-slider">
		<h2 class="title">榴莲历史</h2>
		<div class="timeline-years">
			<div class="swiper-wrapper">
        		<div class="swiper-slide"><span>2020</span></div>
        		<div class="swiper-slide"><span>2019</span></div>
        		<div class="swiper-slide"><span>2018</span></div>
        		<div class="swiper-slide"><span>2017</span></div>
        		<div class="swiper-slide"><span>2016</span></div>
        		<div class="swiper-slide"><span>2015</span></div>
        		<div class="swiper-slide"><span>2014</span></div>
        		<div class="swiper-slide"><span>2013</span></div>
        		<div class="swiper-slide"><span>2012</span></div>
        		<div class="swiper-slide"><span>2011</span></div>
			</div>
      <div class="swiper-pagination"></div>
		</div>
		
		<div class="timeline-content">
			<div class="swiper-wrapper">
		<div class="swiper-slide"><div class="content">
                    <h2>2020 World’s food and fabrics</h2>
                              <p>Agriculture provides most of the world’s food and fabrics. Cotton, wool, and leather are all agricultural products. </p>
                  </div>
			</div>
		<div class="swiper-slide"><div class="content">
                    <h2>2019World’s food and fabrics</h2>
                              <p>Agriculture provides most of the world’s food and fabrics. Cotton, wool, and leather are all agricultural products. </p>
                  </div>
			</div>
			<div class="swiper-slide"><div class="content">
                    <h2>2018 World’s food and fabrics</h2>
                              <p>Agriculture provides most of the world’s food and fabrics. Cotton, wool, and leather are all agricultural products. </p>
                  </div>
			</div>
			<div class="swiper-slide"><div class="content">
                    <h2>2017 World’s food and fabrics</h2>
                              <p>Agriculture provides most of the world’s food and fabrics. Cotton, wool, and leather are all agricultural products. </p>
                  </div>
			</div>
			<div class="swiper-slide"><div class="content">
                    <h2>2016 World’s food and fabrics</h2>
                              <p>Agriculture provides most of the world’s food and fabrics. Cotton, wool, and leather are all agricultural products. </p>
                  </div>
			</div>
			<div class="swiper-slide"><div class="content">
                    <h2>2015 World’s food and fabrics</h2>
                              <p>Agriculture provides most of the world’s food and fabrics. Cotton, wool, and leather are all agricultural products. </p>
                  </div>
			</div>
			<div class="swiper-slide"><div class="content">
                    <h2>2014 World’s food and fabrics</h2>
                              <p>Agriculture provides most of the world’s food and fabrics. Cotton, wool, and leather are all agricultural products. </p>
                  </div>
			</div>
			<div class="swiper-slide"><div class="content">
                    <h2>2013 World’s food and fabrics</h2>
                              <p>Agriculture provides most of the world’s food and fabrics. Cotton, wool, and leather are all agricultural products. </p>
                  </div>
			</div>
			<div class="swiper-slide"><div class="content">
                    <h2>2012 World’s food and fabrics</h2>
                              <p>Agriculture provides most of the world’s food and fabrics. Cotton, wool, and leather are all agricultural products. </p>
                  </div>
			</div>
				<div class="swiper-slide"><div class="content">
                    <h2>2011 World’s food and fabrics</h2>
                              <p>Agriculture provides most of the world’s food and fabrics. Cotton, wool, and leather are all agricultural products. </p>
                  </div>
			</div>
				</div>
		</div>
	</div>
      </div>
    </div>
  </div>
</section>
<!-- end content-section -->
<!--div class="content-section timeline-image" data-background="images/timeline-image.jpg"> </div-->
<!-- end content-section -->
<!--section class="content-section" data-background="images/section-bg01.png" data-stellar-background-ratio="1.2">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12">
        <div class="section-title">
          <figure> <img src="images/section-title-shape.png" alt="Image"> </figure>
          <h6></h6>
          <h2></h2>
        </div> 
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="latest-news">
          <figure><img src="images/news01.jpg" alt="Image"><span>Oct 07, 2021</span></figure>
          <h4>续-11 - 榴莲成长结果期</h4>
          <p>在80年代以前，一颗马来西亚🇲🇾榴莲自然成长到打花🌸，需要大概15年。随着*🈚公害-有机种植法+(许多营养微量元素的改良MPK,
            Calcium,再➕上益生菌，不断改良，在90年代末....</p>
          <a href="#" class="custom-link">更多</a> </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="latest-news">
          <figure><img src="images/news02.jpg" alt="Image"><span>Oct 08, 2021</span></figure>
          <h4>续-12 - 种榴莲-适合的泥土</h4>
          <p>所以，动物界里，万兽之王，应该是*狮子🦁*还是*老虎🐯* ? 还有其它的，众说纷纭。....</p>
          <a href="#" class="custom-link">更多</a> </div>
      </div>
      <div class="col-lg-4">
        <div class="latest-news">
          <figure><img src="images/news03.jpg" alt="Image"><span>Oct 09, 2021</span></figure>
          <h4>续-13 - 榴莲打花🌸和结果</h4>
          <p>在马来西亚🇲🇾北马，西北风吹起，(以前是年底11/12月，气候转变，成了12/1月)，太阳的热度有保持33到36度最少10天，榴莲树身受热后，延伸到榴莲树根，就会*打花🌸或者飚花*.... </p>
          <a href="#" class="custom-link">更多</a> </div>
      </div>
    </div>
  </div>
</section>
<!-- end content-section -->
<!--section class="content-section">
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
<div class="modal fade" id="videoModal">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="container">
                <div class="row align-items-center">
                    <video width="100%" controls><source src="videos/introduction.mp4" type="video/mp4"></video>
                </div>
            </div>
        </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

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
<script>
$(function () {
    $('#viewVideo').on('click', function(){
        $('#videoModal').modal('show');
    });
});
</script>
</body>
</html>