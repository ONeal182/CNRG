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

$themeClass = isset($arParams['TEMPLATE_THEME']) ? ' bx-' . $arParams['TEMPLATE_THEME'] : '';
?>
<section class="reviews__section">
  <div class="container">
   <div class="slider__with-arrow">
    <div class="title-with-arrow">
      <h2> Отзывы  </h2>
      <div class="slider__arrow">
        <div class="slider__arrow-left">
          <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M22.1724 25.1724L16.1724 19.1724L22.1724 13.1724" stroke="#255FAF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </div>
        <div class="slider__arrow-right">
          <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M17 14L23 20L17 26" stroke="#255FAF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </div>
      </div>
    </div>
  </div>
	<div class="reviews__slider <?= $themeClass ?>">
		<? foreach ($arResult["ITEMS"] as $arItem) : ?>
			<?
			$this->AddEditAction(
				$arItem['ID'],
				$arItem['EDIT_LINK'],
				CIBlock::GetArrayByID(
					$arItem["IBLOCK_ID"],
					"ELEMENT_EDIT"
				)
			);
			$this->AddDeleteAction(
				$arItem['ID'],
				$arItem['DELETE_LINK'],
				CIBlock::GetArrayByID(
					$arItem["IBLOCK_ID"],
					"ELEMENT_DELETE"
				),
				array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM'))
			);
			?>
			<div class="reviews__item" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
			
			
				<div class="reviews__overlay">
					<div class="reviews__img-block">
					<? if ($arParams["DISPLAY_PICTURE"] != "N") : ?>
						<a href="<?= $arItem["DETAIL_PAGE_URL"] ?>">
							<img src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>" class="card-img-top" alt="<?= $arItem["PREVIEW_PICTURE"]["ALT"] ?>" title="<?= $arItem["PREVIEW_PICTURE"]["TITLE"] ?>" />
						</a>
					<? endif; ?>
					<div class="reviews__img-name">
					<? if ($arParams["DISPLAY_NAME"] != "N" && $arItem["NAME"]) : ?><p><? echo $arItem["NAME"] ?> </p><? endif; ?>
					<span><?= FormatDate("d F Y", MakeTimeStamp($arItem['PROPERTIES']['REVIEWDATE']['VALUE']))?></span>
					</div>
					</div>
					<div class="reviews__text"> 
					<? echo $arItem["PREVIEW_TEXT"]; ?>
					</div>
				</div>
			</div>
		<? endforeach; ?>
	</div>
</div>
</section>