<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Мебельная компания");
?>

<div class="slide-one-item home-slider owl-carousel">
	 
	<?$GLOBALS['arrFilterPriority'] = ["PROPERTY_PRIORITY_DEAL_VALUE" => "Да"];
	$APPLICATION->IncludeComponent(
		"bitrix:news.list", 
		"slider", 
		array(
			"ACTIVE_DATE_FORMAT" => "d.m.Y",
			"ADD_SECTIONS_CHAIN" => "Y",
			"AJAX_MODE" => "N",
			"AJAX_OPTION_ADDITIONAL" => "",
			"AJAX_OPTION_HISTORY" => "N",
			"AJAX_OPTION_JUMP" => "N",
			"AJAX_OPTION_STYLE" => "Y",
			"CACHE_FILTER" => "N",
			"CACHE_GROUPS" => "Y",
			"CACHE_TIME" => "86400",
			"CACHE_TYPE" => "A",
			"CHECK_DATES" => "N",
			"COMPONENT_TEMPLATE" => "slider",
			"DETAIL_URL" => "#IBLOCK_CODE#/#ELEMENT_CODE#/",
			"DISPLAY_BOTTOM_PAGER" => "Y",
			"DISPLAY_DATE" => "Y",
			"DISPLAY_NAME" => "Y",
			"DISPLAY_PICTURE" => "Y",
			"DISPLAY_PREVIEW_TEXT" => "Y",
			"DISPLAY_TOP_PAGER" => "N",
			"FIELD_CODE" => array(
				0 => "",
				1 => "",
			),
			"FILTER_NAME" => "arrFilterPriority",
			"USE_FILTER" => "Y",
			"HIDE_LINK_WHEN_NO_DETAIL" => "N",
			"IBLOCK_ID" => "5",
			"IBLOCK_TYPE" => "ads",
			"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
			"INCLUDE_SUBSECTIONS" => "Y",
			"MESSAGE_404" => "",
			"NEWS_COUNT" => "10",
			"PAGER_BASE_LINK_ENABLE" => "N",
			"PAGER_DESC_NUMBERING" => "N",
			"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
			"PAGER_SHOW_ALL" => "N",
			"PAGER_SHOW_ALWAYS" => "N",
			"PAGER_TEMPLATE" => ".default",
			"PAGER_TITLE" => "Новости",
			"PARENT_SECTION" => "",
			"PARENT_SECTION_CODE" => "",
			"PREVIEW_TRUNCATE_LEN" => "",
			"PROPERTY_CODE" => array(
				0 => "PRIORITY_DEAL",
				1 => "PRICE",
				2 => "Price",
				3 => "",
			),
			"SET_BROWSER_TITLE" => "Y",
			"SET_LAST_MODIFIED" => "N",
			"SET_META_DESCRIPTION" => "Y",
			"SET_META_KEYWORDS" => "Y",
			"SET_STATUS_404" => "N",
			"SET_TITLE" => "Y",
			"SHOW_404" => "N",
			"SORT_BY1" => "ACTIVE_FROM",
			"SORT_BY2" => "SORT",
			"SORT_ORDER1" => "DESC",
			"SORT_ORDER2" => "ASC",
			"STRICT_SECTION_CHECK" => "N"
		),
		false
	);
	?>
</div>

	

<div class="py-5">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-lg-4 mb-3 mb-lg-0">
				<div class="feature d-flex align-items-start">
					<?$APPLICATION->IncludeComponent(
						"bitrix:main.include",
						"",
						Array(
							"AREA_FILE_SHOW" => "file",
							"AREA_FILE_SUFFIX" => "inc",
							"EDIT_TEMPLATE" => "",
							"PATH" => "/include/properties.php"
						)
					);?>
				</div>
			</div>
			<div class="col-md-6 col-lg-4 mb-3 mb-lg-0">
				<div class="feature d-flex align-items-start">
					<?$APPLICATION->IncludeComponent(
						"bitrix:main.include",
						"",
						Array(
							"AREA_FILE_SHOW" => "file",
							"AREA_FILE_SUFFIX" => "inc",
							"EDIT_TEMPLATE" => "",
							"PATH" => "/include/sale.php"
						)
					);?>
				</div>
			</div>
			<div class="col-md-6 col-lg-4 mb-3 mb-lg-0">
				<div class="feature d-flex align-items-start">
					<?$APPLICATION->IncludeComponent(
						"bitrix:main.include",
						"",
						Array(
							"AREA_FILE_SHOW" => "file",
							"AREA_FILE_SUFFIX" => "inc",
							"EDIT_TEMPLATE" => "",
							"PATH" => "/include/location.php"
						)
					);?>
				</div>
			</div>
		</div>
	</div>
