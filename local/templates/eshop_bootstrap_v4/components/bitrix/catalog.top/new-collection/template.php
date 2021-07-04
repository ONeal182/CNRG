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

$generalParams = array(
	'HIDE_PROPERTIES' => 'Y',
	'SHOW_DISCOUNT_PERCENT' => $arParams['SHOW_DISCOUNT_PERCENT'],
	'PRODUCT_DISPLAY_MODE' => $arParams['PRODUCT_DISPLAY_MODE'],
	'SHOW_MAX_QUANTITY' => $arParams['SHOW_MAX_QUANTITY'],
	'RELATIVE_QUANTITY_FACTOR' => $arParams['RELATIVE_QUANTITY_FACTOR'],
	'MESS_SHOW_MAX_QUANTITY' => $arParams['~MESS_SHOW_MAX_QUANTITY'],
	'MESS_RELATIVE_QUANTITY_MANY' => $arParams['~MESS_RELATIVE_QUANTITY_MANY'],
	'MESS_RELATIVE_QUANTITY_FEW' => $arParams['~MESS_RELATIVE_QUANTITY_FEW'],
	'SHOW_OLD_PRICE' => $arParams['SHOW_OLD_PRICE'],
	'USE_PRODUCT_QUANTITY' => $arParams['USE_PRODUCT_QUANTITY'],
	'PRODUCT_QUANTITY_VARIABLE' => $arParams['PRODUCT_QUANTITY_VARIABLE'],
	'ADD_TO_BASKET_ACTION' => $arParams['ADD_TO_BASKET_ACTION'],
	'ADD_PROPERTIES_TO_BASKET' => $arParams['ADD_PROPERTIES_TO_BASKET'],
	'PRODUCT_PROPS_VARIABLE' => $arParams['PRODUCT_PROPS_VARIABLE'],
	'SHOW_CLOSE_POPUP' => $arParams['SHOW_CLOSE_POPUP'],
	'DISPLAY_COMPARE' => $arParams['DISPLAY_COMPARE'],
	'COMPARE_PATH' => $arParams['COMPARE_PATH'],
	'COMPARE_NAME' => $arParams['COMPARE_NAME'],
	'PRODUCT_SUBSCRIPTION' => $arParams['PRODUCT_SUBSCRIPTION'],
	'PRODUCT_BLOCKS_ORDER' => $arParams['PRODUCT_BLOCKS_ORDER'],
	'LABEL_POSITION_CLASS' => $labelPositionClass,
	'DISCOUNT_POSITION_CLASS' => $discountPositionClass,
	'SLIDER_INTERVAL' => $arParams['SLIDER_INTERVAL'],
	'SLIDER_PROGRESS' => $arParams['SLIDER_PROGRESS'],
	'~BASKET_URL' => $arParams['~BASKET_URL'],
	'~ADD_URL_TEMPLATE' => $arResult['~ADD_URL_TEMPLATE'],
	'~BUY_URL_TEMPLATE' => $arResult['~BUY_URL_TEMPLATE'],
	'~COMPARE_URL_TEMPLATE' => $arResult['~COMPARE_URL_TEMPLATE'],
	'~COMPARE_DELETE_URL_TEMPLATE' => $arResult['~COMPARE_DELETE_URL_TEMPLATE'],
	'TEMPLATE_THEME' => $arParams['TEMPLATE_THEME'],
	'USE_ENHANCED_ECOMMERCE' => $arParams['USE_ENHANCED_ECOMMERCE'],
	'DATA_LAYER_NAME' => $arParams['DATA_LAYER_NAME'],
	'BRAND_PROPERTY' => $arParams['BRAND_PROPERTY'],
	'MESS_BTN_BUY' => $arParams['~MESS_BTN_BUY'],
	'MESS_BTN_DETAIL' => $arParams['~MESS_BTN_DETAIL'],
	'MESS_BTN_COMPARE' => $arParams['~MESS_BTN_COMPARE'],
	'MESS_BTN_SUBSCRIBE' => $arParams['~MESS_BTN_SUBSCRIBE'],
	'MESS_BTN_ADD_TO_BASKET' => $arParams['~MESS_BTN_ADD_TO_BASKET'],
	'MESS_NOT_AVAILABLE' => $arParams['~MESS_NOT_AVAILABLE'],
);

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
              <?php
                $uniqueId = $item['ID'].'_'.md5($this->randString().$component->getAction());
                $areaIds[$item['ID']] = $this->GetEditAreaId($uniqueId);
                $this->AddEditAction($uniqueId, $item['EDIT_LINK'], $elementEdit);
                $this->AddDeleteAction($uniqueId, $item['DELETE_LINK'], $elementDelete, $elementDeleteParams);
              ?>
              <? $APPLICATION->IncludeComponent(
                'bitrix:catalog.item',
                'default-item',
                array(
                  'RESULT' => array(
                    'ITEM' => $item,
                    'USE_PRODUCT_QUANTITY' => 'Y',
                    'AREA_ID' => $areaIds[$item['ID']],
                    'TYPE' => 'card',
                    'BIG_LABEL' => 'N',
                    'BIG_DISCOUNT_PERCENT' => 'N',
                    'BIG_BUTTONS' => 'Y',
                    'SCALABLE' => 'N'
                  ),
                  'PARAMS' => $generalParams
                    + array('SKU_PROPS' => $arResult['SKU_PROPS'][$item['IBLOCK_ID']])
                ),
                $component,
                array('HIDE_ICONS' => 'Y')
              ); ?>
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