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
<html lang="<?=LANGUAGE_ID;?>">

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
                <a href="#" class="mr-3">
                  <span class="text-black fl-bigmug-line-phone351"></span> <span
                    class="d-none d-md-inline-block ml-2">
                    <?$APPLICATION->IncludeComponent(
                      "bitrix:main.include",
                      "",
                      Array(
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "inc",
                        "EDIT_TEMPLATE" => "",
                        "PATH" => "/include/phone.php"
                      )
                    );?>
                  </span>
                </a>
                <a href="#"><span class="text-black fl-bigmug-line-email64"></span>
                  <span class="d-none d-md-inline-block ml-2">
                    <?$APPLICATION->IncludeComponent(
                      "bitrix:main.include",
                      "",
                      Array(
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "inc",
                        "EDIT_TEMPLATE" => "",
                        "PATH" => "/include/email.php"
                      )
                    );?>
                  </span>
                </a>
              </p>
            </div>
            <div class="col-6 col-md-6 text-right">
            <?$APPLICATION->IncludeComponent(
              "bitrix:main.include",
              "",
              Array(
                "AREA_FILE_SHOW" => "file",
                "AREA_FILE_SUFFIX" => "inc",
                "EDIT_TEMPLATE" => "",
                "PATH" => "/include/socials.php"
              )
            );?>
            </div>
          </div>
        </div>
      </div>

      <div class="site-navbar">
        <div class="container py-1">
          <div class="row align-items-center">
            <div class="col-8 col-md-8 col-lg-4">
              <h1 class="">
                <a href="index.html" class="h5 text-uppercase text-black">
                  <?$APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    Array(
                      "AREA_FILE_SHOW" => "file",
                      "AREA_FILE_SUFFIX" => "inc",
                      "EDIT_TEMPLATE" => "",
                      "PATH" => "/include/logo.php"
                    )
                  );?>
                </a>
              </h1>
            </div>
            <div class="col-4 col-md-4 col-lg-8">
              <?$APPLICATION->IncludeComponent("bitrix:menu", "header_menu", Array(
                "ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
                  "CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
                  "DELAY" => "N",	// Откладывать выполнение шаблона меню
                  "MAX_LEVEL" => "2",	// Уровень вложенности меню
                  "MENU_CACHE_GET_VARS" => "",	// Значимые переменные запроса
                  "MENU_CACHE_TIME" => "604800",	// Время кеширования (сек.)
                  "MENU_CACHE_TYPE" => "A",	// Тип кеширования
                  "MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
                  "ROOT_MENU_TYPE" => "top",	// Тип меню для первого уровня
                  "USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
                  "COMPONENT_TEMPLATE" => ".default"
                ),
                false
              );?>
            </div>


          </div>
        </div>
      </div>
      <? if ($GLOBALS["APPLICATION"]->GetCurPage(true) != '/index.php'):?>
      <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(<?=SITE_TEMPLATE_PATH?>/images/hero_bg_2.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
	<div class="container">
		<div class="row align-items-center justify-content-center text-center">
			<div class="col-md-10">
				<h1 class="mb-2"><?$APPLICATION->ShowTitle(false);?></h1>
				<?$APPLICATION->IncludeComponent("bitrix:breadcrumb", "bread", Array(
					"PATH" => "",
					"SITE_ID" => "s1",
					"START_FROM" => "0",
					),
					false
				);?>
			</div>
		</div>
	</div>
</div>
			</div>
      <?endif;?>
