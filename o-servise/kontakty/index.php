<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");
?>

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