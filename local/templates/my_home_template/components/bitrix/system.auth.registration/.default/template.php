<?
/**
 * Bitrix Framework
 * @package bitrix
 * @subpackage main
 * @copyright 2001-2014 Bitrix
 */

/**
 * Bitrix vars
 * @global CMain $APPLICATION
 * @var array $arParams
 * @var array $arResult
 * @var CBitrixComponentTemplate $this
 */

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

if($arResult["SHOW_SMS_FIELD"] == true)
{
	CJSCore::Init('phone_auth');
}
?>

	<div class="site-section">
		  <div class="container">
		   
<?
if (!empty($arParams["~AUTH_RESULT"]))
{
	ShowMessage($arParams["~AUTH_RESULT"]);
}
?>
<?if($arResult["SHOW_EMAIL_SENT_CONFIRMATION"]):?>
	<p><?echo GetMessage("AUTH_EMAIL_SENT")?></p>
<?endif;?>

<?if(!$arResult["SHOW_EMAIL_SENT_CONFIRMATION"] && $arResult["USE_EMAIL_CONFIRMATION"] === "Y"):?>
	<p><?echo GetMessage("AUTH_EMAIL_WILL_BE_SENT")?></p>
<?endif?>
<noindex>

<?if($arResult["SHOW_SMS_FIELD"] == true):?>

<form class="p-5 bg-white border" method="post" action="<?=$arResult["AUTH_URL"]?>" name="regform">
<input type="hidden" name="SIGNED_DATA" value="<?=htmlspecialcharsbx($arResult["SIGNED_DATA"])?>" />
<table class="data-table bx-registration-table">
	<tbody>
		<tr>
			<td><span class="starrequired">*</span><?echo GetMessage("main_register_sms_code")?></td>
			<td><input size="30" type="text" name="SMS_CODE" value="<?=htmlspecialcharsbx($arResult["SMS_CODE"])?>" autocomplete="off" /></td>
		</tr>
	</tbody>
	<tfoot>
		<tr>
			<td></td>
			<td><input type="submit" name="code_submit_button" value="<?echo GetMessage("main_register_sms_send")?>" /></td>
		</tr>
	</tfoot>
</table>
</form>

<script>
new BX.PhoneAuth({
	containerId: 'bx_register_resend',
	errorContainerId: 'bx_register_error',
	interval: <?=$arResult["PHONE_CODE_RESEND_INTERVAL"]?>,
	data:
		<?=CUtil::PhpToJSObject([
			'signedData' => $arResult["SIGNED_DATA"],
		])?>,
	onError:
		function(response)
		{
			var errorDiv = BX('bx_register_error');
			var errorNode = BX.findChildByClassName(errorDiv, 'errortext');
			errorNode.innerHTML = '';
			for(var i = 0; i < response.errors.length; i++)
			{
				errorNode.innerHTML = errorNode.innerHTML + BX.util.htmlspecialchars(response.errors[i].message) + '<br>';
			}
			errorDiv.style.display = '';
		}
});
</script>

<div id="bx_register_error" style="display:none"><?ShowError("error")?></div>

<div id="bx_register_resend"></div>

          
              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="fullname">Full Name</label>
                  <input type="text" id="fullname" class="form-control" placeholder="Full Name">
                </div>
              </div>

<?elseif(!$arResult["SHOW_EMAIL_SENT_CONFIRMATION"]):?>

<form class="p-5 bg-white border" method="post" action="<?=$arResult["AUTH_URL"]?>" name="bform" enctype="multipart/form-data">
	<input type="hidden" name="AUTH_FORM" value="Y" />
	<input type="hidden" name="TYPE" value="REGISTRATION" />

<div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
			<td colspan="2"><b><?=GetMessage("AUTH_REGISTER")?></b></td>
			</div>
              </div>
			  <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
				<label class="font-weight-bold"><?=GetMessage("AUTH_NAME")?></label>
			<input type="text" name="USER_NAME" maxlength="50" value="<?=$arResult["USER_NAME"]?>" class="form-control" />
			</div>
              </div>
			  <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
				<label class="font-weight-bold"><?=GetMessage("AUTH_LAST_NAME")?></label>
			<input type="text" name="USER_LAST_NAME" maxlength="50" value="<?=$arResult["USER_LAST_NAME"]?>" class="form-control" />
			</div>
              </div>
			  <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
				<label class="font-weight-bold"><?=GetMessage("AUTH_LOGIN_MIN")?></label>
			<input type="text" name="USER_LOGIN" maxlength="50" value="<?=$arResult["USER_LOGIN"]?>" class="form-control" />
			</div>
              </div>
			  <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
		<label class="font-weight-bold"><?=GetMessage("AUTH_PASSWORD_REQ")?></label>
		<input type="password" name="USER_PASSWORD" maxlength="255" value="<?=$arResult["USER_PASSWORD"]?>" class="form-control" autocomplete="off" />
			</div>
              </div>
			  <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
				<label class="font-weight-bold"><?=GetMessage("AUTH_CONFIRM")?></label>
			<input type="password" name="USER_CONFIRM_PASSWORD" maxlength="255" value="<?=$arResult["USER_CONFIRM_PASSWORD"]?>" class="form-control" autocomplete="off" />
			</div>
              </div>

