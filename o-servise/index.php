<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("О сервисе");
?><br>
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