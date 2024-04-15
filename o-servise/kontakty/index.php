<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");
?>
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


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>