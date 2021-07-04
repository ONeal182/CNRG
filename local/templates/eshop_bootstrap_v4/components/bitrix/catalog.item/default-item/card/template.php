<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use \Bitrix\Main\Localization\Loc;

/**
 * @global CMain                $APPLICATION
 * @var array                   $arParams
 * @var array                   $item
 * @var array                   $actualItem
 * @var array                   $minOffer
 * @var array                   $itemIds
 * @var array                   $price
 * @var array                   $measureRatio
 * @var bool                    $haveOffers
 * @var bool                    $showSubscribe
 * @var array                   $morePhoto
 * @var bool                    $showSlider
 * @var bool                    $itemHasDetailUrl
 * @var string                  $imgTitle
 * @var string                  $productTitle
 * @var string                  $buttonSizeClass
 * @var CatalogSectionComponent $component
 */

$offer = reset($item['OFFERS']);
?>

<div class="product__card-overlay">
  <div class="product__img-gallery">

    <?php if (count($item['PREVIEWS_IMGS']) > 1) { ?>
      <div class="product__img-thumbs">
        <?php foreach ($item['PREVIEWS_IMGS'] as $img) { ?>
          <div class="img-thumbs js-offer"
           data-img="<?= $img['img']['SRC'] ?>"
           data-id="<?= $img['offer']['ID'] ?>"
           data-name="<?= $img['offer']['NAME'] ?>"
           data-article="<?= $img['offer']["PROPERTIES"]["Artikul"]['VALUE'] ?>"
           data-available="<?= $img['offer']['PRODUCT']['QUANTITY'] ?: '0' ?>"
           data-price="<?= $img['offer']['ITEM_PRICES'][0]['PRINT_RATIO_PRICE'] ?>"
           data-old-price="<?= $img['offer']['ITEM_PRICES'][0]['PRINT_BASE_PRICE'] ?>"
           style="background-image: url(<?= $img['img']['SRC'] ?>);"> </div>
        <?php } ?>
      </div>
    <?php } ?>
    <div class="product__img-grand">
      <div class="img-grand js-img" style="background-image: url(<?= $item['PREVIEWS_IMGS'][$offer['ID']]['img']['SRC'] ?>)">
      </div>
    </div>
  </div>

  <a <?= $itemHasDetailUrl ? 'href="'.$item['DETAIL_PAGE_URL'].'"' : '' ?> class="product__card-title js-name">
    <?// $productTitle ?><?= $offer['NAME'] ?>
  </a>
  <div class="proudct__card-atribute">
    <div class="card-atribute__item js-offer-article"> Артикул: <?= $offer["PROPERTIES"]["Artikul"]['VALUE'] ?> </div>
    <div class="card-atribute__item"> Всего доступно: <span class="js-available"><?= $offer['PRODUCT']['QUANTITY'] ?: '0' ?></span> </div>
    <div class="card-atribute__item"> Бренд: <?= $item['PROPERTIES']['WDI_BRAND_NAME']['VALUE'] ?> </div>
  </div>
  <div class="proudct__card-cart">
    <div class="product__card-price" data-entity="price-block">
    <?php if ($arParams['SHOW_OLD_PRICE'] === 'Y' && $offer['ITEM_PRICES'][0]['RATIO_PRICE'] < $offer['ITEM_PRICES'][0]['RATIO_BASE_PRICE']) { ?>
          <span class="product__card-price old js-old-price" id="<?= $itemIds['PRICE_OLD'] ?>">
         <?= $offer['ITEM_PRICES'][0]['PRINT_BASE_PRICE'] ?>
      </span>
    <?php } ?>
    <span class="product__card-price product__card-price--new js-price" id="<?= $itemIds['PRICE'] ?>">
      <?php if (!empty($price)) { ?>
        <?= $offer['ITEM_PRICES'][0]['PRINT_RATIO_PRICE'] ?>
      <?php } ?>
    </span>
    </div>
    <div class="product__card-button">
      <button class="button bg-blue-1 jsAddToCart" data-offer-id="<?= $offer['ID'] ?>">
        <img src="<?= SITE_TEMPLATE_PATH?>/assets/img/icons/cart-button.svg"> В корзину
      </button>
    </div>
  </div>
</div>



