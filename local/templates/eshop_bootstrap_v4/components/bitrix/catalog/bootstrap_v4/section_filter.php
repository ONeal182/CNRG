<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();?>

	<div class="filter__items">
		<a href="#" class="filter__product"> Новинки <span> 30 </span></a>
		<select class="filter-multiple filter__product" data-width="auto" placeholder="Бренд" multiple="multiple">
			<option value="1">Hugo Boss </option>
			<option value="2">Boss Hugo</option>
			<option value="3">Boss Boss</option>
			<option value="4">Hugo Hugo</option>
		</select>
		<select class="filter-multiple filter__product" data-width="auto" placeholder="Цвет" multiple="multiple">
			<option value="1">Синий </option>
			<option value="2">Белый </option>
			<option value="3">Черный </option>
			<option value="4">Красный </option>
			<option value="5">Розовый </option>
			<option value="5">Фиолетовый </option>
			<option value="5">Золотой </option>
			<option value="5">Бордовый </option>
		</select>
		<select class="filter-multiple filter__product" data-width="auto" placeholder="Пол" multiple="multiple">
			<option value="1">Для мужчин </option>
			<option value="2">Для женщин </option>
			<option value="3">Унисекс </option>
		</select>
		<select class="filter-multiple filter__product" data-width="auto" placeholder="Размер" multiple="multiple">
			<option value="1">m </option>
			<option value="2">s </option>
			<option value="3">l </option>
			<option value="4">xl </option>
			<option value="5">xxl</option>
		</select>
		<select class="filter-multiple filter__product" data-width="auto" placeholder="Материал" multiple="multiple">
			<option value="1">Шелк</option>
			<option value="2">Хлопок</option>
			<option value="3">Синтетика</option>
		</select>
		<select class="filter-multiple filter__product" data-width="auto" placeholder="Вид нанесения" multiple="multiple">
			<option value="1">Тампопечать</option>
			<option value="2">Шелкография</option>
			<option value="3">...</option>
		</select>
		<select class="filter-multiple filter__product" data-width="auto" placeholder="Каталог" multiple="multiple">
			<option value="1">Тампопечать</option>
			<option value="2">Шелкография</option>
			<option value="3">...</option>
		</select>
	</div>

<? /*

$APPLICATION->IncludeComponent("bitrix:catalog.smart.filter", "bootstrap_v4", array(
	"IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
	"IBLOCK_ID" => $arParams["IBLOCK_ID"],
	"SECTION_ID" => $arCurSection['ID'],
	"FILTER_NAME" => $arParams["FILTER_NAME"],
	"PRICE_CODE" => $arParams["~PRICE_CODE"],
	"CACHE_TYPE" => $arParams["CACHE_TYPE"],
	"CACHE_TIME" => $arParams["CACHE_TIME"],
	"CACHE_GROUPS" => $arParams["CACHE_GROUPS"],
	"SAVE_IN_SESSION" => "N",
	"FILTER_VIEW_MODE" => $arParams["FILTER_VIEW_MODE"],
	"XML_EXPORT" => "N",
	"SECTION_TITLE" => "NAME",
	"SECTION_DESCRIPTION" => "DESCRIPTION",
	'HIDE_NOT_AVAILABLE' => $arParams["HIDE_NOT_AVAILABLE"],
	"TEMPLATE_THEME" => $arParams["TEMPLATE_THEME"],
	'CONVERT_CURRENCY' => $arParams['CONVERT_CURRENCY'],
	'CURRENCY_ID' => $arParams['CURRENCY_ID'],
	"SEF_MODE" => $arParams["SEF_MODE"],
	"SEF_RULE" => $arResult["FOLDER"] . $arResult["URL_TEMPLATES"]["smart_filter"],
	"SMART_FILTER_PATH" => $arResult["VARIABLES"]["SMART_FILTER_PATH"],
	"PAGER_PARAMS_NAME" => $arParams["PAGER_PARAMS_NAME"],
	"INSTANT_RELOAD" => $arParams["INSTANT_RELOAD"],
),
	$component,
	array('HIDE_ICONS' => 'Y')
);
?>
