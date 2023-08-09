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
<header class="page-header" data-background="images/faq/frost.jpeg" data-stellar-background-ratio="0.7">
	<div class="container">
	<h2><?= __('T&C')?></h2>
		<p><?= __('Under what circumstances can I get a claim?')?></p>
	</div>
	<!-- end container -->
	 <div class="parallax-element" data-stellar-ratio="2"></div>
    <!-- end parallax-element --> 
</header>
<!-- end page-header -->
<section class="content-section">
  <div class="container">
    <div class="row">
		<div class="col-12">
		  <div class="section-title text-left">
			  <h2><?= __('Under what circumstances can I get a claim?')?></h2>
			  <div class="row inner">
			    <div class="col-md-6">
            <p><?= __('When the courier company delivers the package, you can open the package on the spot in front of the courier delivery person before signing for it, and then immediately confirm whether the goods are in good condition. All OK and then sign for it. If you are signed for by your family or neighbors under other circumstances, and you do not immediately confirm with the courier on the spot, if you find abnormalities and other problems after opening the package, please be sure to take 3 or more photos and video as proof at the first time.')?></p>
          </div>
		      <!-- end col-6 -->
		      <div class="col-md-6">
            <p><?= __('Whether you receive shelled durian or frozen durian pulp, please open it as soon as possible to confirm whether the received durian is in good condition. If you find any bad fruit, sour or smelly, etc., please take 3 or more photos and video as evidence and send it to the sender.')?></p>
          </div>
		      <!-- end col-6 -->
			  </div>
			  <!-- end row -->
			</div>
			<!-- end section-title -->
		</div>
		<!-- end col-12 -->
		<div class="col-12">
			<div class="side-image-box">
			<figure><img src="images/side-image-box01.jpg" alt="Image"></figure>
				<div class="content">
			    <h3><?= __('Black Seed')?></h3>
				<p><?= __('If you open a fruit, there is a black part next to a small piece of durian flesh [not payable]. The problem of black seed is generally when there are 1-2 rooms open, and you can take pictures and record videos to provide our after-sales service.')?></p>
                <p><?= __('Calculation')?>🧮<br>
                <?= __('Black seeds or fruit pulp may turn black')?><br><?= __('If this phenomenon occurs in only one room, such as 5 rooms, then 20% will be lost.')?><br><?= __('For example, the price of one kilogram is RMB 180')?><br><?= __('If the durian is 2 kg, you will lose 400 grams, which is only RMB 72.')?></p>
                </div>
				<!-- end content -->
			</div>
			<!-- end side-image-box -->
			<div class="side-image-box">
			<figure><img src="images/side-image-box02.jpg" alt="Image"></figure>
				<div class="content">
				  <h3><?= __('Not Enough Durian')?></h3>
					<p><?= __('The received merchandise does not match the actual weight. For example: order 400 grams of durian pulp, but only received 300 grams. (Be sure to take photos or videos).')?></p>
				</div>
				<!-- end content -->
			</div>
			<!-- end side-image-box -->
			<div class="side-image-box">
			<figure><img src="images/side-image-box03.jpg" alt="Image"></figure>
				<div class="content">
				  <h3><?= __('Bad Fruit Problem')?></h3>
					<p><?= __('When I received it, it was found to be sour and smelly (be sure to take 3 or more photos and video).')?></p>
				</div>
				<!-- end content -->
			</div>
			<!-- end side-image-box -->
			<div class="side-image-box">
			<figure><img src="images/side-image-box04.jpg" alt="Image"></figure>
				<div class="content">
				  <h3><?= __('Transportation')?></h3>
					<p>
          <?= __('The quality of the durian is damaged or the entire outer box has been broken during the loss, and the quality of the durian has been affected and deteriorated (be sure to take more than 3 photos and video).')?></p>
				</div>
				<!-- end content -->
			</div>
			<!-- end side-image-box -->
		</div>
		<!-- end col-12 -->
    </div>
    <!-- end row --> 
  </div>
  <!-- end container --> 
  <div class="container">
    <div class="row align-items-center">
      <div class="col-12">
       <div class="section-title">
          <h6></h6>
          <h2><?= __('Under what circumstances will not be paid?')?></h2>
        </div>
      </div>
      <!-- end col-12 -->
      <div class="col-md-6">
        <div class="icon-box left">
          <figure><img src="images/icon01.png" alt="Image"></figure>
			<div class="content">
				<h6></h6>
                <p><?= __('If the parcel is overdue, the complaint will not be settled more than 12 hours after receiving the parcel. (Especially stored in the security room or company front desk).')?></p>
			</div>
			<!-- end content -->
        </div>
        <!-- end icon-box --> 
      </div>
      <!-- end col-6 -->
      <div class="col-md-6">
        <div class="icon-box left">
          <figure><img src="images/icon02.png" alt="Image"></figure>
			<div class="content">
				<h6></h6>
                <p><?= __('If the goods are not stored in the proper place after receiving the goods, they will not be compensated if the quality has deteriorated.')?></p>
			</div>
			<!-- end content -->
        </div>
        <!-- end icon-box --> 
      </div>
      <!-- end col-6 -->
      <div class="col-md-6">
        <div class="icon-box left">
          <figure><img src="images/icon03.png" alt="Image"></figure>
			<div class="content">
				<h6></h6>
                <p><?= __('The whole durian fruit does not guarantee a few rooms, and it is not in the scope of compensation.')?></p>
			</div>
			<!-- end content -->
        </div>
        <!-- end icon-box --> 
      </div>
      <!-- end col-6 -->
      <div class="col-md-6">
        <div class="icon-box left">
          <figure><img src="images/icon04.png" alt="Image"></figure>
			<div class="content">
				<h6></h6>
                <p><?= __('No claims will be made due to personal subjective perceptions such as personal taste, color and lustre.')?></p>
			</div>
			<!-- end content -->
        </div>
        <!-- end icon-box --> 
      </div>
      <!-- end col-6 -->
      <div class="col-md-6">
        <div class="icon-box left">
          <figure><img src="images/icon04.png" alt="Image"></figure>
			<div class="content">
				<h6></h6>
                <p><?= __('If the quality of the durian is in a certain condition and the 3 photos or videos are not taken immediately, but the durian is lost, thrown away or given away, no compensation will be given.')?></p>
			</div>
			<!-- end content -->
        </div>
        <!-- end icon-box --> 
      </div>
      <!-- end col-6 -->
      <div class="col-md-6">
        <div class="icon-box left">
          <figure><img src="images/icon04.png" alt="Image"></figure>
			<div class="content">
				<h6></h6>
                <p><?= __("If you encounter problems such as the customer's phone number cannot be contacted during the delivery, the delivery address is incorrect, etc., the consignee cannot be contacted and cannot be as scheduled No claims will be made for delivery.")?></p>
			</div>
			<!-- end content -->
        </div>
        <!-- end icon-box --> 
      </div>
      <!-- end col-6 -->
    </div>
    <!-- end row --> 
  </div>
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