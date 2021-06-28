
<div class="social__footer-mobile">
<? $APPLICATION->IncludeComponent(
				"bitrix:main.include",
				"",
				array(
					"AREA_FILE_SHOW" => "file",
					"PATH" => SITE_DIR . "include/socnet_footer.php",
					"AREA_FILE_RECURSIVE" => "N",
					"EDIT_MODE" => "html",
				),
				false,
				array('HIDE_ICONS' => 'Y')
			); ?>

</div>
<footer>
	<div class="container">
		<div class="row">
			<div class="col-md-3 col-sm-6 col-lg-3 footer__col-1">
				<div class="footer__logo-block">
				<? $APPLICATION->IncludeComponent(
							"bitrix:main.include",
							"",
							array(
								"AREA_FILE_SHOW" => "file",
								"PATH" => SITE_DIR . "include/company_logo.php"
							),
							false
						); ?>
					<p> cnrg.agency </p>
				</div>
				<button class="button button__catalog bg-blue-2 d-lg-none d-flex"><img src="/assets/img/icons/menu.svg">
					<span> Каталог товаров</span>

				</button>
				<div class="footer__copyright d-lg-block d-none">
					<? $APPLICATION->IncludeComponent("bitrix:main.include", "", array(
						"AREA_FILE_SHOW" => "file",
						"PATH" => SITE_DIR . "include/copyright.php"
					), false); ?>
				</div>
			</div>
			<div class="col-md-5 col-sm-6 d-lg-none d-block">
				<div class="map__contacts-item">
					<div class="map__phone">
						<div class="map__contact-icon">
							<img src="/assets/img/icons/phone.svg">
						</div>
						<div class="map__contact-item">
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
					</div>
					<div class="map__email">
						<div class="map__contact-icon">
							<img src="/assets/img/icons/email.svg">
						</div>
						<div class="map__contact-item">
							<? $APPLICATION->IncludeComponent(
								"bitrix:main.include",
								"",
								array(
									"AREA_FILE_SHOW" => "file",
									"PATH" => SITE_DIR . "include/email.php"
								),
								false
							); ?>
						</div>
					</div>

					<div class="map__adress">
						<div class="map__contact-icon">
							<img src="/assets/img/icons/adress.svg">
						</div>
						<div class="map__contact-item">
							<p> <? $APPLICATION->IncludeComponent(
									"bitrix:main.include",
									"",
									array(
										"AREA_FILE_SHOW" => "file",
										"PATH" => SITE_DIR . "include/adress.php"
									),
									false
								); ?> </p>
							<span> <? $APPLICATION->IncludeComponent(
										"bitrix:main.include",
										"",
										array(
											"AREA_FILE_SHOW" => "file",
											"PATH" => SITE_DIR . "include/schedule.php"
										),
										false
									); ?> </span>
						</div>
					</div>
				</div>
			</div>
			<div class="offset-lg-1 col-lg-6 footer__col-2 d-lg-block d-none">
				<div class="title__footer">
				<? $APPLICATION->IncludeComponent(
							"bitrix:main.include",
							"",
							array(
								"AREA_FILE_SHOW" => "file",
								"PATH" => SITE_DIR . "include/catalog_title.php"
							),
							false
						); ?>
				</div>
				<div class="footer__catalog">
			
					<div class="menu__footer">
						<ul>
							<li> <a href="#"> Одежда </a> </li>
							<li> <a href="#"> Посуда </a> </li>
							<li> <a href="#"> Ручки </a> </li>
							<li> <a href="#"> Зонты </a> </li>
							<li> <a href="#"> Сумки </a> </li>
							<li> <a href="#"> Дом </a> </li>
						</ul>
					</div>
					<div class="menu__footer">
						<ul>
							<li> <a href="#"> Отдых </a> </li>
							<li> <a href="#"> Электроника </a> </li>
							<li> <a href="#"> Корпоративные подарки </a> </li>
							<li> <a href="#"> Ежедневники и блокноты </a> </li>
							<li> <a href="#"> Сумки </a> </li>
							<li> <a href="#"> Подарочные наборы </a> </li>
						</ul>
					</div>
					<div class="menu__footer">
						<ul>
							<li> <a href="#"> Упаковка </a> </li>
							<li> <a href="#"> Новогодние подарки </a> </li>
							<li> <a href="#"> Сувениры на заказ </a> </li>
							<li> <a href="#"> Праздники </a> </li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-lg-2 footer__col-3 col-md-2">
				<div class="title__footer">
				<? $APPLICATION->IncludeComponent(
							"bitrix:main.include",
							"",
							array(
								"AREA_FILE_SHOW" => "file",
								"PATH" => SITE_DIR . "include/about_title.php"
							),
							false
						); ?>
				</div>
				<div class="menu__footer">
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
				</div>
			</div>
			<div class="footer__copyright d-lg-none d-block text-sm-center">
			<? $APPLICATION->IncludeComponent("bitrix:main.include", "", array(
						"AREA_FILE_SHOW" => "file",
						"PATH" => SITE_DIR . "include/copyright.php"
					), false); ?>
			</div>
		</div>
	</div>
</footer>




<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<div class="col d-sm-none">
	<? $APPLICATION->IncludeComponent(
		"bitrix:sale.basket.basket.line",
		"bootstrap_v4",
		array(
			"PATH_TO_BASKET" => SITE_DIR . "personal/cart/",
			"PATH_TO_PERSONAL" => SITE_DIR . "personal/",
			"SHOW_PERSONAL_LINK" => "N",
			"SHOW_NUM_PRODUCTS" => "Y",
			"SHOW_TOTAL_PRICE" => "Y",
			"SHOW_PRODUCTS" => "N",
			"POSITION_FIXED" => "Y",
			"POSITION_HORIZONTAL" => "center",
			"POSITION_VERTICAL" => "bottom",
			"SHOW_AUTHOR" => "Y",
			"PATH_TO_REGISTER" => SITE_DIR . "login/",
			"PATH_TO_PROFILE" => SITE_DIR . "personal/"
		),
		false,
		array()
	); ?>
</div>



<script>
	BX.ready(function() {
		var upButton = document.querySelector('[data-role="eshopUpButton"]');
		BX.bind(upButton, "click", function() {
			var windowScroll = BX.GetWindowScrollPos();
			(new BX.easing({
				duration: 500,
				start: {
					scroll: windowScroll.scrollTop
				},
				finish: {
					scroll: 0
				},
				transition: BX.easing.makeEaseOut(BX.easing.transitions.quart),
				step: function(state) {
					window.scrollTo(0, state.scroll);
				},
				complete: function() {}
			})).animate();
		})
	});
</script>
<script src="/local/templates/eshop_bootstrap_v4/assets/js/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<script src="/local/templates/eshop_bootstrap_v4/assets/js/slick.min.js"></script>
<script src="/local/templates/eshop_bootstrap_v4/assets/js/multiple-select.min.js"></script>
<script src="/local/templates/eshop_bootstrap_v4/assets/js/script.js"></script>
</body>

</html>