<?if($arResult["EMAIL_REGISTRATION"]):?>
	<div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
				<label class="font-weight-bold"><?if($arResult["EMAIL_REQUIRED"]):?><?endif?><?=GetMessage("AUTH_EMAIL")?></label>
			<input type="text" name="USER_EMAIL" maxlength="255" value="<?=$arResult["USER_EMAIL"]?>" class="form-control" />
			</div>
              </div>
<?endif?>

<?if($arResult["PHONE_REGISTRATION"]):?>
	<div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
				<label class="font-weight-bold"><?if($arResult["PHONE_REQUIRED"]):?><?endif?><?echo GetMessage("main_register_phone_number")?></label>
			<input type="text" name="USER_PHONE_NUMBER" maxlength="255" value="<?=$arResult["USER_PHONE_NUMBER"]?>" class="form-control" />
			</div>
              </div>
<?endif?>
<div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
				<label for="UF_USER_BUYER" class="font-weight-bold"><?echo GetMessage("BUYER")?></label>
			<input type="radio" id="UF_USER_BUYER" name="UF_USER_BUYER" maxlength="255" value="<?=$arResult["UF_USER_BUYER"]?>"/>
			</div>
              </div>
			  <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
				<label for="UF_USER_SELLER" class="font-weight-bold"><?echo GetMessage("SELLER")?></label>
			<input type="radio" id="UF_USER_SELLER" name="UF_USER_SELLER" maxlength="255" value="<?=$arResult["UF_USER_SELLER"]?>"/>
			</div>
              </div>

<?// ********************* User properties ***************************************************?>
<?if($arResult["USER_PROPERTIES"]["SHOW"] == "Y"):?>
	<div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0"><?=trim($arParams["USER_PROPERTY_NAME"]) <> '' ? $arParams["USER_PROPERTY_NAME"] : GetMessage("USER_TYPE_EDIT_TAB")?></div>
              </div>
	<?foreach ($arResult["USER_PROPERTIES"]["DATA"] as $FIELD_NAME => $arUserField):?>
		<div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0"><?if ($arUserField["MANDATORY"]=="Y"):?><?endif;
		?><?=$arUserField["EDIT_FORM_LABEL"]?>:</div>
		</div>
			<?$APPLICATION->IncludeComponent(
				"bitrix:system.field.edit",
				$arUserField["USER_TYPE"]["USER_TYPE_ID"],
				array("bVarsFromForm" => $arResult["bVarsFromForm"], "arUserField" => $arUserField, "form_name" => "bform"), null, array("HIDE_ICONS"=>"Y"));?></td></tr>
	<?endforeach;?>
<?endif;?>
<?// ******************** /User properties ***************************************************

	/* CAPTCHA */
	if ($arResult["USE_CAPTCHA"] == "Y")
	{
		?>
	<div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
			<b><?=GetMessage("CAPTCHA_REGF_TITLE")?></b>
			</div>
              </div>
			  <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
				<input type="hidden" name="captcha_sid" value="<?=$arResult["CAPTCHA_CODE"]?>" />
				<img src="/bitrix/tools/captcha.php?captcha_sid=<?=$arResult["CAPTCHA_CODE"]?>" width="180" height="40" alt="CAPTCHA" />
				</div>
              </div>
			  <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
				<label class="font-weight-bold"><?=GetMessage("CAPTCHA_REGF_PROMT")?>:</label>
				<input class="form-control" type="text" name="captcha_word" maxlength="50" value="" autocomplete="off" />
				</div>
              </div>
		<?
	}
	/* CAPTCHA */
	?>
		<div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
				<?$APPLICATION->IncludeComponent("bitrix:main.userconsent.request", "",
					array(
						"ID" => COption::getOptionString("main", "new_user_agreement", ""),
						"IS_CHECKED" => "Y",
						"AUTO_SAVE" => "N",
						"IS_LOADED" => "Y",
						"ORIGINATOR_ID" => $arResult["AGREEMENT_ORIGINATOR_ID"],
						"ORIGIN_ID" => $arResult["AGREEMENT_ORIGIN_ID"],
						"INPUT_NAME" => $arResult["AGREEMENT_INPUT_NAME"],
						"REPLACE" => array(
							"button_caption" => GetMessage("AUTH_REGISTER"),
							"fields" => array(
								rtrim(GetMessage("AUTH_NAME"), ":"),
								rtrim(GetMessage("AUTH_LAST_NAME"), ":"),
								rtrim(GetMessage("AUTH_LOGIN_MIN"), ":"),
								rtrim(GetMessage("AUTH_PASSWORD_REQ"), ":"),
								rtrim(GetMessage("AUTH_EMAIL"), ":"),
							)
						),
					)
				);?>
</div>
              </div>
			  <div class="row form-group">
                <div class="col-md-12">
				  <input class="btn btn-primary  py-2 px-4 rounded-0" type="submit" name="Register" value="<?=GetMessage("AUTH_REGISTER")?>" />
                </div>
              </div>

</form>

<p><?echo $arResult["GROUP_POLICY"]["PASSWORD_REQUIREMENTS"];?></p>

<p><a href="<?=$arResult["AUTH_AUTH_URL"]?>" rel="nofollow"><b><?=GetMessage("AUTH_AUTH")?></b></a></p>

<script type="text/javascript">
document.bform.USER_NAME.focus();
</script>

<?endif?>

</noindex>
</div>

</div>

