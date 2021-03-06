<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
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

$strSectionEdit = CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "SECTION_EDIT");
$strSectionDelete = CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "SECTION_DELETE");
$arSectionDeleteParams = array("CONFIRM" => GetMessage('CT_BCSL_ELEMENT_DELETE_CONFIRM'));

?>


<div class="row g-0 catalog__list">
	<?php foreach ($arResult['SECTIONS'] as &$arSection) { ?>
		<?php
		$arTranslitParams = array("replace_space" => "-", "replace_other" => "-");
		$translitSectionName = Cutil::translit($arSection["~NAME"], "ru", $arTranslitParams);

		$svg = CFile::GetPath($arSection["UF_SVG"]);
		$sectionImg = CFile::GetPath($arSection["PICTURE"]["ID"]);
		?>
      <div class="col-lg-3">
        <div class="catalog-list__overlay category__<?= $translitSectionName ?>">
          <div class="catalog-list__wrapper" style="background-image: url(<?= $sectionImg ?>);">
            <div class="catalog-list__img" style="min-height: 36px;">
              <?php if ($svg) { ?>
                  <img src="<?= $svg ?>">
              <?php } ?>
            </div>

            <a href="<?= $arSection["SECTION_PAGE_URL"] ?>" class="catalog-list__title">
                <?= $arSection["~NAME"] ?>
            </a>
            <?php if ($arSection['SUBS']) { ?>
              <div class="catalog-list__link">
                <?php $showedSubsCount = 0; ?>
                <?php foreach ($arSection['SUBS'] as $subSection) { ?>
                  <?php if (($subSection["DEPTH_LEVEL"] - $arSection["DEPTH_LEVEL"]) == 1) { ?>
						          <?php $showedSubsCount++; ?>
                      <a href="<?= $subSection["~SECTION_PAGE_URL"] ?>"><?= $subSection["NAME"] ?></a>
                  <?php } ?>
                <?php } ?>
              </div>
            <?php } ?>
          </div>
          <?php if ($showedSubsCount > 4) { ?>
            <div class="catalog-list__showfull">
              +<?= $showedSubsCount - 4 ?> ??????????????????
            </div>
          <?php } ?>
        </div>
      </div>
	<?php } ?>
</div>
