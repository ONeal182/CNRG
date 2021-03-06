<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
IncludeTemplateLangFile($_SERVER["DOCUMENT_ROOT"] . "/bitrix/templates/" . SITE_TEMPLATE_ID . "/header.php");
CJSCore::Init(array("fx"));

\Bitrix\Main\UI\Extension::load("ui.bootstrap4");

if (isset($_GET["theme"]) && in_array($_GET["theme"], array("blue", "green", "yellow", "red"))) {
	COption::SetOptionString("main", "wizard_eshop_bootstrap_theme_id", $_GET["theme"], false, SITE_ID);
}
$theme = COption::GetOptionString("main", "wizard_eshop_bootstrap_theme_id", "green", SITE_ID);

$curPage = $APPLICATION->GetCurPage(true);
$isMain = $APPLICATION->GetCurPage(false) === '/';

?>
<!DOCTYPE html>
<html xml:lang="<?= LANGUAGE_ID ?>" lang="<?= LANGUAGE_ID ?>">

<head>
	<title><? $APPLICATION->ShowTitle() ?></title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, width=device-width">
	<? $APPLICATION->ShowHead(); ?>
	<link rel="shortcut icon" type="image/x-icon" href="<?= SITE_DIR ?>favicon.ico" />

	<link rel="stylesheet" href="/local/templates/eshop_bootstrap_v4/assets/css/multiple-select.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

	<link rel="stylesheet" href="/local/templates/eshop_bootstrap_v4/assets/css/slick.css">
	<link rel="stylesheet" href="/local/templates/eshop_bootstrap_v4/assets/css/slick-theme.css">
	<link rel="stylesheet" href="/local/templates/eshop_bootstrap_v4/assets/fonts/fonts.css">
	<link rel="stylesheet" href="/local/templates/eshop_bootstrap_v4/assets/css/style.css">
	<link rel="stylesheet" href="/local/templates/eshop_bootstrap_v4/assets/css/responsive.css">
</head>

