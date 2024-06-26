<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
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
<div class="site-blocks-cover overlay" style="background-image: url(<?=$arResult["DETAIL_PICTURE"]["SRC"]?>);" data-aos="fade" data-stellar-background-ratio="0.5">
	<div class="container">
		<div class="row align-items-center justify-content-center text-center">
			<div class="col-md-10">
				<span class="d-inline-block text-white px-3 mb-3 property-offer-type rounded">Детали обновления</span>
				<h1 class="mb-2"><?echo $arResult["NAME"];?></h1>
				<p class="mb-5"><strong class="h2 text-success font-weight-bold"><?=$arResult["DISPLAY_PROPERTIES"]["PRICE"]["VALUE"]?></strong></p>
			</div>
		</div>
	</div>
</div>

    <div class="site-section site-section-sm">
      <div class="container">
        <div class="row">
          <div class="col-lg-8" style="margin-top: -150px;">
            <div class="mb-5">
              <div class="slide-one-item home-slider owl-carousel">
			  	<div><img src="<?=SITE_TEMPLATE_PATH?>/images/img_1.jpg" alt="Image" class="img-fluid"></div>
                <div><img src="<?=SITE_TEMPLATE_PATH?>/images/img_2.jpg" alt="Image" class="img-fluid"></div>
                <div><img src="<?=SITE_TEMPLATE_PATH?>/images/img_3.jpg" alt="Image" class="img-fluid"></div>
              </div>
            </div>
            <div class="bg-white">
              <div class="row mb-5">
                <div class="col-md-6">
                  <strong class="text-success h1 mb-3"><?=$arResult["DISPLAY_PROPERTIES"]["PRICE"]["VALUE"]?></strong>
                </div>
                <div class="col-md-6">
                  <ul class="property-specs-wrap mb-3 mb-lg-0  float-lg-right">
                  <li>
				  	<span class="property-specs">Дата обновления</span>
                    <span class="property-specs-number"><?=$arResult["DISPLAY_ACTIVE_FROM"]?></span>
                    
                  </li>
                  <li>
				  	<span class="property-specs">Этажи</span>
                    <span class="property-specs-number"><?=$arResult["DISPLAY_PROPERTIES"]["NUMBER_OF_FLOORS"]["VALUE"]?></span>
                  </li>
                  <li>
				  	<span class="property-specs">Общая площадь</span>
                    <span class="property-specs-number"><?=$arResult["DISPLAY_PROPERTIES"]["TOTAL_AREA"]["VALUE"]?>m<sup>2</sup></span>
                  </li>
                </ul>
                </div>
              </div>
				<div class="row mb-5">
					<div class="col-md-6 col-lg-4 text-left border-bottom border-top py-3">
						<span class="d-inline-block text-black mb-0 caption-text">Санузлы</span>
					<strong class="d-block"><?=$arResult["DISPLAY_PROPERTIES"]["NUMBER_OF_BATHROOMS"]["VALUE"]?></strong>
					</div>
					<div class="col-md-6 col-lg-4 text-left border-bottom border-top py-3">
						<span class="d-inline-block text-black mb-0 caption-text">Наличие гаража</span>
					<strong class="d-block"><?=$arResult["DISPLAY_PROPERTIES"]["GARAGE"]["VALUE"]?></strong>
					</div>
					<div class="col-md-6 col-lg-4 text-left border-bottom border-top py-3">
					<span class="d-inline-block text-black mb-0 caption-text">Price/Sqft</span>
					<strong class="d-block">$520</strong>
					</div>
				</div>
				<h2 class="h4 text-black">Детальное описание</h2>
				<p><?echo $arResult["DETAIL_TEXT"];?></p>

              <div class="row mt-5">
                <div class="col-12">
                  <h2 class="h4 text-black mb-3">Галерея изображений</h2>
                </div>
				
				
        <?if(count($arResult["DISPLAY_PROPERTIES"]["GALLERY"]["VALUE"]) > 1):?>
          <?foreach($pathGallery as $arGallery):?>
            <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
              <img src="<?=$arGallery["SRC"];?>" alt="Image" class="img-fluid">
            </div>
            <?endforeach;?>
            <?else:?>
              <?$pathGallery = $arResult["DISPLAY_PROPERTIES"]["GALLERY"]["FILE_VALUE"];?>
          <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
            <img src="<?=$pathGallery["SRC"];?>" alt="Image" class="img-fluid">
          </div>
        <?endif;?>
              </div>

			  <h2 class="h4 text-black mt-5">Дополнительные материалы</h2>
        <?if(count($arResult["DISPLAY_PROPERTIES"]["ADDITIONAL_MATERIALS"]["VALUE"]) > 1):?>
          <?foreach($pathMaterials as $arDisMaterials):?>
						<a href="<?=$arDisMaterials["SRC"];?>">Скачать</a>
            <?endforeach;?>
            <?else:?>
          <?$pathMaterials = $arResult["DISPLAY_PROPERTIES"]["ADDITIONAL_MATERIALS"]["FILE_VALUE"];?>
          <a href="<?=$pathMaterials["SRC"];?>">Скачать</a>
        <?endif;?>
			  
			  <h2 class="h4 text-black mt-5">Ссылки на внешние ресурсы</h2>
					<?foreach($arResult["DISPLAY_PROPERTIES"]["LINKS"]["VALUE"] as $arDisProps):?>
						<a href="<?=$arDisProps;?>">Ссылка</a>
					<?endforeach;?>
            </div>
          </div>
          <div class="col-lg-4 pl-md-5">

            <div class="bg-white widget border rounded">

              <h3 class="h4 text-black widget-title mb-3">Contact Agent</h3>
              <form action="" class="form-contact-agent">
                <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" id="name" class="form-control">
                </div>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" id="email" class="form-control">
                </div>
                <div class="form-group">
                  <label for="phone">Phone</label>
                  <input type="text" id="phone" class="form-control">
                </div>
                <div class="form-group">
                  <input type="submit" id="phone" class="btn btn-primary" value="Send Message">
                </div>
              </form>
            </div>

            <div class="bg-white widget border rounded">
              <h3 class="h4 text-black widget-title mb-3">Paragraph</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit qui explicabo, libero nam, saepe eligendi. Molestias maiores illum error rerum. Exercitationem ullam saepe, minus, reiciendis ducimus quis. Illo, quisquam, veritatis.</p>
            </div>

          </div>
          
        </div>
      </div>
    </div>

	
