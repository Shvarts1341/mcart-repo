<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<?

?>
<div class="site-section site-section-sm bg-light">
      <div class="container agents-list">
        <div class="row mb-5">
          <div class="col-12">
            <div class="site-section-title">
              <h2><?=GetMessage("TITLE");?></h2>
            </div>
          </div>
        </div>
        <div class="mb-5">
        <?foreach($arResult['AGENTS']["ITEMS"] as $arAgentsItem):?>
    <div class="agent__card">
        <div class="small-info">
            <div class="avatar" style="background-image: url(<?=$arAgentsItem['UF_PHOTO']?>);"></div>
            <div class="info">
                <div class="name"><?echo $arAgentsItem['UF_NAME']?></div>
            </div>
        </div>
        <div class="agent__card_item">
            <div class="agent__card_info">
                <div class="card__info_item">
                    <div class="position"><?=GetMessage("EMAIL");?> </div>
                    <div class="name"><?echo $arAgentsItem['UF_EMAIL']?></div>
                </div>
                <div class="card__info_item">
                    <div class="position"><?=GetMessage("PHONE");?> </div>
                    <div class="name"><?echo $arAgentsItem['UF_PHONE']?></div>
                </div>
                <div class="card__info_item">
                    <div class="position"><?=GetMessage("ACTIVITY");?></div>
                    <div class="name"><?echo $arAgentsItem['UF_TYPE_OF_ACTIVITY']?></div>
                </div>
            </div>
        </div>
        <?if((in_array($arAgentsItem['ID'], $arResult['STAR_AGENTS']))):?>
        <a class="star active" data-id="<?=$arAgentsItem['ID']?>">
        <?else:?>
        <a class="star" data-id="<?=$arAgentsItem['ID']?>">
        <?endif?>
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M12 4L14.472 9.26604L20 10.1157L16 14.2124L16.944 20L12 17.266L7.056 20L8 14.2124L4 10.1157L9.528 9.26604L12 4Z" stroke="#95929A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </a>
    </div>
    <?endforeach;?>
</div>


    <div>
        <?$APPLICATION->IncludeComponent(
	"bitrix:main.pagenavigation",
	".default",
	array(
		"NAV_OBJECT" => $arResult['AGENTS']['NAV_OBJECT'],
	),
	false
);
        ?>

    </div>


    </div>
</div>
        
      


