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
?>
<div class="product__card-overlay">
  <div class="product__img-gallery">
  <?php if (count($item['PROPERTIES']['Izobrazheniya']['VALUE']) > 0) { ?>
        <div class="product__img-thumbs">
      <?php foreach ($item['PROPERTIES']['Izobrazheniya']['VALUE'] as $imgId) {
        $imgSrc = CFile::GetPath($imgId); ?>
              <div class="img-thumbs" data-img="<?= $imgSrc ?>"
                   style="background-image: url(<?= $imgSrc ?>);"> </div>
      <?php } ?>
        </div>
  <?php } ?>
    <div class="product__img-grand">
      <div class="img-grand" style="background-image: url(<?= $item['PREVIEW_PICTURE']["SRC"] ?>)">
      </div>
    </div>
  </div>
  <a <?= $itemHasDetailUrl ? 'href="'.$item['DETAIL_PAGE_URL'].'"' : '' ?> class="product__card-title">
    <?= $productTitle ?>
  </a>
  <div class="proudct__card-atribute">
    <div class="card-atribute__item"> Артикул: <?= $item["PROPERTIES"]["WDI_ARTICLE"]['VALUE'] ?> </div>
    <div class="card-atribute__item"> Всего доступно: <?= $item['COMMON_QUANTITY'] ?> </div>
    <div class="card-atribute__item"> Бренд: <?= $item['PROPERTIES']['WDI_BRADN_OSN']['VALUE'] ?> </div>
  </div>
  <div class="proudct__card-cart">
    <div class="product__card-price" data-entity="price-block">
    <?php if ($arParams['SHOW_OLD_PRICE'] === 'Y' && $price['RATIO_PRICE'] < $price['RATIO_BASE_PRICE']) { ?>
          <span class="product__card-price old" id="<?= $itemIds['PRICE_OLD'] ?>">
           <?= $item['MIN_RATIO_PRICE'] ?> ₽
        </span>
    <?php } ?>
      <span class="product__card-price product__card-price--new" id="<?= $itemIds['PRICE'] ?>">
        <?php if (!empty($price)) { ?>
          <?= $item['MIN_BASE_PRICE'] ?> ₽
        <?php } ?>
      </span>
    </div>
    <div class="product__card-button">
      <button class="button bg-blue-1 jsAddToCart" data-offer-id="<?= $item['OFFERS'][0]['ID'] ?>">
        <img src="<?= SITE_TEMPLATE_PATH?>/assets/img/icons/cart-button.svg"> В корзину
      </button>
    </div>
  </div>
</div>
