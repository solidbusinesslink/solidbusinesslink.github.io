
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
  <header class="page-header" data-background="images/books/background.png" data-stellar-background-ratio="0.7">
    <div class="container">
      <h2><?= __('Durian Books')?></h2>
      <p><?= __('Create new opportunities for durian')?></p>
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
            <h2><?= __('4 X 100 Yards of Malaysian Durian')?></h2>
          </div>
          <!-- end section-title -->
        </div>
        <!-- end col-12 -->
        <!-- end col-6 -->
        <div class="col-lg-6">
          <div class="side-image">
            <img src="images/books/book.jpeg" alt="Image"> 
          </div>
          <!-- end side-image -->
        </div>
        <!-- end col-6 --> 
        <div class="col-lg-6">
          <div class="side-content left">
            <p><?= __('From durian planting, processing, frozen logistics, to marketing, "4x100 Yards of Malaysian Durian" is the first durian industry reference book in Malaysia. Like a relay race, this book provides a complete industrial system for Malaysian durian industry by comprehensively analyzing the division of responsibilities of the upper, middle and lower reaches of the durian industry.')?></p>
            <p><?= __("Malaysia's durian has an excellent reputation and is well-known all over the world, but it has not been able to become a benchmark in the industry due to the lack of integration of the industrial chain. In order to solve the pain points of Malaysian durian industry in the scattered operation of the market, three senior durian experts Miao Ge, Da Weng, and Yu Yaosheng jointly created this 'Malaysian Durian 4×100 Yards', combining their respective knowledge in different fields in the durian production industry and experience to create the most comprehensive durian industry cheats for the market. 'Malaysian Durian's 4×100 Yards' uses the simplest vernacular way to let you understand the 4 major links in the industry: planting, processing, transportation and export, and marketing. As long as you read it repeatedly, the market novice can quickly understand the operation of the durian market, saving you from many wrong roads!")?></p>
          </div>
          <!-- end side-content --> 
        </div>
      </div>
      <!-- end row --> 
    </div>
    <!-- end container --> 
  </section>
  <!-- end content-section -->
	<section class="content-section">
    <div class="container">
      <div class="row">
        <div class="col-12">
        <div class="section-title">
        <h2><?= __('Which 100 yards?')?></h2>
      </div>
      <!-- end section-title -->
              </div>
        <!-- end col-12 -->
      <div class="col-lg-3 col-md-6">
        <div class="circle-icon-box">
          <figure><img src="images/books/tree.png" alt="Image"></figure>
          <p><?= __('Durian Plantation')?></p>
        </div>
        <!-- end circle-icon-box -->
      </div>
      <!-- end col-3 -->
      <div class="col-lg-3 col-md-6">
        <div class="circle-icon-box">
          <figure><img src="images/books/agile.png" alt="Image"></figure>
          <p><?= __('Durian Processing')?></p>
        </div>
        <!-- end circle-icon-box -->
      </div>
      <!-- end col-3 -->
      <div class="col-lg-3 col-md-6">
        <div class="circle-icon-box">
          <figure><img src="images/books/logistic.png" alt="Image"></figure>
          <p><?= __('Cold Chain')?></p>
        </div>
        <!-- end circle-icon-box -->
      </div>
      <!-- end col-3 -->
      <div class="col-lg-3 col-md-6">
        <div class="circle-icon-box">
          <figure><img src="images/circle-icon04.png" alt="Image"></figure>
          <p><?= __('Marketing')?></p>
        </div>
        <!-- end circle-icon-box -->
      </div>
      <!-- end col-3 -->
      </div>
      <!-- end row --> 
    </div>
    <!-- end container -->
  </section>	
  <!-- end content-section -->	
  <section class="content-section" data-background="#009a4e">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="experts-box">
            <h6><?= __('Contact Person')?></h6>
            <div class="experts-slider">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <figure>
                    <!--img src="images/expert02.jpg" alt="Image"-->
                    <figcaption>
                      <h5>俞耀胜 Dennis</h5>
                      <small>Phone: +6019899431 (Malaysia) / +8613537891897 (China) / +8619949413913 (China)</small>
                      <ul>
                        <li><a href="https://api.whatsapp.com/send?phone=60198994314&text=Global%20Trading,%20RD%20Manufacturing,%20Exhibition%20Organising,%20Resource%20Integration,%20Business%20Matching"><i class="lni lni-whatsapp"></i></a></li>
                        <li><a href="weixin://dl/chat?JiaXian1931"><i class="lni lni-wechat"></i></a></li>
                        <li><a href="mailto: dennislookh@hotmail.com"><i class="lni lni-envelope"></i></a></li>
                      </ul>
                    </figcaption>
                  </figure>
                </div>
                <!-- end swiper-slide -->
                <div class="swiper-slide">
                  <figure>
                    <!--img src="images/expert02.jpg" alt="Image"-->
                    <figcaption>
                      <h5>俞耀胜 Dennis</h5>
                      <small>Phone: +8613537891897</small>
                      <ul>
                        <li><a href="https://api.whatsapp.com/send?phone=60198994314&text=Global%20Trading,%20RD%20Manufacturing,%20Exhibition%20Organising,%20Resource%20Integration,%20Business%20Matching"><i class="lni lni-whatsapp"></i></a></li>
                        <li><a href="weixin://dl/chat?JiaXian1931"><i class="lni lni-wechat"></i></a></li>
                        <li><a href="mailto: dennislookh@hotmail.com"><i class="lni lni-envelope"></i></a></li>
                      </ul>
                    </figcaption>
                  </figure>
                </div>
                <!-- end swiper-slide -->
                <div class="swiper-slide">
                  <figure>
                    <!--img src="images/expert02.jpg" alt="Image"-->
                    <figcaption>
                      <h5>俞耀胜 Dennis</h5>
                      <small>Phone: +8619949413913</small>
                      <ul>
                        <li><a href="https://api.whatsapp.com/send?phone=60198994314&text=Global%20Trading,%20RD%20Manufacturing,%20Exhibition%20Organising,%20Resource%20Integration,%20Business%20Matching"><i class="lni lni-whatsapp"></i></a></li>
                        <li><a href="weixin://dl/chat?JiaXian1931"><i class="lni lni-wechat"></i></a></li>
                        <li><a href="mailto: dennislookh@hotmail.com"><i class="lni lni-envelope"></i></a></li>
                      </ul>
                    </figcaption>
                  </figure>
                </div>
                <!-- end swiper-slide -->
              </div>
              <!-- end swiper-wrapper -->
              <div class="swiper-pagination"></div>
              <!-- end swiper-pagination -->
            </div>
            <!-- end experts-slider -->
          </div>	
          <!-- end experts-box -->
        </div>
        <!-- end col-4 -->
        <div class="col-lg-7 offset-lg-1">
          <div class="accordion-box">
            <h6><?= __('FAQ')?></h6>
              <div class="accordion" id="accordion" role="tablist">
                <div class="card">
                  <div class="card-header" role="tab" id="headingOne"> 
                    <a data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne"><?= __('How to place order?')?></a> 
                  </div>
                  <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body"><?= __('Please contact our PIC')?>
                    <!-- end card-body --> 
                  </div>
                  <!-- end collapse --> 
                </div>
                <!-- end card -->
                <div class="card">
                  <div class="card-header" role="tab" id="headingTwo"> 
                    <a class="collapsed" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"><?= __('How much is the price of the book?')?></a> 
                  </div>
                  <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion">
                    <div class="card-body"><?= __('RM99 including courrier fees')?></div>
                    <!-- end card-body --> 
                  </div>
                  <!-- end collapse --> 
                </div>
                <!-- end card -->
              </div>
              <!-- end accordion -->
          </div>
          <!-- end accordion-box -->
        </div>
        <!-- end col-8 -->
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