</div>

<br>
<br>

<div class="site-section site-section-sm bg-light">
	<div class="container">
		<?$APPLICATION->IncludeComponent(
			"bitrix:news.line",
			"properties",
			Array(
				"ACTIVE_DATE_FORMAT" => "",
				"CACHE_GROUPS" => "Y",
				"CACHE_TIME" => "43200",
				"CACHE_TYPE" => "A",
				"COMPONENT_TEMPLATE" => ".default",
				"DETAIL_URL" => "#IBLOCK_CODE#/#ELEMENT_CODE#/",
				"FIELD_CODE" =>
					array(
						0=>"PREVIEW_TEXT",
						1=>"PREVIEW_PICTURE",
						2=>"PROPERTY_PRICE",
						3=>"PROPERTY_NUMBER_OF_FLOORS",
						4=>"PROPERTY_TOTAL_AREA",
						5=>"PROPERTY_NUMBER_OF_BATHROOMS",
						6=>"PROPERTY_GARAGE",
					),
				"IBLOCKS" => array(0=>"5",),
				"IBLOCK_TYPE" => "ads",
				"NEWS_COUNT" => "9",
				"SORT_BY1" => "ACTIVE_FROM",
				"SORT_BY2" => "SORT",
				"SORT_ORDER1" => "DESC",
				"SORT_ORDER2" => "ASC"
			)
	);?>
	</div>
</div>

<br>
<br>
	
<div class="site-section">
	<div class="container">

		<?$APPLICATION->IncludeComponent(
			"bitrix:news.line",
			"services",
			Array(
				"ACTIVE_DATE_FORMAT" => "d.m.Y",
				"CACHE_GROUPS" => "Y",
				"CACHE_TIME" => "300",
				"CACHE_TYPE" => "A",
				"COMPONENT_TEMPLATE" => ".default",
				"DETAIL_URL" => "",
				"FIELD_CODE" => array(0=>"NAME",1=>"PREVIEW_TEXT",2=>"PREVIEW_PICTURE",3=>"PROPERTY_LINK",),
				"IBLOCKS" => array(0=>"7",),
				"IBLOCK_TYPE" => "services",
				"NEWS_COUNT" => "20",
				"SORT_BY1" => "ACTIVE_FROM",
				"SORT_BY2" => "SORT",
				"SORT_ORDER1" => "DESC",
				"SORT_ORDER2" => "ASC"
			)
		);?>
	</div>
</div>

<br>
<br>

<div class="site-section bg-light">
    <div class="container">
		<?$APPLICATION->IncludeComponent(
			"bitrix:news.line", 
			"news", 
			array(
				"ACTIVE_DATE_FORMAT" => "d.m.Y",
				"CACHE_GROUPS" => "Y",
				"CACHE_TIME" => "86400",
				"CACHE_TYPE" => "A",
				"DETAIL_URL" => "/#IBLOCK_CODE#/#ELEMENT_CODE#/",
				"FIELD_CODE" => array(
					0 => "PREVIEW_PICTURE",
					1 => "PREVIEW_TEXT",
				),
				"IBLOCKS" => array(
					0 => "1",
				),
				"IBLOCK_TYPE" => "news",
				"NEWS_COUNT" => "3",
				"SORT_BY1" => "ACTIVE_FROM",
				"SORT_BY2" => "SORT",
				"SORT_ORDER1" => "DESC",
				"SORT_ORDER2" => "ASC",
				"COMPONENT_TEMPLATE" => "news"
			),
			false
		);?>
    </div>
</div>
 <br>
 <br>
 <br>
 <?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>