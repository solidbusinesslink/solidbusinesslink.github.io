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
<header class="page-header" data-background="images/knowledge/durian-knowledge.jpg" data-stellar-background-ratio="0.7">
	<div class="container">
	<h2><?= __('Durian Knowledge')?></h2>
		<p><?= __('Mainly share some cold knowledge of durian')?></p>
	</div>
	<!-- end container -->
	 <div class="parallax-element" data-stellar-ratio="2"></div>
    <!-- end parallax-element --> 
</header>
<!-- end page-header -->
<section class="content-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-8">
          		  <div class="blog-post">
		      <figure><img src="admin/php/blog/1640608031.jpg" alt="Image" onerror=this.src="images/faq/frost.jpeg"></figure>
			  <div class="post-content">
				  <span class="post-date">2021-10-11</span>
				  <h3 class="post-title"><?= __('Cont')?> -15 - <?= __('Durian playing flowers')?> 🌸+ <?= __('results.')?></h3><p>马来西亚🇲🇾新鲜榴莲打花，结果后，就是在*过程中*的变化。&nbsp; </p><p>以前，看到榴莲花🌸掉🈵地，觉得很可惜，现在看回去，觉得自己可笑，掉花🌸是正常的，是看怎样的*掉法*？&nbsp; </p><p>有些事情，是*GOD Act*,根本是*自然现象，阻挡不了的。&nbsp; </p><p>马来西亚🇲🇾新鲜榴莲，掉果是🈶*时间表*的。&nbsp; </p><p>要么就是半夜凌晨三点🕒到早上六点，要么就是下午3点到6点。&nbsp; </p><p>榴莲生长在树枝上吊着，在*枝头*或者*榴莲蒂*上，是有两段*环节*的，当掉果时，是在第二段，新鲜榴莲熟到90多%，在凌晨被露水*湿润*后，被风轻轻一吹，新鲜榴莲就掉下来。<br></p>			  </div>
		  </div>
		  		  <div class="blog-post">
		      <figure><img src="admin/php/" alt="Image" onerror=this.src="images/faq/frost.jpeg"></figure>
			  <div class="post-content">
				  <span class="post-date">2021-10-10</span>
				  <h3 class="post-title"><?= __('Cont')?> -14 - <?= __('Durian playing flowers')?> 🌸 + <?= __('results.')?></h3><p>从榴莲大家花🌸开始，会在榴莲支干上，看到小白点，通常一支6尺的支干，从靠近榴莲树身开始，普遍上是一尺左右一个点，6尺长就5个点(榴莲支干尾端，很少🈶花，即使🈶花，也是要放Y棍支撑着，或者剪✂️掉,不然，榴莲支干支撑不了，断掉，就永不再长出)，这也是泰国🇹🇭榴莲，为什么70%熟，就要*剪✂️下来*，不然，泰国🇹🇭榴莲每一粒100%熟，长到8公斤以上的重量，榴莲支干会折断。当然，另外一个原因是*运输*，在常温货柜运输期间，泰国🇹🇭榴莲渐进式的熟透，到进口国，还有时间摆卖，马来西亚🇲🇾新鲜榴莲，🈶些品种，也只能耐60小时，就裂口。&nbsp; </p><p>北马槟城新鲜榴莲就开品种，🈶些6-8小时，就裂口了。<br></p>			  </div>
		  </div>
		  		  <div class="blog-post">
		      <figure><img src="admin/php/" alt="Image" onerror=this.src="images/faq/frost.jpeg"></figure>
			  <div class="post-content">
				  <span class="post-date">2021-10-09</span>
				  <h3 class="post-title"><?= __('Cont')?> -13 - <?= __('Durian playing flowers')?> 🌸 + <?= __('results.')?></h3><p>在马来西亚🇲🇾北马，西北风吹起，(以前是年底11/12月，气候转变，成了12/1月)，太阳的热度有保持33到36度最少10天，榴莲树身受热后，延伸到榴莲树根，就会*打花🌸或者飚花*，先看到的是一个像棉花的白点，从自然成长，基本是128天到140天。&nbsp; </p><p>榴莲树干本身是不会打花的，基本上都是*树枝*(也可以说延伸长出来的树干)。&nbsp; </p><p>**(当然，也有例外的，像几十年的老树或者树身受伤的，在榴莲树身和榴莲树底下，也会长果，俗称-Kura-kura-马来文-乌龟🐢果)。&nbsp; </p><p>所以，北马槟城的榴莲，一二月打花🌸，5-6月就掉果。&nbsp; </p><p>在马来西亚🇲🇾，如果是海岛，基本上是一年一个榴莲季节，如果是内陆，就一年一个*盛产季节-6-7-8月+9月头，然后12月,1月,2月中。</p>			  </div>
		  </div>
		  		  <!-- end blog-post -->
		   <ul class="pagination">
          <li class="page-item active"> <a class="page-link" href="news.php?page=0">1</a> </li><li class="page-item"> <a class="page-link" href="news.php?page=1">2</a> </li>        </ul>
        <!-- end pagination --> 
      </div>
      <!-- end col-8 -->
      <div class="col-lg-4">
		  	<!--aside class="sidebar">
			<div class="widget">
				<h6 class="widget-title">SEARCH</h6>
				<form>
					<input type="search" placeholder="Type here to search">
					<input type="submit" value="Search">
				</form>
				</div-->
				<!-- end widget -->
				<!--div class="widget">
				<h6 class="widget-title">CATEGORIES</h6>
				<ul class="categories">
						<li><a href="#">Farming</a></li>
						<li><a href="#">Organic Food</a></li>
						<li><a href="#">Bored Seeds</a></li>
						<li><a href="#">Farm Equipments</a></li>
						<li><a href="#">Soiel & Lands</a></li>
						<li><a href="#">Plants Veges</a></li>
						<li><a href="#">Organic Markets</a></li>
					</ul>
				</div-->
				<!-- end widget -->
				<!--div class="widget">
				<h6 class="widget-title">GALLERY</h6>
				<ul class="side-gallery">
					<li><a href="images/gallery01.jpg" data-fancybox><img src="images/gallery01.jpg" alt="Image"></a></li>
					<li><a href="images/gallery02.jpg" data-fancybox><img src="images/gallery02.jpg" alt="Image"></a></li>
					<li><a href="images/gallery03.jpg" data-fancybox><img src="images/gallery03.jpg" alt="Image"></a></li>
					<li><a href="images/gallery04.jpg" data-fancybox><img src="images/gallery04.jpg" alt="Image"></a></li>
					</ul>
				</div-->
				<!-- end widget -->
			<!--/aside-->
			<!-- end sidebar -->
      </div>
      <!-- end col-4 --> 
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