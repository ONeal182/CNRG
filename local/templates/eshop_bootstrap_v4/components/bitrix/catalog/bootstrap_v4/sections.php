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
  <section class="catalog__page-block catalog__page-title">
    <div class="container">
      <div class="title-topbar"><h1> Каталог </h1></div>

        <? $sectionListParams = array(
          "IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
          "IBLOCK_ID" => $arParams["IBLOCK_ID"],
          "CACHE_TYPE" => $arParams["CACHE_TYPE"],
          "CACHE_TIME" => $arParams["CACHE_TIME"],
          "CACHE_GROUPS" => $arParams["CACHE_GROUPS"],
          "COUNT_ELEMENTS" => $arParams["SECTION_COUNT_ELEMENTS"],
          "TOP_DEPTH" => $arParams["SECTION_TOP_DEPTH"],
          "SECTION_URL" => $arResult["FOLDER"] . $arResult["URL_TEMPLATES"]["section"],
          "SECTION_USER_FIELDS" => array("UF_*"),
          "VIEW_MODE" => $arParams["SECTIONS_VIEW_MODE"],
          "SHOW_PARENT_NAME" => $arParams["SECTIONS_SHOW_PARENT_NAME"],
          "HIDE_SECTION_NAME" => (isset($arParams["SECTIONS_HIDE_SECTION_NAME"]) ? $arParams["SECTIONS_HIDE_SECTION_NAME"] : "N"),
          "ADD_SECTIONS_CHAIN" => (isset($arParams["ADD_SECTIONS_CHAIN"]) ? $arParams["ADD_SECTIONS_CHAIN"] : ''),
        );
        if ($sectionListParams["COUNT_ELEMENTS"] === "Y") {
          $sectionListParams["COUNT_ELEMENTS_FILTER"] = "CNT_ACTIVE";
          if ($arParams["HIDE_NOT_AVAILABLE"] == "Y") {
            $sectionListParams["COUNT_ELEMENTS_FILTER"] = "CNT_AVAILABLE";
          }
        }
        $APPLICATION->IncludeComponent(
          "bitrix:catalog.section.list",
          ".default",
          $sectionListParams,
          $component,
          ($arParams["SHOW_TOP_ELEMENTS"] !== "N" ? array("HIDE_ICONS" => "Y") : array())
        );
        unset($sectionListParams);?>
    </div>
  </section>

  <?php /* Новая коллекция */ ?>
  <?$APPLICATION->IncludeComponent("bitrix:catalog.top", "new-collection", Array(
    "ACTION_VARIABLE" => "action",	// Название переменной, в которой передается действие
    "ADD_PICT_PROP" => "-",	// Дополнительная картинка основного товара
    "ADD_PROPERTIES_TO_BASKET" => "Y",	// Добавлять в корзину свойства товаров и предложений
    "ADD_TO_BASKET_ACTION" => "ADD",	// Показывать кнопку добавления в корзину или покупки
    "BASKET_URL" => "/personal/cart.php",	// URL, ведущий на страницу с корзиной покупателя
    "CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
    "CACHE_GROUPS" => "Y",	// Учитывать права доступа
    "CACHE_TIME" => "36000000",	// Время кеширования (сек.)
    "CACHE_TYPE" => "A",	// Тип кеширования
    "COMPARE_NAME" => "CATALOG_COMPARE_LIST",	// Уникальное имя для списка сравнения
    "COMPATIBLE_MODE" => "Y",	// Включить режим совместимости
    "CONVERT_CURRENCY" => "N",	// Показывать цены в одной валюте
    "CUSTOM_FILTER" => "{\"CLASS_ID\":\"CondGroup\",\"DATA\":{\"All\":\"AND\",\"True\":\"True\"},\"CHILDREN\":[{\"CLASS_ID\":\"CondIBProp:4:687\",\"DATA\":{\"logic\":\"Equal\",\"value\":18}}]}",	// Фильтр товаров
    "DETAIL_URL" => "",	// URL, ведущий на страницу с содержимым элемента раздела
    "DISPLAY_COMPARE" => "N",	// Разрешить сравнение товаров
    "ELEMENT_COUNT" => "9",	// Количество выводимых элементов
    "ELEMENT_SORT_FIELD" => "sort",	// По какому полю сортируем элементы
    "ELEMENT_SORT_FIELD2" => "id",	// Поле для второй сортировки элементов
    "ELEMENT_SORT_ORDER" => "asc",	// Порядок сортировки элементов
    "ELEMENT_SORT_ORDER2" => "desc",	// Порядок второй сортировки элементов
    "ENLARGE_PRODUCT" => "STRICT",	// Выделять товары в списке
    "FILTER_NAME" => "",	// Имя массива со значениями фильтра для фильтрации элементов
    "HIDE_NOT_AVAILABLE" => "N",	// Недоступные товары
    "HIDE_NOT_AVAILABLE_OFFERS" => "N",	// Недоступные торговые предложения
    "IBLOCK_ID" => "4",	// Инфоблок
    "IBLOCK_TYPE" => "catalog",	// Тип инфоблока
    "LABEL_PROP" => "",	// Свойство меток товара
    "LINE_ELEMENT_COUNT" => "3",	// Количество элементов выводимых в одной строке таблицы
    "MESS_BTN_ADD_TO_BASKET" => "В корзину",	// Текст кнопки "Добавить в корзину"
    "MESS_BTN_BUY" => "Купить",	// Текст кнопки "Купить"
    "MESS_BTN_COMPARE" => "Сравнить",	// Текст кнопки "Сравнить"
    "MESS_BTN_DETAIL" => "Подробнее",	// Текст кнопки "Подробнее"
    "MESS_NOT_AVAILABLE" => "Нет в наличии",	// Сообщение об отсутствии товара
    "OFFERS_FIELD_CODE" => array(	// Поля предложений
      0 => "",
      1 => "",
    ),
    "OFFERS_LIMIT" => "9",	// Максимальное количество предложений для показа (0 - все)
    "OFFERS_SORT_FIELD" => "sort",	// По какому полю сортируем предложения товара
    "OFFERS_SORT_FIELD2" => "id",	// Поле для второй сортировки предложений товара
    "OFFERS_SORT_ORDER" => "asc",	// Порядок сортировки предложений товара
    "OFFERS_SORT_ORDER2" => "desc",	// Порядок второй сортировки предложений товара
    "PARTIAL_PRODUCT_PROPERTIES" => "N",	// Разрешить добавлять в корзину товары, у которых заполнены не все характеристики
    "PRICE_CODE" => "",	// Тип цены
    "PRICE_VAT_INCLUDE" => "Y",	// Включать НДС в цену
    "PRODUCT_BLOCKS_ORDER" => "price,props,sku,quantityLimit,quantity,buttons",	// Порядок отображения блоков товара
    "PRODUCT_DISPLAY_MODE" => "N",	// Схема отображения
    "PRODUCT_ID_VARIABLE" => "id",	// Название переменной, в которой передается код товара для покупки
    "PRODUCT_PROPS_VARIABLE" => "prop",	// Название переменной, в которой передаются характеристики товара
    "PRODUCT_QUANTITY_VARIABLE" => "quantity",	// Название переменной, в которой передается количество товара
    "PRODUCT_ROW_VARIANTS" => "[{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false}]",	// Вариант отображения товаров
    "PRODUCT_SUBSCRIPTION" => "Y",	// Разрешить оповещения для отсутствующих товаров
    "ROTATE_TIMER" => "30",	// Время показа одного слайда, сек (0 - выключить автоматическую смену слайдов)
    "SECTION_URL" => "",	// URL, ведущий на страницу с содержимым раздела
    "SEF_MODE" => "N",	// Включить поддержку ЧПУ
    "SHOW_CLOSE_POPUP" => "N",	// Показывать кнопку продолжения покупок во всплывающих окнах
    "SHOW_DISCOUNT_PERCENT" => "N",	// Показывать процент скидки
    "SHOW_MAX_QUANTITY" => "N",	// Показывать остаток товара
    "SHOW_OLD_PRICE" => "N",	// Показывать старую цену
    "SHOW_PAGINATION" => "Y",	// Показывать навигацию по слайдам
    "SHOW_PRICE_COUNT" => "1",	// Выводить цены для количества
    "SHOW_SLIDER" => "Y",	// Показывать слайдер для товаров
    "SLIDER_INTERVAL" => "3000",	// Интервал смены слайдов, мс
    "SLIDER_PROGRESS" => "N",	// Показывать полосу прогресса
    "TEMPLATE_THEME" => "blue",	// Цветовая тема
    "USE_ENHANCED_ECOMMERCE" => "N",	// Отправлять данные электронной торговли в Google и Яндекс
    "USE_PRICE_COUNT" => "N",	// Использовать вывод цен с диапазонами
    "USE_PRODUCT_QUANTITY" => "N",	// Разрешить указание количества товара
    "VIEW_MODE" => "SLIDER",	// Показ элементов
    "COMPONENT_TEMPLATE" => "new-collection"
  ),
    false
  );?>




