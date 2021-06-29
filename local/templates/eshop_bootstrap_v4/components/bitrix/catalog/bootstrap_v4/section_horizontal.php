<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Loader;
use Bitrix\Main\ModuleManager;

/**
 * @global CMain         $APPLICATION
 * @var CBitrixComponent $component
 * @var array            $arParams
 * @var array            $arResult
 * @var array            $arCurSection
 */

if (isset($arParams['USE_COMMON_SETTINGS_BASKET_POPUP']) && $arParams['USE_COMMON_SETTINGS_BASKET_POPUP'] === 'Y') {
	$basketAction = isset($arParams['COMMON_ADD_TO_BASKET_ACTION']) ? $arParams['COMMON_ADD_TO_BASKET_ACTION'] : '';
} else {
	$basketAction = isset($arParams['SECTION_ADD_TO_BASKET_ACTION']) ? $arParams['SECTION_ADD_TO_BASKET_ACTION'] : '';
}
?>

<section class="topbar__page topbar__catalog">
  <div class="container">
    <div class="title-topbar">
      <h1><?= $arCurSection["NAME"] ?></h1>
    </div>
  </div>
</section>

<section class="category__page-block">
  <div class="container">
    <div class="category__wrapper">

      <div class="category__left-side">
		    <?php /* subcategories */ ?>
		    <?php require_once 'section_sidebar.php'; ?>
      </div>

      <div class="category__right-side">
        <?php /* filter */ ?>
        <?php if ($isFilter) { ?>
          <div class="category__filter">
            <?php //require_once 'section_filter.php'; ?>
          </div>
        <?php } ?>

		    <?php /* sorting */ ?>
        <?php //require_once 'section_sorting.php'; ?>

        <?php /* product list + pagination */ ?>
        <?php require_once 'sections_product-list.php'; ?>
      </div>

    </div>
  </div>
</section>






<?php require_once 'sections_product-list.php'; ?>

<? $GLOBALS['CATALOG_CURRENT_SECTION_ID'] = $intSectionID; ?>
