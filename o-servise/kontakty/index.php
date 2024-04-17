<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");
?><div class="border-bottom bg-white top-bar">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-6 col-md-6">
				<p class="mb-0">
 <a href="#"><span class="d-none d-md-inline-block ml-2"> </span> </a>
				</p>
			</div>
			<div class="col-6 col-md-6 text-right">
			</div>
		</div>
	</div>
</div>
<div class="site-section">
	<div class="container">
		<div class="row">
			 <?$APPLICATION->IncludeComponent(
	"bitrix:main.feedback",
	"email_send",
	Array(
		"EMAIL_TO" => "shvartsenberg2015@mail.ru",
		"EVENT_MESSAGE_ID" => "",
		"OK_TEXT" => "Спасибо, ваше сообщение принято.",
		"REQUIRED_FIELDS" => array(0=>"NAME",1=>"EMAIL",2=>"MESSAGE",),
		"USE_CAPTCHA" => "Y"
	)
);?>
			<div class="col-lg-4">
				 <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => "",
		"PATH" => "/include/info.php"
	)
);?>
			</div>
		</div>
	</div>
</div><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>