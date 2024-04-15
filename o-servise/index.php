<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("О сервисе");
?><br>
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
		<br>
	
</div>
<?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
	"AREA_FILE_SHOW" => "file",
	"AREA_FILE_SUFFIX" => "inc",
	"EDIT_TEMPLATE" => "",
	"PATH" => "/include/our_company.php"
	)
);?>

 <br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>