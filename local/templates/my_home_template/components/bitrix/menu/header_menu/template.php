<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<nav class="site-navigation text-right text-md-right" role="navigation">
  	<div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3">
		<a href="#" class="site-menu-toggle js-menu-toggle text-black">
			<span class="icon-menu h3"></span>
		</a>
	</div>
	<?if (!empty($arResult)):?>
	<ul class="site-menu js-clone-nav d-none d-lg-block">

	<?
	$prevLevel = 0;
	foreach($arResult as $arItem):
		if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1) 
			continue;
	?>
		
		<?if ($prevLevel && $arItem["DEPTH_LEVEL"] < $prevLevel):?>
			<?str_repeat("</ul></li>", ($prevLevel - $arItem["DEPTH_LEVEL"]));?>
		<?endif?>

		<?if ($arItem["IS_PARENT"]):?>
			
			<?if ($arItem["DEPTH_LEVEL"] == 1):?>
				<li class="has-children <?if($arItem["SELECTED"]):?>active<?endif?>"><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a>
					<ul class="dropdown">	

				<?else:?>
					<li><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
			<?endif?>
			

			<?else:?>
				<li <?if($arItem["SELECTED"]):?>class="active"<?endif?>><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
				

		<?endif?>

		<?$prevLevel = $arItem["DEPTH_LEVEL"];?>
		
	<?endforeach?>

	<?if ($prevLevel > 1):?>
		<?=str_repeat("</ul></li>", ($prevLevel-1) );?>
	<?endif?>
	</ul>
	<?endif?>
</nav>