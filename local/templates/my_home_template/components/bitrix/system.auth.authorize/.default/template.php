<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
?>
<div class="site-section">
      <div class="container">
	  <div class="mb-5">
<?
if (!empty($arParams["~AUTH_RESULT"]))
{
	ShowMessage($arParams["~AUTH_RESULT"]);
}

if (!empty($arResult['ERROR_MESSAGE']))
{
	ShowMessage($arResult['ERROR_MESSAGE']);
}
?>

<?if($arResult["AUTH_SERVICES"]):?>
	<div class="bx-auth-title"><?echo GetMessage("AUTH_TITLE")?></div>
<?endif?>
	<div class="bx-auth-note"><?=GetMessage("AUTH_PLEASE_AUTH")?></div>

	<form class="p-5 bg-white border" name="form_auth" method="post" target="_top" action="<?=$arResult["AUTH_URL"]?>">

		<input type="hidden" name="AUTH_FORM" value="Y" />
		<input type="hidden" name="TYPE" value="AUTH" />
		<?if ($arResult["BACKURL"] <> ''):?>
		<input type="hidden" name="backurl" value="<?=$arResult["BACKURL"]?>" />
		<?endif?>
		<?foreach ($arResult["POST"] as $key => $value):?>
		<input type="hidden" name="<?=$key?>" value="<?=$value?>" />
		<?endforeach?>

		<div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
				<label class="font-weight-bold"><?=GetMessage("AUTH_LOGIN")?></label>
				<input class="form-control" type="text" name="USER_LOGIN" maxlength="255" value="<?=$arResult["LAST_LOGIN"]?>" />
				</div>
              </div>
			<div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
				<label class="font-weight-bold"><?=GetMessage("AUTH_PASSWORD")?></label>
				<input class="form-control" type="password" name="USER_PASSWORD" maxlength="255" autocomplete="off" />
				</div>
              </div>
			<?if($arResult["CAPTCHA_CODE"]):?>
				<div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
					<input type="hidden" name="captcha_sid" value="<?echo $arResult["CAPTCHA_CODE"]?>" />
					<img src="/bitrix/tools/captcha.php?captcha_sid=<?echo $arResult["CAPTCHA_CODE"]?>" width="180" height="40" alt="CAPTCHA" />
					</div>
              </div>
			  <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
				<label class="font-weight-bold"><?echo GetMessage("AUTH_CAPTCHA_PROMT")?>:</label>
					<input class="form-control" type="text" name="captcha_word" maxlength="50" value="" size="15" autocomplete="off" />
				</div>
              </div>
			<?endif;?>
<?if ($arResult["STORE_PASSWORD"] == "Y"):?>
	<div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
				<input type="checkbox" id="USER_REMEMBER" name="USER_REMEMBER" value="Y" />
				<label class="font-weight-bold" for="USER_REMEMBER">&nbsp;<?=GetMessage("AUTH_REMEMBER_ME")?></label>
				</div>
              </div>
			
<?endif?>
<div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
				<input class="btn btn-primary  py-2 px-4 rounded-0" type="submit" class="btn btn-primary" name="Login" value="<?=GetMessage("AUTH_AUTHORIZE")?>" />
			</div>
              </div>

<?if ($arParams["NOT_SHOW_LINKS"] != "Y"):?>
		<noindex>
			<p>
				<a href="<?=$arResult["AUTH_FORGOT_PASSWORD_URL"]?>" rel="nofollow"><?=GetMessage("AUTH_FORGOT_PASSWORD_2")?></a>
			</p>
		</noindex>
<?endif?>

<?if($arParams["NOT_SHOW_LINKS"] != "Y" && $arResult["NEW_USER_REGISTRATION"] == "Y" && $arParams["AUTHORIZE_REGISTRATION"] != "Y"):?>
		<noindex>
			<p>
				<a href="<?=$arResult["AUTH_REGISTER_URL"]?>" rel="nofollow"><?=GetMessage("AUTH_REGISTER")?></a><br />
				<?=GetMessage("AUTH_FIRST_ONE")?>
			</p>
		</noindex>
<?endif?>

	</form>
</div>
</div>


<script type="text/javascript">
<?if ($arResult["LAST_LOGIN"] <> ''):?>
try{document.form_auth.USER_PASSWORD.focus();}catch(e){}
<?else:?>
try{document.form_auth.USER_LOGIN.focus();}catch(e){}
<?endif?>
</script>