<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
	die();

$this->setFrameMode(true);

if (is_array($arResult["SOCSERV"]) && !empty($arResult["SOCSERV"]))
{
?>
	
		<?foreach($arResult["SOCSERV"] as $socserv):?>
		<a
			class="social__item <?=htmlspecialcharsbx($socserv["CLASS"])?>"
			target="_blank"
			href="<?=htmlspecialcharsbx($socserv["LINK"])?>"
		>
			<span class="bx-socialfooter-icon"></span>
		</a>
		<?endforeach?>

<?
}
?>