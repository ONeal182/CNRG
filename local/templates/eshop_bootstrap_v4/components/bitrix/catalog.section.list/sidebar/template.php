<?php

use Bitrix\Main\Localization\Loc;

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

/**
 * @global CMain $APPLICATION
 * @var array $arParams
 * @var array $arResult
 * @var CBitrixComponent $component
 * @var CBitrixComponentTemplate $this
 * @var string $templateName
 * @var string $componentPath
 * @var string $templateFolder
 */

$this->setFrameMode(true);


$parentSectionName = isset($arResult['SECTION']["IPROPERTY_VALUES"]["SECTION_PAGE_TITLE"]) && $arResult['SECTION']["IPROPERTY_VALUES"]["SECTION_PAGE_TITLE"] != ""
	? $arResult['SECTION']["IPROPERTY_VALUES"]["SECTION_PAGE_TITLE"]
	: $arResult['SECTION']['NAME'];
?>


<? if ($arResult['SECTIONS_COUNT'] > 0) { ?>
	<div class="category__subcategory">
    <a href="#" class="selected-category"><?= $parentSectionName ?></a>
		<ul>
			<?php foreach ($arResult['SECTIONS'] as &$section) { ?>
				<li>
					<a href="<?=$section['SECTION_PAGE_URL']?>">
			      <?= $section['NAME'] ." <i>".$section['ELEMENT_CNT']. "</i>";?>
					</a>
				</li>
      <?php } ?>
      <?php unset($section); ?>
		</ul>
	</div>
<?php } ?>