<?php /*



		// other
		if ($arParams["USE_COMPARE"] === "Y") {
			$APPLICATION->IncludeComponent("bitrix:catalog.compare.list", "", array(
				"IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
				"IBLOCK_ID" => $arParams["IBLOCK_ID"],
				"NAME" => $arParams["COMPARE_NAME"],
				"DETAIL_URL" => $arResult["FOLDER"] . $arResult["URL_TEMPLATES"]["element"],
				"COMPARE_URL" => $arResult["FOLDER"] . $arResult["URL_TEMPLATES"]["compare"],
				"ACTION_VARIABLE" => (!empty($arParams["ACTION_VARIABLE"]) ? $arParams["ACTION_VARIABLE"] : "action"),
				"PRODUCT_ID_VARIABLE" => $arParams["PRODUCT_ID_VARIABLE"],
				'POSITION_FIXED' => isset($arParams['COMPARE_POSITION_FIXED']) ? $arParams['COMPARE_POSITION_FIXED'] : '',
				'POSITION' => isset($arParams['COMPARE_POSITION']) ? $arParams['COMPARE_POSITION'] : '',
			),
				$component,
				array("HIDE_ICONS" => "Y")
			);
		}

		if ($arParams["SHOW_TOP_ELEMENTS"] !== "N") {
			if (isset($arParams['USE_COMMON_SETTINGS_BASKET_POPUP']) && $arParams['USE_COMMON_SETTINGS_BASKET_POPUP'] === 'Y') {
				$basketAction = isset($arParams['COMMON_ADD_TO_BASKET_ACTION']) ? $arParams['COMMON_ADD_TO_BASKET_ACTION'] : '';
			} else {
				$basketAction = isset($arParams['TOP_ADD_TO_BASKET_ACTION']) ? $arParams['TOP_ADD_TO_BASKET_ACTION'] : '';
			}

			$APPLICATION->IncludeComponent("bitrix:catalog.top", "bootstrap_v4", array(
				"IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
				"IBLOCK_ID" => $arParams["IBLOCK_ID"],
				"ELEMENT_SORT_FIELD" => $arParams["TOP_ELEMENT_SORT_FIELD"],
				"ELEMENT_SORT_ORDER" => $arParams["TOP_ELEMENT_SORT_ORDER"],
				"ELEMENT_SORT_FIELD2" => $arParams["TOP_ELEMENT_SORT_FIELD2"],
				"ELEMENT_SORT_ORDER2" => $arParams["TOP_ELEMENT_SORT_ORDER2"],
				"SECTION_URL" => $arResult["FOLDER"] . $arResult["URL_TEMPLATES"]["section"],
				"DETAIL_URL" => $arResult["FOLDER"] . $arResult["URL_TEMPLATES"]["element"],
				"BASKET_URL" => $arParams["BASKET_URL"],
				"ACTION_VARIABLE" => $arParams["ACTION_VARIABLE"],
				"PRODUCT_ID_VARIABLE" => $arParams["PRODUCT_ID_VARIABLE"],
				"PRODUCT_QUANTITY_VARIABLE" => $arParams["PRODUCT_QUANTITY_VARIABLE"],
				"PRODUCT_PROPS_VARIABLE" => $arParams["PRODUCT_PROPS_VARIABLE"],
				"DISPLAY_COMPARE" => $arParams["USE_COMPARE"],
				"ELEMENT_COUNT" => $arParams["TOP_ELEMENT_COUNT"],
				"LINE_ELEMENT_COUNT" => $arParams["TOP_LINE_ELEMENT_COUNT"],
				"PROPERTY_CODE" => (isset($arParams["TOP_PROPERTY_CODE"]) ? $arParams["TOP_PROPERTY_CODE"] : []),
				"PROPERTY_CODE_MOBILE" => $arParams["TOP_PROPERTY_CODE_MOBILE"],
				"PRICE_CODE" => $arParams["~PRICE_CODE"],
				"USE_PRICE_COUNT" => $arParams["USE_PRICE_COUNT"],
				"SHOW_PRICE_COUNT" => $arParams["SHOW_PRICE_COUNT"],
				"PRICE_VAT_INCLUDE" => $arParams["PRICE_VAT_INCLUDE"],
				"PRICE_VAT_SHOW_VALUE" => $arParams["PRICE_VAT_SHOW_VALUE"],
				"USE_PRODUCT_QUANTITY" => $arParams['USE_PRODUCT_QUANTITY'],
				"ADD_PROPERTIES_TO_BASKET" => (isset($arParams["ADD_PROPERTIES_TO_BASKET"]) ? $arParams["ADD_PROPERTIES_TO_BASKET"] : ''),
				"PARTIAL_PRODUCT_PROPERTIES" => (isset($arParams["PARTIAL_PRODUCT_PROPERTIES"]) ? $arParams["PARTIAL_PRODUCT_PROPERTIES"] : ''),
				"PRODUCT_PROPERTIES" => (isset($arParams["PRODUCT_PROPERTIES"]) ? $arParams["PRODUCT_PROPERTIES"] : []),
				"CACHE_TYPE" => $arParams["CACHE_TYPE"],
				"CACHE_TIME" => $arParams["CACHE_TIME"],
				"CACHE_GROUPS" => $arParams["CACHE_GROUPS"],
				"OFFERS_CART_PROPERTIES" => (isset($arParams["OFFERS_CART_PROPERTIES"]) ? $arParams["OFFERS_CART_PROPERTIES"] : []),
				"OFFERS_FIELD_CODE" => $arParams["TOP_OFFERS_FIELD_CODE"],
				"OFFERS_PROPERTY_CODE" => (isset($arParams["TOP_OFFERS_PROPERTY_CODE"]) ? $arParams["TOP_OFFERS_PROPERTY_CODE"] : []),
				"OFFERS_SORT_FIELD" => $arParams["OFFERS_SORT_FIELD"],
				"OFFERS_SORT_ORDER" => $arParams["OFFERS_SORT_ORDER"],
				"OFFERS_SORT_FIELD2" => $arParams["OFFERS_SORT_FIELD2"],
				"OFFERS_SORT_ORDER2" => $arParams["OFFERS_SORT_ORDER2"],
				"OFFERS_LIMIT" => (isset($arParams["TOP_OFFERS_LIMIT"]) ? $arParams["TOP_OFFERS_LIMIT"] : 0),
				'CONVERT_CURRENCY' => $arParams['CONVERT_CURRENCY'],
				'CURRENCY_ID' => $arParams['CURRENCY_ID'],
				'HIDE_NOT_AVAILABLE' => $arParams['HIDE_NOT_AVAILABLE'],
				'VIEW_MODE' => (isset($arParams['TOP_VIEW_MODE']) ? $arParams['TOP_VIEW_MODE'] : ''),
				'ROTATE_TIMER' => (isset($arParams['TOP_ROTATE_TIMER']) ? $arParams['TOP_ROTATE_TIMER'] : ''),
				'TEMPLATE_THEME' => (isset($arParams['TEMPLATE_THEME']) ? $arParams['TEMPLATE_THEME'] : ''),

				'LABEL_PROP' => $arParams['LABEL_PROP'],
				'LABEL_PROP_MOBILE' => $arParams['LABEL_PROP_MOBILE'],
				'LABEL_PROP_POSITION' => $arParams['LABEL_PROP_POSITION'],
				'ADD_PICT_PROP' => $arParams['ADD_PICT_PROP'],
				'PRODUCT_DISPLAY_MODE' => $arParams['PRODUCT_DISPLAY_MODE'],
				'PRODUCT_BLOCKS_ORDER' => $arParams['TOP_PRODUCT_BLOCKS_ORDER'],
				'PRODUCT_ROW_VARIANTS' => $arParams['TOP_PRODUCT_ROW_VARIANTS'],
				'ENLARGE_PRODUCT' => $arParams['TOP_ENLARGE_PRODUCT'],
				'ENLARGE_PROP' => isset($arParams['TOP_ENLARGE_PROP']) ? $arParams['TOP_ENLARGE_PROP'] : '',
				'SHOW_SLIDER' => $arParams['TOP_SHOW_SLIDER'],
				'SLIDER_INTERVAL' => isset($arParams['TOP_SLIDER_INTERVAL']) ? $arParams['TOP_SLIDER_INTERVAL'] : '',
				'SLIDER_PROGRESS' => isset($arParams['TOP_SLIDER_PROGRESS']) ? $arParams['TOP_SLIDER_PROGRESS'] : '',

				'OFFER_ADD_PICT_PROP' => $arParams['OFFER_ADD_PICT_PROP'],
				'OFFER_TREE_PROPS' => (isset($arParams['OFFER_TREE_PROPS']) ? $arParams['OFFER_TREE_PROPS'] : []),
				'PRODUCT_SUBSCRIPTION' => $arParams['PRODUCT_SUBSCRIPTION'],
				'SHOW_DISCOUNT_PERCENT' => $arParams['SHOW_DISCOUNT_PERCENT'],
				'DISCOUNT_PERCENT_POSITION' => $arParams['DISCOUNT_PERCENT_POSITION'],
				'SHOW_OLD_PRICE' => $arParams['SHOW_OLD_PRICE'],
				'MESS_BTN_BUY' => $arParams['~MESS_BTN_BUY'],
				'MESS_BTN_ADD_TO_BASKET' => $arParams['~MESS_BTN_ADD_TO_BASKET'],
				'MESS_BTN_SUBSCRIBE' => $arParams['~MESS_BTN_SUBSCRIBE'],
				'MESS_BTN_DETAIL' => $arParams['~MESS_BTN_DETAIL'],
				'MESS_NOT_AVAILABLE' => $arParams['~MESS_NOT_AVAILABLE'],
				'ADD_TO_BASKET_ACTION' => $basketAction,
				'SHOW_CLOSE_POPUP' => isset($arParams['COMMON_SHOW_CLOSE_POPUP']) ? $arParams['COMMON_SHOW_CLOSE_POPUP'] : '',
				'COMPARE_PATH' => $arResult['FOLDER'] . $arResult['URL_TEMPLATES']['compare'],
				'USE_COMPARE_LIST' => 'Y',

				'COMPATIBLE_MODE' => (isset($arParams['COMPATIBLE_MODE']) ? $arParams['COMPATIBLE_MODE'] : ''),
			),
				$component
			);
			unset($basketAction);
		}
		?>
    </div>
  </div>
<?

 */?>