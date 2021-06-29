<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

/** @var array $arParams */
/** @var array $arResult */
/** @var CBitrixComponentTemplate $this */

$this->setFrameMode(true);

if(!$arResult["NavShowAlways"])
{
	if ($arResult["NavRecordCount"] == 0 || ($arResult["NavPageCount"] == 1 && $arResult["NavShowAll"] == false))
		return;
}

$strNavQueryString = ($arResult["NavQueryString"] != "" ? $arResult["NavQueryString"]."&amp;" : "");
$strNavQueryStringFull = ($arResult["NavQueryString"] != "" ? "?".$arResult["NavQueryString"] : "");

$colorSchemes = array(
	"green" => "bx-green",
	"yellow" => "bx-yellow",
	"red" => "bx-red",
	"blue" => "bx-blue",
);
if(isset($colorSchemes[$arParams["TEMPLATE_THEME"]]))
{
	$colorScheme = $colorSchemes[$arParams["TEMPLATE_THEME"]];
}
else
{
	$colorScheme = "";
}
?>


<?if($arResult["bDescPageNumbering"] === true):?>

	<?if ($arResult["NavPageNomer"] < $arResult["NavPageCount"]):?>
		<?if($arResult["bSavePage"]):?>
      <div class="pagination__prev-page"><a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]+1)?>"><span><?echo GetMessage("round_nav_back")?></span></a></div>
      <div class="pagination__list-page"><a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]+1)?>"><span>1</span></a>
		<?else:?>
			<?if (($arResult["NavPageNomer"]+1) == $arResult["NavPageCount"]):?>
        <div class="pagination__prev-page"><a href="<?=$arResult["sUrlPath"]?><?=$strNavQueryStringFull?>"><span><?echo GetMessage("round_nav_back")?></span></a></div>
			<?else:?>
        <div class="pagination__prev-page"><a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]+1)?>"><span><?echo GetMessage("round_nav_back")?></span></a></div>
			<?endif?>
      <div class="pagination__list-page"><a href="<?=$arResult["sUrlPath"]?><?=$strNavQueryStringFull?>"><span>1</span></a></div>
		<?endif?>
	<?else:?>
    <div class="pagination__list-page"><span>1</span></div>
	<?endif?>

	<?
	$arResult["nStartPage"]--;
	while($arResult["nStartPage"] >= $arResult["nEndPage"]+1):
		?>
		<?$NavRecordGroupPrint = $arResult["NavPageCount"] - $arResult["nStartPage"] + 1;?>

		<?if ($arResult["nStartPage"] == $arResult["NavPageNomer"]):?>
      <div class="pagination__list-page active"><span><?=$NavRecordGroupPrint?></span></div>
	<?else:?>
      <div class="pagination__list-page"><a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=$arResult["nStartPage"]?>"><span><?=$NavRecordGroupPrint?></span></a></div>
	<?endif?>

		<?$arResult["nStartPage"]--?>
	<?endwhile?>

	<?if ($arResult["NavPageNomer"] > 1):?>
		<?if($arResult["NavPageCount"] > 1):?>
      <div class="pagination__list-page"><a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=1"><span><?=$arResult["NavPageCount"]?></span></a></div>
		<?endif?>
    <div class="pagination__next-page"><a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]-1)?>"><span><?echo GetMessage("round_nav_forward")?></span></a></div>
	<?else:?>
		<?if($arResult["NavPageCount"] > 1):?>
      <div class="pagination__list-page active"><span><?=$arResult["NavPageCount"]?></span></div>
		<?endif?>
	<?endif?>

<?else:?>

	<?if ($arResult["NavPageNomer"] > 1):?>
		<?if($arResult["bSavePage"]):?>
      <div class="pagination__prev-page"><a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]-1)?>"><span><?echo GetMessage("round_nav_back")?></span></a></div>
      <div class="pagination__list-page"><a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=1"><span>1</span></a></div>
		<?else:?>
			<?if ($arResult["NavPageNomer"] > 2):?>
        <div class="pagination__prev-page"><a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]-1)?>"><span><?echo GetMessage("round_nav_back")?></span></a></div>
			<?else:?>
        <div class="pagination__prev-page"><a href="<?=$arResult["sUrlPath"]?><?=$strNavQueryStringFull?>"><span><?echo GetMessage("round_nav_back")?></span></a></div>
			<?endif?>
      <div class="pagination__list-page"><a href="<?=$arResult["sUrlPath"]?><?=$strNavQueryStringFull?>"><span>1</span></a></div>
		<?endif?>
	<?else:?>
    <div class="pagination__list-page active"><span>1</span></div>
	<?endif?>

	<?
	$arResult["nStartPage"]++;
	while($arResult["nStartPage"] <= $arResult["nEndPage"]-1):
		?>
		<?if ($arResult["nStartPage"] == $arResult["NavPageNomer"]):?>
      <div class="pagination__list-page active"><span><?=$arResult["nStartPage"]?></span></div>
	<?else:?>
      <div class="pagination__list-page"><a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=$arResult["nStartPage"]?>"><span><?=$arResult["nStartPage"]?></span></a></div>
	<?endif?>
		<?$arResult["nStartPage"]++?>
	<?endwhile?>

	<?if($arResult["NavPageNomer"] < $arResult["NavPageCount"]):?>
		<?if($arResult["NavPageCount"] > 1):?>
      <div class="pagination__list-page"><a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=$arResult["NavPageCount"]?>"><span><?=$arResult["NavPageCount"]?></span></a></div>
		<?endif?>
    <div class="pagination__next-page"><a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]+1)?>"><span><?echo GetMessage("round_nav_forward")?></span></a></div>
	<?else:?>
		<?if($arResult["NavPageCount"] > 1):?>
      <div class="pagination__list-page active"><span><?=$arResult["NavPageCount"]?></span></div>
		<?endif?>
	<?endif?>
<?endif?>