<body class="bx-background-image bx-theme-<?= $theme ?>" <? $APPLICATION->ShowProperty("backgroundImage"); ?>>
	<div id="panel"><? $APPLICATION->ShowPanel(); ?></div>
	<?
	// $APPLICATION->IncludeComponent(
	// 	"bitrix:eshop.banner",
	// 	"",
	// 	array()
	// );
	?>

	<header>
		<div class="header__top-info bg-gray py-2">
			<div class="container-xl container-fluid text-center">
				<div class="top-info__block d-flex justify-content-center">
					<img src="/assets/img/icons/information.svg" class="img top-info__icon">
					<div class="top-info__text d-none d-lg-block">Работаем только с юридическими лицами. Минимальный заказ от <? $APPLICATION->IncludeComponent(
																																	"bitrix:main.include",
																																	"",
																																	array(
																																		"AREA_FILE_SHOW" => "file",
																																		"PATH" => SITE_DIR . "include/minorder.php"
																																	),
																																	false
																																); ?></div>
					<div class="top-info__text d-block d-lg-none">Работаем только с юр.лицами. Мин.заказ от <? $APPLICATION->IncludeComponent(
																												"bitrix:main.include",
																												"",
																												array(
																													"AREA_FILE_SHOW" => "file",
																													"PATH" => SITE_DIR . "include/minorder.php"
																												),
																												false
																											); ?></div>
				</div>
			</div>
		</div>
		<div class="container-xxl container-fluid">
			<div class="row align-items-center header__first-section">
				<div class="col-lg-1 col order-lg-1 order-3 text-center">
					<a href="/">
						<? $APPLICATION->IncludeComponent(
							"bitrix:main.include",
							"",
							array(
								"AREA_FILE_SHOW" => "file",
								"PATH" => SITE_DIR . "include/company_logo.php"
							),
							false
						); ?>
					</a>
				</div>
				<div class="col-auto col-lg-1 col-xl-7 order-lg-2 order-4 text-end">
					<nav class="header__navbar d-xl-block d-none">
						<ul>
							<? $APPLICATION->IncludeComponent(
								"bitrix:menu",
								"header_first-menu",
								array(
									"ROOT_MENU_TYPE" => "bottom",	// Тип меню для первого уровня
									"MAX_LEVEL" => "1",	// Уровень вложенности меню
									"MENU_CACHE_TYPE" => "A",	// Тип кеширования
									"CACHE_SELECTED_ITEMS" => "N",
									"MENU_CACHE_TIME" => "36000000",	// Время кеширования (сек.)
									"MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
									"MENU_CACHE_GET_VARS" => "",	// Значимые переменные запроса
								),
								false
							); ?>
						</ul>
					</nav>
					<div class="header__navbar-mobile d-xl-none d-block">
						<ul>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
									<img src="/assets/img/icons/mobilemenu.svg">
								</a>
								<ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown" style="">
									<? $APPLICATION->IncludeComponent(
										"bitrix:menu",
										"header_first-menu",
										array(
											"ROOT_MENU_TYPE" => "bottom",	// Тип меню для первого уровня
											"MAX_LEVEL" => "1",	// Уровень вложенности меню
											"MENU_CACHE_TYPE" => "A",	// Тип кеширования
											"CACHE_SELECTED_ITEMS" => "N",
											"MENU_CACHE_TIME" => "36000000",	// Время кеширования (сек.)
											"MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
											"MENU_CACHE_GET_VARS" => "",	// Значимые переменные запроса
										),
										false
									); ?>
								</ul>
							</li>
						</ul>

					</div>
				</div>
				<div class="offset-xl-0 offset-lg-5 col-5 col-xl-4 d-lg-block d-none order-4">
					<div class="header__contacts">
						<div class="contacts__phone">

							<? $APPLICATION->IncludeComponent(
								"bitrix:main.include",
								"",
								array(
									"AREA_FILE_SHOW" => "file",
									"PATH" => SITE_DIR . "include/telephone.php"
								),
								false
							); ?>

							<a href="#" class="link" data-bs-toggle="modal" data-bs-target="#callme"> Перезвоните мне </a>
						</div>
						<div class="contacts__email">
							<? $APPLICATION->IncludeComponent(
								"bitrix:main.include",
								"",
								array(
									"AREA_FILE_SHOW" => "file",
									"PATH" => SITE_DIR . "include/email.php"
								),
								false
							); ?>
							<span>
								<? $APPLICATION->IncludeComponent(
									"bitrix:main.include",
									"",
									array(
										"AREA_FILE_SHOW" => "file",
										"PATH" => SITE_DIR . "include/schedule.php"
									),
									false
								); ?>
							</span>
						</div>
					</div>
				</div>
				<!--div class="col-lg-1 d-lg-block d-none order-4">
					<div class="header__socials">
						<a href="#" class="social__item"><img src="/assets/img/icons/facebook.svg"></a>
						<a href="#" class="social__item"><img src="/assets/img/icons/vk.svg"></a>
						<a href="#" class="social__item"><img src="/assets/img/icons/instagram.svg"></a>
					</div>
				</div-->
				<? $APPLICATION->IncludeComponent(
					"bitrix:catalog.section.list",
					"menu_list",
					array(
						"ADD_SECTIONS_CHAIN" => "Y",
						"CACHE_FILTER" => "N",
						"CACHE_GROUPS" => "Y",
						"CACHE_TIME" => "36000000",
						"CACHE_TYPE" => "A",
						"COUNT_ELEMENTS" => "Y",
						"COUNT_ELEMENTS_FILTER" => "CNT_ACTIVE",
						"FILTER_NAME" => "sectionsFilter",
						"IBLOCK_ID" => "4",
						"IBLOCK_TYPE" => "catalog",
						"SECTION_CODE" => "",
						"SECTION_FIELDS" => array("", ""),
						"SECTION_ID" => $_REQUEST["SECTION_ID"],
						"SECTION_URL" => "",
						"SECTION_USER_FIELDS" => array("", ""),
						"SHOW_PARENT_NAME" => "Y",
						"TOP_DEPTH" => "2",
						"VIEW_MODE" => "LINE"
					)
				); ?>
				<div class="col-lg-9 col-auto order-lg-4 order-sm-2 ps-sm-0 mt-lg-4">
					<div class="header__search">
						<div class="search__overlay">

							<? $APPLICATION->IncludeComponent(
								"bitrix:search.title",
								"search_header",
								array(
									"NUM_CATEGORIES" => "1",	// Количество категорий поиска
									"TOP_COUNT" => "5",	// Количество результатов в каждой категории
									"CHECK_DATES" => "N",	// Искать только в активных по дате документах
									"SHOW_OTHERS" => "N",	// Показывать категорию "прочее"
									"PAGE" => SITE_DIR . "catalog/",	// Страница выдачи результатов поиска (доступен макрос #SITE_DIR#)
									"CATEGORY_0_TITLE" => GetMessage("SEARCH_GOODS"),	// Название категории
									"CATEGORY_0" => array(	// Ограничение области поиска
										0 => "iblock_catalog",
									),
									"CATEGORY_0_iblock_catalog" => array(	// Искать в информационных блоках типа "iblock_catalog"
										0 => "all",
									),
									"CATEGORY_OTHERS_TITLE" => GetMessage("SEARCH_OTHER"),
									"SHOW_INPUT" => "Y",	// Показывать форму ввода поискового запроса
									"INPUT_ID" => "title-search-input",	// ID строки ввода поискового запроса
									"CONTAINER_ID" => "search",	// ID контейнера, по ширине которого будут выводиться результаты
									"PRICE_CODE" => array(	// Тип цены
										0 => "BASE",
									),
									"SHOW_PREVIEW" => "Y",	// Показать картинку
									"PREVIEW_WIDTH" => "75",	// Ширина картинки
									"PREVIEW_HEIGHT" => "75",	// Высота картинки
									"CONVERT_CURRENCY" => "Y",	// Показывать цены в одной валюте
								),
								false
							); ?>
						</div>
					</div>
					<div class="header__search-mobile hidden">
						<div class="search__icon-mobile"> <img src="/assets/img/icons/search.svg"></div>
						<div class="search__overlay-mobile">
							<form class="form">
								<label>
									<input type="text" class="input search__input" placeholder="Например: Флешка "> </label>
								<input type="submit" class="button button__submit bg-blue-2 " value="Поиск">
							</form>
						</div>
					</div>
				</div>
				<div class="col-lg-1 col-sm-2 order-lg-4 order-sm-3 d-none d-sm-block mt-lg-4">
					<? $APPLICATION->IncludeComponent(
						"bitrix:sale.basket.basket.line",
						"bootstrap_v5",
						array(
							"PATH_TO_BASKET" => SITE_DIR . "personal/cart/",	// Страница корзины
							"PATH_TO_PERSONAL" => SITE_DIR . "personal/",	// Страница персонального раздела
							"SHOW_PERSONAL_LINK" => "N",	// Отображать персональный раздел
							"SHOW_NUM_PRODUCTS" => "Y",	// Показывать количество товаров
							"SHOW_TOTAL_PRICE" => "Y",	// Показывать общую сумму по товарам
							"SHOW_PRODUCTS" => "N",	// Показывать список товаров
							"POSITION_FIXED" => "N",	// Отображать корзину поверх шаблона
							"SHOW_AUTHOR" => "Y",	// Добавить возможность авторизации
							"PATH_TO_REGISTER" => SITE_DIR . "login/",	// Страница регистрации
							"PATH_TO_PROFILE" => SITE_DIR . "personal/",	// Страница профиля
							'MOBILE' => 'false'
						),
						false
					); ?>
				</div>
			</div>
		</div>
	</header>

	<div class="sticky__module">
		<div class="sticky__module-items">

			<? $APPLICATION->IncludeComponent(
				"bitrix:sale.basket.basket.line",
				"bootstrap_v5",
				array(
					"PATH_TO_BASKET" => SITE_DIR . "personal/cart/",	// Страница корзины
					"PATH_TO_PERSONAL" => SITE_DIR . "personal/",	// Страница персонального раздела
					"SHOW_PERSONAL_LINK" => "N",	// Отображать персональный раздел
					"SHOW_NUM_PRODUCTS" => "Y",	// Показывать количество товаров
					"SHOW_TOTAL_PRICE" => "Y",	// Показывать общую сумму по товарам
					"SHOW_PRODUCTS" => "N",	// Показывать список товаров
					"POSITION_FIXED" => "N",	// Отображать корзину поверх шаблона
					"SHOW_AUTHOR" => "Y",	// Добавить возможность авторизации
					"PATH_TO_REGISTER" => SITE_DIR . "login/",	// Страница регистрации
					"PATH_TO_PROFILE" => SITE_DIR . "personal/",	// Страница профиля
					'MOBILE' => 'true'
				),
				false
			); ?>
			<a href="#" class="cart-block_item">
				<img src="/assets/img/icons/phone.svg">
				<span> Позвонить </span>
			</a>
		</div>
	</div>


	<div class="modal fade" id="callme" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog  modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Оставьте контактные данные <span> Наш менеджер свяжется с вами в ближайшее время </span></h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<? $APPLICATION->IncludeComponent(
						"bitrix:form",
						"consultation_form",
						array(
							"AJAX_MODE" => "Y",
							"AJAX_OPTION_ADDITIONAL" => "",
							"AJAX_OPTION_HISTORY" => "N",
							"AJAX_OPTION_JUMP" => "N",
							"AJAX_OPTION_STYLE" => "Y",
							"CACHE_TIME" => "3600",
							"CACHE_TYPE" => "A",
							"CHAIN_ITEM_LINK" => "",
							"CHAIN_ITEM_TEXT" => "",
							"COMPONENT_TEMPLATE" => "consultation_form",
							"EDIT_ADDITIONAL" => "N",
							"EDIT_STATUS" => "N",
							"IGNORE_CUSTOM_TEMPLATE" => "N",
							"NAME_TEMPLATE" => "",
							"NOT_SHOW_FILTER" => array(
								0 => "",
								1 => "",
							),
							"NOT_SHOW_TABLE" => array(
								0 => "",
								1 => "",
							),
							"RESULT_ID" => $_REQUEST[RESULT_ID],
							"SEF_MODE" => "N",
							"SHOW_ADDITIONAL" => "N",
							"SHOW_ANSWER_VALUE" => "N",
							"SHOW_EDIT_PAGE" => "N",
							"SHOW_LIST_PAGE" => "N",
							"SHOW_STATUS" => "N",
							"SHOW_VIEW_PAGE" => "N",
							"START_PAGE" => "new",
							"SUCCESS_URL" => "",
							"USE_EXTENDED_ERRORS" => "N",
							"WEB_FORM_ID" => "3",
							"VARIABLE_ALIASES" => array(
								"action" => "action",
							)
						),
						false
					); ?>
				</div>

			</div>
		</div>
	</div>


	<div class="modal fade" id="foz" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog  modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Оставьте контактные данные <span> Наш менеджер свяжется с вами в ближайшее время </span></h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<? $APPLICATION->IncludeComponent(
						"bitrix:form",
						"consultation_form",
						array(
							"AJAX_MODE" => "Y",
							"AJAX_OPTION_ADDITIONAL" => "",
							"AJAX_OPTION_HISTORY" => "N",
							"AJAX_OPTION_JUMP" => "N",
							"AJAX_OPTION_STYLE" => "Y",
							"CACHE_TIME" => "3600",
							"CACHE_TYPE" => "A",
							"CHAIN_ITEM_LINK" => "",
							"CHAIN_ITEM_TEXT" => "",
							"COMPONENT_TEMPLATE" => "consultation_form",
							"EDIT_ADDITIONAL" => "N",
							"EDIT_STATUS" => "N",
							"IGNORE_CUSTOM_TEMPLATE" => "N",
							"NAME_TEMPLATE" => "",
							"NOT_SHOW_FILTER" => array(
								0 => "",
								1 => "",
							),
							"NOT_SHOW_TABLE" => array(
								0 => "",
								1 => "",
							),
							"RESULT_ID" => $_REQUEST[RESULT_ID],
							"SEF_MODE" => "N",
							"SHOW_ADDITIONAL" => "N",
							"SHOW_ANSWER_VALUE" => "N",
							"SHOW_EDIT_PAGE" => "N",
							"SHOW_LIST_PAGE" => "N",
							"SHOW_STATUS" => "N",
							"SHOW_VIEW_PAGE" => "N",
							"START_PAGE" => "new",
							"SUCCESS_URL" => "",
							"USE_EXTENDED_ERRORS" => "N",
							"WEB_FORM_ID" => "2",
							"VARIABLE_ALIASES" => array(
								"action" => "action",
							)
						),
						false
					); ?>
				</div>

			</div>
		</div>
	</div>

	<?php if (!$isMain) { ?>
		<? $APPLICATION->IncludeComponent(
			"bitrix:breadcrumb",
			".default",
			array(
				"PATH" => "",
				"SITE_ID" => "s1",
				"START_FROM" => "0"
			)
		); ?>
	<?php } ?>