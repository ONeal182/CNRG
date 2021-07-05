<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

/**
 * @var CBitrixComponentTemplate $this
 * @var CatalogTopComponent $component
 */

$component = $this->getComponent();
$arParams = $component->applyTemplateModifications();

foreach ($arResult['ITEMS'][0] as $k => &$item) {
	foreach ($item['OFFERS'] as &$offer) {
		$res = CIBlockElement::GetByID($offer['ID']);
		if($ar_res = $res->GetNext()) {
			$offer['NAME'] = $ar_res['NAME'];
		}

		$item['PRICES'][] = $offer['CATALOG_PURCHASING_PRICE'];
		$item['COMMON_QUANTITY'] += $offer["PRODUCT"]["QUANTITY"];
	}
	foreach ($item['PRICES'] as $PRICE) {
		if ($item['MIN_PRICE'] == 0) {
			$item['MIN_PRICE'] = $PRICE;
		} else {
			$item['MIN_PRICE'] = ($PRICE < $item['MIN_PRICE'] && $item['MIN_PRICE'] != 0) ? $PRICE : $item['MIN_PRICE'];
		}

	}
}
