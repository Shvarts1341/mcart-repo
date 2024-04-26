<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Агенты");
?><?$APPLICATION->IncludeComponent(
	"mcart:agents.list",
	"",
	Array(
		"CACHE_TIME" => "3600",
		"CACHE_TYPE" => "A",
		"ELEM_NUMBER" => "1",
		"HLBLOCK_TNAME" => "real_estate_agents"
	)
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>