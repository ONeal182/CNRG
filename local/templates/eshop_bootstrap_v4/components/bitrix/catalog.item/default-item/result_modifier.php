<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

$item = &$arResult['ITEM'];

foreach ($item['OFFERS'] as &$offer) {
	$item['PRICES'][] = [
		'BASE' => $offer["ITEM_PRICES"][0]['BASE_PRICE'],
		'RATIO' => $offer["ITEM_PRICES"][0]['RATIO_PRICE']
	];
	$item['COMMON_QUANTITY'] += $offer["PRODUCT"]["QUANTITY"];

	// cобираем картинки с указанием id оффера
	// для основной картинки берем PREVIEW, если его нет - DETAIL
	$img = [];
	if ($offer['PREVIEW_PICTURE']['SRC']) {
		$img = $offer['PREVIEW_PICTURE'];
	}
	if (!$img && $offer['DETAIL_PICTURE']['SRC']) {
		$img = $offer['DETAIL_PICTURE'];
	}

	if (!$img) {
		$img['SRC'] = '/local/templates/eshop_bootstrap_v4/images/no-photo.png';
	}

	$item['PREVIEWS_IMGS'][$offer['ID']] = [
		'offer' => $offer,
		'img' => $img
	];
}

foreach ($item['PRICES'] as $PRICE) {
	if ($item['MIN_BASE_PRICE'] == 0) {
		$item['MIN_BASE_PRICE'] = $PRICE['BASE'];
	} else {
		$item['MIN_BASE_PRICE'] = ($PRICE['BASE'] < $item['MIN_BASE_PRICE'] && $item['MIN_BASE_PRICE'] != 0) ? $PRICE['BASE'] : $item['MIN_BASE_PRICE'];
	}

	if ($item['MIN_RATIO_PRICE'] == 0) {
		$item['MIN_RATIO_PRICE'] = $PRICE['RATIO'];
	} else {
		$item['MIN_RATIO_PRICE'] = ($PRICE['RATIO'] < $item['MIN_RATIO_PRICE'] && $item['MIN_RATIO_PRICE'] != 0) ? $PRICE['RATIO'] : $item['MIN_RATIO_PRICE'];
	}
}
