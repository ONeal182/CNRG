<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
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
/** @var array $skuTemplate */
/** @var array $templateData */
$this->setFrameMode(true); ?>

<?if (!empty($arResult['ITEMS'])) { ?>
<section class="newcollection__section">
  <div class="container">
    <div class="slider__with-arrow">
      <div class="title-with-arrow">
        <h2> Новая коллекция  </h2>
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
      <div class="slider__dots"></div>

      <div class="slider__product">
        <?php foreach ($arResult['ITEMS'][0] as $item) { ?>
          <div class="product product__card ">
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
              <div class="product__card-title"><?= $item["NAME"] ?></div>
              <div class="proudct__card-atribute">
                <div class="card-atribute__item"> Артикул: <?= $item['PROPERTIES']['WDI_ARTICLE']['VALUE'] ?> </div>
                <div class="card-atribute__item"> Всего доступно: <?= $item['COMMON_QUANTITY'] ?> </div>
                <div class="card-atribute__item"> Бренд: <?= $item['PROPERTIES']['WDI_BRADN_OSN']['VALUE'] ?> </div>
              </div>
              <div class="proudct__card-cart">
                <div class="product__card-price"> От <?= intval($item['MIN_PRICE']) ?> ₽ </div>
                <div class="product__card-button"> <button class="button bg-blue-1"><img src="<?= SITE_TEMPLATE_PATH?>/assets/img/icons/cart-button.svg"> В корзину </button> </div>
              </div>
            </div>
          </div>
        <?php } ?>

      </div>
    </div>

  </div>
</section>
<?php } ?>
