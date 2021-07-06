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
?>


<section class="collections__section">
	<div class="container">
		<div class="slider__with-arrow">
			<div class="title-with-arrow">
				<h2> Подборки товаров </h2>
				<div class="slider__arrow d-flex d-lg-none">
					<div class="slider__arrow-left">
						<svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M22.1724 25.1724L16.1724 19.1724L22.1724 13.1724" stroke="#255FAF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
						</svg>
					</div>
					<div class="slider__arrow-right">
						<svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M17 14L23 20L17 26" stroke="#255FAF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
						</svg>
					</div>
				</div>
			</div>
			<div class="d-none d-lg-block">
				<div class="row">
					<? foreach ($arResult["ITEMS"] as $arItem) : ?>
						<div class="col-lg-4">

							<? $res = CIBlockSection::GetByID($arItem['PROPERTIES']['CATEGORY']['VALUE']);
							if ($ar_res = $res->GetNext()); ?>
							<? if ($arParams["DISPLAY_PICTURE"] != "N") : ?>
								<a href="<?= $ar_res['SECTION_PAGE_URL']; ?>"><img class="collections__img" src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>" width="100%" alt="<?= $arItem["PREVIEW_PICTURE"]["ALT"] ?>" title="<?= $arItem["PREVIEW_PICTURE"]["TITLE"] ?>" /></a>
							<? endif ?>

							<div class="collections__title"> <? echo $arItem["NAME"] ?> </div>
							<div class="collections__button"> <a href="<?= $ar_res['SECTION_PAGE_URL']; ?>" class="button bg-blue-1">Смотреть </a> </div>
						</div>
					<? endforeach; ?>
				</div>
			</div>
			<div class="d-block d-lg-none">
				<div class="collection__slider">
					<? foreach ($arResult["ITEMS"] as $arItem) : ?>
						<div class="collection__slider-item">

							<? $res = CIBlockSection::GetByID($arItem['PROPERTIES']['CATEGORY']['VALUE']);
							if ($ar_res = $res->GetNext()); ?>
							<? if ($arParams["DISPLAY_PICTURE"] != "N") : ?>
								<a href="<?= $ar_res['SECTION_PAGE_URL']; ?>"><img class="collections__img" src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>" width="100%"  alt="<?= $arItem["PREVIEW_PICTURE"]["ALT"] ?>" title="<?= $arItem["PREVIEW_PICTURE"]["TITLE"] ?>" /></a>
							<? endif ?>

							<div class="collections__title"> <? echo $arItem["NAME"] ?> </div>
							<div class="collections__button"> <a href="<?= $ar_res['SECTION_PAGE_URL']; ?>" class="button bg-blue-1">Смотреть </a> </div>
						</div>
					<? endforeach; ?>


				</div>
			</div>
			<div class="slider__dots d-block d-lg-none"></div>
		</div>
	</div>
</section>
