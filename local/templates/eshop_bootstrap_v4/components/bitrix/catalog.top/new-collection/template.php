<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

/**
 * @global CMain $APPLICATION
 * @var array $arParams
 * @var array $arResult
 * @var CatalogTopComponent $component
 * @var CBitrixComponentTemplate $this
 * @var string $templateName
 * @var string $componentPath
 * @var string $templateFolder
 */

$this->setFrameMode(true);


if (!empty($arResult['ITEMS']))
{
	$elementEdit = CIBlock::GetArrayByID($arParams['IBLOCK_ID'], 'ELEMENT_EDIT');
	$elementDelete = CIBlock::GetArrayByID($arParams['IBLOCK_ID'], 'ELEMENT_DELETE');
	$elementDeleteParams = array('CONFIRM' => GetMessage('CT_BCT_ELEMENT_DELETE_CONFIRM'));

	$fullPath = \Bitrix\Main\Application::getDocumentRoot().$templateFolder;
	$templateLibrary = array('popup');
	$currencyList = '';

	if (!empty($arResult['CURRENCIES']))
	{
		$templateLibrary[] = 'currency';
		$currencyList = CUtil::PhpToJSObject($arResult['CURRENCIES'], false, true, true);
	}

	$templateData = array(
		'TEMPLATE_THEME' => $arParams['TEMPLATE_THEME'],
		'TEMPLATE_CLASS' => 'bx_'.$arParams['TEMPLATE_THEME'],
		'TEMPLATE_LIBRARY' => $templateLibrary,
		'CURRENCIES' => $currencyList
	);
	unset($currencyList, $templateLibrary);
	?>

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
                  <a href="<?= $item['DETAIL_PAGE_URL'] ?>" class="product__card-title"><?= $item["NAME"] ?></a>
                  <div class="proudct__card-atribute">
                    <div class="card-atribute__item"> Артикул: <?= $item['PROPERTIES']['WDI_ARTICLE']['VALUE'] ?> </div>
                    <div class="card-atribute__item"> Всего доступно: <?= $item['COMMON_QUANTITY'] ?> </div>
                    <div class="card-atribute__item"> Бренд: <?= $item['PROPERTIES']['WDI_BRADN_OSN']['VALUE'] ?> </div>
                  </div>
                  <div class="proudct__card-cart">
                    <div class="product__card-price"> От <?= intval($item['MIN_PRICE']) ?> ₽ </div>
                    <div class="product__card-button">
                      <button class="button bg-blue-1 jsAddToCart" data-offer-id="<?= $item['OFFERS'][0]['ID'] ?>">
                        <img src="<?= SITE_TEMPLATE_PATH?>/assets/img/icons/cart-button.svg"> В корзину
                      </button>
                    </div>
                  </div>
                </div>
              </div>
			<?php } ?>

        </div>
      </div>

    </div>
  </section>



	<script type='text/javascript'>
	   BX.message({
		   BTN_MESSAGE_BASKET_REDIRECT: '<?=GetMessageJS('CT_BCT_CATALOG_BTN_MESSAGE_BASKET_REDIRECT')?>',
		   BASKET_URL: '<?=$arParams['BASKET_URL']?>',
		   ADD_TO_BASKET_OK: '<?=GetMessageJS('ADD_TO_BASKET_OK')?>',
		   TITLE_ERROR: '<?=GetMessageJS('CT_BCT_CATALOG_TITLE_ERROR')?>',
		   TITLE_BASKET_PROPS: '<?=GetMessageJS('CT_BCT_CATALOG_TITLE_BASKET_PROPS')?>',
		   TITLE_SUCCESSFUL: '<?=GetMessageJS('ADD_TO_BASKET_OK')?>',
		   BASKET_UNKNOWN_ERROR: '<?=GetMessageJS('CT_BCT_CATALOG_BASKET_UNKNOWN_ERROR')?>',
		   BTN_MESSAGE_SEND_PROPS: '<?=GetMessageJS('CT_BCT_CATALOG_BTN_MESSAGE_SEND_PROPS')?>',
		   BTN_MESSAGE_CLOSE: '<?=GetMessageJS('CT_BCT_CATALOG_BTN_MESSAGE_CLOSE')?>',
		   BTN_MESSAGE_CLOSE_POPUP: '<?=GetMessageJS('CT_BCT_CATALOG_BTN_MESSAGE_CLOSE_POPUP')?>',
		   COMPARE_MESSAGE_OK: '<?=GetMessageJS('CT_BCT_CATALOG_MESS_COMPARE_OK')?>',
		   COMPARE_UNKNOWN_ERROR: '<?=GetMessageJS('CT_BCT_CATALOG_MESS_COMPARE_UNKNOWN_ERROR')?>',
		   COMPARE_TITLE: '<?=GetMessageJS('CT_BCT_CATALOG_MESS_COMPARE_TITLE')?>',
		   PRICE_TOTAL_PREFIX: '<?=GetMessageJS('CT_BCT_CATALOG_PRICE_TOTAL_PREFIX')?>',
		   BTN_MESSAGE_COMPARE_REDIRECT: '<?=GetMessageJS('CT_BCT_CATALOG_BTN_MESSAGE_COMPARE_REDIRECT')?>',
		   SITE_ID: '<?=CUtil::JSEscape($component->getSiteId())?>'
	   });
	</script>
	<?
}
?>