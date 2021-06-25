<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
?>
<? if ($arResult["isFormErrors"] == "Y") : ?><?= $arResult["FORM_ERRORS_TEXT"]; ?><? endif; ?>
<?= $arResult["FORM_NOTE"] ?>
<? if ($arResult["isFormNote"] != "Y") {
?>
	<?= $arResult["FORM_HEADER"] ?>
	<?
	if ($arResult["isFormDescription"] == "Y" || $arResult["isFormTitle"] == "Y" || $arResult["isFormImage"] == "Y") {
	?>
		<?
		/***********************************************************************************
					form header
		 ***********************************************************************************/
		if ($arResult["isFormTitle"]) {
		?>
		<?
		} //endif ;

		if ($arResult["isFormImage"] == "Y") {
		?>
			<a href="<?= $arResult["FORM_IMAGE"]["URL"] ?>" target="_blank" alt="<?= GetMessage("FORM_ENLARGE") ?>"><img src="<?= $arResult["FORM_IMAGE"]["URL"] ?>" <? if ($arResult["FORM_IMAGE"]["WIDTH"] > 300) : ?>width="300" <? elseif ($arResult["FORM_IMAGE"]["HEIGHT"] > 200) : ?>height="200" <? else : ?><?= $arResult["FORM_IMAGE"]["ATTR"] ?><? endif; ?> hspace="3" vscape="3" border="0" /></a>
			<? //=$arResult["FORM_IMAGE"]["HTML_CODE"]
			?>
		<?
		} //endif
		?>

		<p><?= $arResult["FORM_DESCRIPTION"] ?></p>

	<?
	} // endif
	?>

	<?
	/***********************************************************************************
						form questions
	 ***********************************************************************************/
	?>

	<?
	foreach ($arResult["QUESTIONS"] as $FIELD_SID => $arQuestion) {
	?>
		<? if (is_array($arResult["FORM_ERRORS"]) && array_key_exists($FIELD_SID, $arResult['FORM_ERRORS'])) : ?>
			<span class="error-fld" title="<?= htmlspecialcharsbx($arResult["FORM_ERRORS"][$FIELD_SID]) ?>"></span>
		<? endif; ?>
		<? if ($arQuestion["REQUIRED"] == "Y") : ?><?= $arResult["REQUIRED_SIGN"]; ?><? endif; ?>
		<?= $arQuestion["IS_INPUT_CAPTION_IMAGE"] == "Y" ? "<br />" . $arQuestion["IMAGE"]["HTML_CODE"] : "" ?>
		<?= $arQuestion["HTML_CODE"] ?>
	<?
	} //endwhile
	?>
	<?
	if ($arResult["isUseCaptcha"] == "Y") {
	?>

		<?= GetMessage("FORM_CAPTCHA_TABLE_TITLE") ?>
		<input type="hidden" name="captcha_sid" value="<?= htmlspecialcharsbx($arResult["CAPTCHACode"]); ?>" /><img src="/bitrix/tools/captcha.php?captcha_sid=<?= htmlspecialcharsbx($arResult["CAPTCHACode"]); ?>" width="180" height="40" /></td>
		<?= GetMessage("FORM_CAPTCHA_FIELD_TITLE") ?><?= $arResult["REQUIRED_SIGN"]; ?></td>
		<input type="text" name="captcha_word" size="30" maxlength="50" value="" class="inputtext" />
	<?
	} // isUseCaptcha
	?>
	<input <?= (intval($arResult["F_RIGHT"]) < 10 ? "disabled=\"disabled\"" : ""); ?> type="submit" name="web_form_submit" value="<?= htmlspecialcharsbx(trim($arResult["arForm"]["BUTTON"]) == '' ? GetMessage("FORM_ADD") : $arResult["arForm"]["BUTTON"]); ?>" />





	<?= $arResult["FORM_FOOTER"] ?>
<?
} //endif (isFormNote)
?>