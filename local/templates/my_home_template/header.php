<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
IncludeTemplateLangFile(__FILE__);
?>

<?
use Bitrix\Main\Page\Asset;
  Asset::getInstance()->addString("<link href='https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Roboto+Mono:300,400,500' rel='stylesheet' type='text/css'>");
  Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/fonts/icomoon/style.css", true);
  Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/bootstrap.css", true);
  Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/magnific-popup.css", true);
  Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/jquery-ui.css", true);
  Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/owl.carousel.css");
  Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/owl.theme.default.css", true);
  Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/bootstrap-datepicker.css", true);
  Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/mediaelementplayer.css", true);
  Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/animate.css", true);
  Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/fonts/flaticon/font/flaticon.css", true);
  Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/fl-bigmug-line.css", true);
  Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/aos.css", true);
  Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/style.css", true);

  Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/jquery-3.3.1.js", true);
  Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/jquery-migrate-3.0.1.js", true);
  Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/jquery-ui.js", true);
  Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/popper.js", true);
  Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/bootstrap.js", true);
  Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/owl.carousel.js", true);
  Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/mediaelement-and-player.js", true);
  Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/jquery.stellar.js", true);
  Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/jquery.countdown.js", true);
  Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/jquery.magnific-popup.js", true);
  Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/bootstrap-datepicker.js", true);
  Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/aos.js", true);
  Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/main.js", true);
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <title><?$APPLICATION->ShowTitle()?></title>
  <?$APPLICATION->ShowHead()?>
</head>

<body>
<?$APPLICATION->ShowPanel()?>
  <div class="site-loader"></div>

  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->

    <div class="border-bottom bg-white top-bar">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-6 col-md-6">
            <p class="mb-0">
              <a href="#" class="mr-3"><span class="text-black fl-bigmug-line-phone351"></span> <span
                  class="d-none d-md-inline-block ml-2">+2 102 3923 3922</span></a>
              <a href="#"><span class="text-black fl-bigmug-line-email64"></span> <span
                  class="d-none d-md-inline-block ml-2">info@domain.com</span></a>
            </p>
          </div>
          <div class="col-6 col-md-6 text-right">
            <a href="#" class="mr-3"><span class="text-black icon-facebook"></span></a>
            <a href="#" class="mr-3"><span class="text-black icon-twitter"></span></a>
            <a href="#" class="mr-0"><span class="text-black icon-linkedin"></span></a>
          </div>
        </div>
      </div>

    </div>
    <div class="site-navbar">
      <div class="container py-1">
        <div class="row align-items-center">
          <div class="col-8 col-md-8 col-lg-4">
            <h1 class=""><a href="index.html" class="h5 text-uppercase text-black"><strong>HomeSpace<span
                    class="text-danger">.</span></strong></a></h1>
          </div>
          <div class="col-4 col-md-4 col-lg-8">
            <nav class="site-navigation text-right text-md-right" role="navigation">

              <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#"
                  class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

              <ul class="site-menu js-clone-nav d-none d-lg-block">
                <li class="active">
                  <a href="index.html">Home</a>
                </li>
                <li class="has-children">
                  <a href="properties.html">Properties</a>
                  <ul class="dropdown">
                    <li><a href="#">Buy</a></li>
                    <li><a href="#">Rent</a></li>
                    <li><a href="#">Lease</a></li>
                    <li class="has-children">
                      <a href="#">Menu</a>
                      <ul class="dropdown">
                        <li><a href="#">Menu One</a></li>
                        <li><a href="#">Menu Two</a></li>
                        <li><a href="#">Menu Three</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li><a href="blog.html">Blog</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="contact.html">Contact</a></li>
              </ul>
            </nav>
          </div>


        </div>
      </div>
    </div>
  </div>

  <div class="slide-one-item home-slider owl-carousel">

    <div class="site-blocks-cover" style="background-image: url(<?=SITE_TEMPLATE_PATH?>/images/hero_bg_1.jpg);" data-aos="fade"
      data-stellar-background-ratio="0.5">

      <div class="text">
        <h2>853 S Lucerne Blvd</h2>
        <p class="location"><span class="property-icon icon-room"></span> Los Angeles, CA 90005</p>
        <p class="mb-2"><strong>$2,250,500</strong></p>


        <p class="mb-0"><a href="#" class="text-uppercase small letter-spacing-1 font-weight-bold">More Details</a></p>

      </div>
    </div>

    <div class="site-blocks-cover" style="background-image: url(<?=SITE_TEMPLATE_PATH?>/images/hero_bg_3.jpg);" data-aos="fade"
      data-stellar-background-ratio="0.5">

      <div class="text">
        <h2>625 S. Berendo St</h2>
        <p class="location"><span class="property-icon icon-room"></span>607 Los Angeles, CA 90005</p>
        <p class="mb-2"><strong>$2,250,500</strong></p>


        <p class="mb-0"><a href="#" class="text-uppercase small letter-spacing-1 font-weight-bold">More Details</a></p>

      </div>

    </div>

  </div>

  <div class="py-5">
    <div class="container">

      <div class="row">
        <div class="col-md-6 col-lg-4 mb-3 mb-lg-0">
          <div class="feature d-flex align-items-start">
            <span class="icon mr-3 flaticon-house"></span>
            <div class="text">
              <h2 class="mt-0">Wide Range of Properties</h2>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit rem sint debitis porro quae dolorum neque.
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 mb-3 mb-lg-0">
          <div class="feature d-flex align-items-start">
            <span class="icon mr-3 flaticon-rent"></span>
            <div class="text">
              <h2 class="mt-0">Rent or Sale</h2>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit rem sint debitis porro quae dolorum neque.
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 mb-3 mb-lg-0">
          <div class="feature d-flex align-items-start">
            <span class="icon mr-3 flaticon-location"></span>
            <div class="text">
              <h2 class="mt-0">Property Location</h2>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit rem sint debitis porro quae dolorum neque.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>