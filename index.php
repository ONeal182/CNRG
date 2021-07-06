<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Интернет-магазин \"Одежда\"");
?>


    <main>
      <section class="banner__section">
        <div class="banner__overlay">
          <div class="container">
            <h1>Производим  сувениры, подарки и промо-одежду <br> для увеличения продаж в вашем бизнесе </h1>
            <div class="banner__info"><img src="/assets/img/icons/information-c2.svg"><p> Работаем только с юридическими лицами. Минимальный заказ от <? $APPLICATION->IncludeComponent(
							"bitrix:main.include",
							"",
							array(
								"AREA_FILE_SHOW" => "file",
								"PATH" => SITE_DIR . "include/minorder.php"
							),
							false
						); ?> </p> </div>
            <div class="row banner__inner-block">
              <div class="col-lg-7 col-md-6 col-12 col pe-md-0 mb-2 inner-block__col-1">
                <div class="inner-block__overlay">
                  <div class="inner-block__text">
                    <p> 15 000 товаров для продвижения вашего бренда </p>
                    <span> Продукция достойного качества </span>
                  </div>
                </div>
              </div>
              <div class="col-lg-5 col-md-6 col-12 col mb-2 ps-md-2 inner-block__col-2">
               <div class="inner-block__overlay">
                <div class="inner-block__text">
                 <p>  Нужный товар всегда в наличии </p>
                 <span> За счёт отточенной логистики </span>
               </div>
             </div>
           </div>
           <div class="col-lg-6 col-md-6 col-12 col pe-md-0 pb-2 inner-block__col-2">
             <div class="inner-block__overlay">
              <div class="inner-block__text">
                <p> Опыт </p>
                <span>За счёт сотен кейсов и насмотренности </span>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-12 ps-md-2 inner-block__col-1">
           <div class="inner-block__overlay">
            <div class="inner-block__text">
              <p> Выполняем срочные заказы </p>
              <span> Готовый товар у вас на руках за 4 рабочих дня.<br> Сроки прописываем в договоре</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="banner__form-section"> 
 <div class="container">
  <div class="banner__form">
    <div class="row">
      <div class="col-lg-6">
        <p class="banner__form-text fcond"> Узнайте точную стоимость и сроки изготовления заказа. <br>
        Оставьте контакты в форме </p>
      </div>
      <div class="col-lg-6">
        <form class="form banner__form-form"> 
          <input type="tel" class="input input__style-2" placeholder="+ 7 (___)-___-__">
          <input type="submit" class="button button__submit bg-blue-2" value="Рассчитать стоимость"> 
        </form>
      </div>
    </div>
  </div>
</div>
</section>
<section class="trust-logo__section pb-5 bg-gray-2">
  <div class="container">
    <div class="slider__with-arrow">
      <div class="title-with-arrow">
        <h2> Нам доверяют  </h2>
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
      <div class="slider__trust">
        <div> <img src="/assets/img/trust-logo/Logo-1.svg"> </div>
        <div> <img src="/assets/img/trust-logo/Logo-2.svg"> </div>
        <div> <img src="/assets/img/trust-logo/Logo-3.svg"> </div>
        <div> <img src="/assets/img/trust-logo/Logo-4.svg"> </div>
        <div> <img src="/assets/img/trust-logo/Logo-5.svg"> </div>
        <div> <img src="/assets/img/trust-logo/Logo-6.svg"> </div>
        <div> <img src="/assets/img/trust-logo/Logo-7.svg"> </div>
        <div> <img src="/assets/img/trust-logo/Logo-8.svg"> </div>
        <div> <img src="/assets/img/trust-logo/Logo-9.svg"> </div>
        <div> <img src="/assets/img/trust-logo/Logo-10.svg"> </div>
      </div>
    </div>
  </div>
</section>

<section class="catalog-category__section">
  <div class="container">
    <h2> Выберите товар который вас интересует </h2>
    <div class="pills__overlay-mobile">
      <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
          <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Одежда</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Посуда</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Ручки</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Зонты</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Сумки</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Дом</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Отдых</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Электроника</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Награды</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Корпоративные подарки</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Ежедневники и блокноты</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Подарочные наборы</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Упаковка</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Новогодние подарки</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Сувениры на заказ</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Праздники</button>
        </li>
      </ul>
    </div>
    <div class="tab-content" id="pills-tabContent">
      <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
        <div class="row">
          <div class="category__item col-lg-3 col-6 pb-2 pe-1">
            <div class="product__card-overlay">
              <img src="/assets/img/demo/demo-hoodie.jpg" width="100%">
              <div class="product__card-title"> Толстовки </div>
              <div class="product__card-price"> От 23 948 ₽ </div>
              <button class="button bg-blue-1"> Смотреть </button>
            </div>
          </div>
          <div class="category__item col-lg-3 col-6 pb-2 ps-1">
            <div class="product__card-overlay">
              <img src="/assets/img/demo/demo-hoodie.jpg" width="100%">
              <div class="product__card-title"> Толстовки </div>
              <div class="product__card-price"> От 23 948 ₽ </div>
              <button class="button bg-blue-1"> Смотреть </button>
            </div>
          </div>
          <div class="category__item col-lg-3 col-6 pe-1">
            <div class="product__card-overlay">
              <img src="/assets/img/demo/demo-hoodie.jpg" width="100%">
              <div class="product__card-title"> Толстовки </div>
              <div class="product__card-price"> От 23 948 ₽ </div>
              <button class="button bg-blue-1"> Смотреть </button>
            </div>
          </div>
          <div class="category__item col-lg-3 col-6 ps-1">
            <div class="product__card-overlay">
              <img src="/assets/img/demo/demo-hoodie.jpg" width="100%">
              <div class="product__card-title"> Толстовки </div>
              <div class="product__card-price"> От 23 948 ₽ </div>
              <button class="button bg-blue-1"> Смотреть </button>
            </div>
          </div>
        </div>
        <div class="row category__go-more">
          <div class="col-12">
            <a href="#"> Посмотреть все категории “Промо-одежда” <img src="/assets/img/icons/arrow-category.svg"></a>
          </div>
        </div>
      </div>
      <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab"></div>
      <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab"></div>
    </div>
  </div>
</section>

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
        <div class="product product__card ">
          <div class="product__card-overlay">
            <div class="product__img-gallery">
              <div class="product__img-thumbs">
                <div class="img-thumbs" data-img="/assets/img/demo/demo-product-1.jpg" style="background-image: url(/assets/img/demo/demo-product-1.jpg);"> </div>
                <div class="img-thumbs" data-img="/assets/img/demo/demo-product-2.jpg" style="background-image: url(/assets/img/demo/demo-product-2.jpg);"> </div>
                <div class="img-thumbs" data-img="/assets/img/demo/demo-product-3.jpg" style="background-image: url(/assets/img/demo/demo-product-3.jpg);"> </div>
                <div class="img-thumbs" data-img="/assets/img/demo/demo-product-4.jpg" style="background-image: url(/assets/img/demo/demo-product-4.jpg);"> </div>
              </div>
              <div class="product__img-grand">
                <div class="img-grand" style="background-image: url(/assets/img/demo/demo-product.jpg)">
                </div> 
              </div>
            </div>
            <div class="product__card-title"> Свитшот женский Kulonga Raeglan Bicolor, серый меланж с черным </div>
            <div class="proudct__card-atribute">
              <div class="card-atribute__item"> Артикул: 31138.31 </div>
              <div class="card-atribute__item"> Всего доступно: 51 </div>
              <div class="card-atribute__item"> Бренд: Unit </div>
            </div>
            <div class="proudct__card-cart">
              <div class="product__card-price"> От 23 948 ₽ </div> 
              <div class="product__card-button"> <button class="button bg-blue-1"><img src="/assets/img/icons/cart-button.svg"> В корзину </button> </div>
            </div>
          </div>
        </div>
        <div class="product product__card ">
          <div class="product__card-overlay">
            <div class="product__img-gallery">
              <div class="product__img-thumbs">
                <div class="img-thumbs" data-img="/assets/img/demo/demo-product-1.jpg" style="background-image: url(/assets/img/demo/demo-product-1.jpg);"> </div>
                <div class="img-thumbs" data-img="/assets/img/demo/demo-product-2.jpg" style="background-image: url(/assets/img/demo/demo-product-2.jpg);"> </div>
                <div class="img-thumbs" data-img="/assets/img/demo/demo-product-3.jpg" style="background-image: url(/assets/img/demo/demo-product-3.jpg);"> </div>
                <div class="img-thumbs" data-img="/assets/img/demo/demo-product-4.jpg" style="background-image: url(/assets/img/demo/demo-product-4.jpg);"> </div>
              </div>
              <div class="product__img-grand">
                <div class="img-grand" style="background-image: url(/assets/img/demo/demo-product.jpg)">
                </div> 
              </div>
            </div>
            <div class="product__card-title"> Свитшот женский Kulonga Raeglan Bicolor, серый меланж с черным </div>
            <div class="proudct__card-atribute">
              <div class="card-atribute__item"> Артикул: 31138.31 </div>
              <div class="card-atribute__item"> Всего доступно: 51 </div>
              <div class="card-atribute__item"> Бренд: Unit </div>
            </div>
            <div class="proudct__card-cart">
              <div class="product__card-price"> От 23 948 ₽ </div> 
              <div class="product__card-button"> <button class="button bg-blue-1"><img src="/assets/img/icons/cart-button.svg"> В корзину </button> </div>
            </div>
          </div>
        </div>
        <div class="product product__card ">
          <div class="product__card-overlay">
            <div class="product__img-gallery">
              <div class="product__img-thumbs">
                <div class="img-thumbs" data-img="/assets/img/demo/demo-product-1.jpg" style="background-image: url(/assets/img/demo/demo-product-1.jpg);"> </div>
                <div class="img-thumbs" data-img="/assets/img/demo/demo-product-2.jpg" style="background-image: url(/assets/img/demo/demo-product-2.jpg);"> </div>
                <div class="img-thumbs" data-img="/assets/img/demo/demo-product-3.jpg" style="background-image: url(/assets/img/demo/demo-product-3.jpg);"> </div>
                <div class="img-thumbs" data-img="/assets/img/demo/demo-product-4.jpg" style="background-image: url(/assets/img/demo/demo-product-4.jpg);"> </div>
              </div>
              <div class="product__img-grand">
                <div class="img-grand" style="background-image: url(/assets/img/demo/demo-product.jpg)">
                </div> 
              </div>
            </div>
            <div class="product__card-title"> Свитшот женский Kulonga Raeglan Bicolor, серый меланж с черным </div>
            <div class="proudct__card-atribute">
              <div class="card-atribute__item"> Артикул: 31138.31 </div>
              <div class="card-atribute__item"> Всего доступно: 51 </div>
              <div class="card-atribute__item"> Бренд: Unit </div>
            </div>
            <div class="proudct__card-cart">
              <div class="product__card-price"> От 23 948 ₽ </div> 
              <div class="product__card-button"> <button class="button bg-blue-1"><img src="/assets/img/icons/cart-button.svg"> В корзину </button> </div>
            </div>
          </div>
        </div>
        <div class="product product__card ">
          <div class="product__card-overlay">
            <div class="product__img-gallery">
              <div class="product__img-thumbs">
                <div class="img-thumbs" data-img="/assets/img/demo/demo-product-1.jpg" style="background-image: url(/assets/img/demo/demo-product-1.jpg);"> </div>
                <div class="img-thumbs" data-img="/assets/img/demo/demo-product-2.jpg" style="background-image: url(/assets/img/demo/demo-product-2.jpg);"> </div>
                <div class="img-thumbs" data-img="/assets/img/demo/demo-product-3.jpg" style="background-image: url(/assets/img/demo/demo-product-3.jpg);"> </div>
                <div class="img-thumbs" data-img="/assets/img/demo/demo-product-4.jpg" style="background-image: url(/assets/img/demo/demo-product-4.jpg);"> </div>
              </div>
              <div class="product__img-grand">
                <div class="img-grand" style="background-image: url(/assets/img/demo/demo-product.jpg)">
                </div> 
              </div>
            </div>
            <div class="product__card-title"> Свитшот женский Kulonga Raeglan Bicolor, серый меланж с черным </div>
            <div class="proudct__card-atribute">
              <div class="card-atribute__item"> Артикул: 31138.31 </div>
              <div class="card-atribute__item"> Всего доступно: 51 </div>
              <div class="card-atribute__item"> Бренд: Unit </div>
            </div>
            <div class="proudct__card-cart">
              <div class="product__card-price"> От 23 948 ₽ </div> 
              <div class="product__card-button"> <button class="button bg-blue-1"><img src="/assets/img/icons/cart-button.svg"> В корзину </button> </div>
            </div>
          </div>
        </div>
        <div class="product product__card ">
          <div class="product__card-overlay">
            <div class="product__img-gallery">
              <div class="product__img-thumbs">
                <div class="img-thumbs" data-img="/assets/img/demo/demo-product-1.jpg" style="background-image: url(/assets/img/demo/demo-product-1.jpg);"> </div>
                <div class="img-thumbs" data-img="/assets/img/demo/demo-product-2.jpg" style="background-image: url(/assets/img/demo/demo-product-2.jpg);"> </div>
                <div class="img-thumbs" data-img="/assets/img/demo/demo-product-3.jpg" style="background-image: url(/assets/img/demo/demo-product-3.jpg);"> </div>
                <div class="img-thumbs" data-img="/assets/img/demo/demo-product-4.jpg" style="background-image: url(/assets/img/demo/demo-product-4.jpg);"> </div>
              </div>
              <div class="product__img-grand">
                <div class="img-grand" style="background-image: url(/assets/img/demo/demo-product.jpg)">
                </div> 
              </div>
            </div>
            <div class="product__card-title"> Свитшот женский Kulonga Raeglan Bicolor, серый меланж с черным </div>
            <div class="proudct__card-atribute">
              <div class="card-atribute__item"> Артикул: 31138.31 </div>
              <div class="card-atribute__item"> Всего доступно: 51 </div>
              <div class="card-atribute__item"> Бренд: Unit </div>
            </div>
            <div class="proudct__card-cart">
              <div class="product__card-price"> От 23 948 ₽ </div> 
              <div class="product__card-button"> <button class="button bg-blue-1"><img src="/assets/img/icons/cart-button.svg"> В корзину </button> </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>
<?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"collections", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "8",
		"IBLOCK_TYPE" => "content",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "20",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "CATEGORY",
		),
		"SET_BROWSER_TITLE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N",
		"COMPONENT_TEMPLATE" => "collections"
	),
	false
);?>
<section class="hits__section">
<div class="container">
<div class="title-with-arrow">
      <h2> Хиты продаж </h2>
      <div class="slider__arrow d-flex d-lg-none">
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
<div class="slider__product-hit row g-3">
        <div class="product product__card col-lg-3">
          <div class="product__card-overlay">
            <div class="product__img-gallery">
              <div class="product__img-thumbs">
                <div class="img-thumbs" data-img="/assets/img/demo/demo-product-1.jpg" style="background-image: url(/assets/img/demo/demo-product-1.jpg);"> </div>
                <div class="img-thumbs" data-img="/assets/img/demo/demo-product-2.jpg" style="background-image: url(/assets/img/demo/demo-product-2.jpg);"> </div>
                <div class="img-thumbs" data-img="/assets/img/demo/demo-product-3.jpg" style="background-image: url(/assets/img/demo/demo-product-3.jpg);"> </div>
                <div class="img-thumbs" data-img="/assets/img/demo/demo-product-4.jpg" style="background-image: url(/assets/img/demo/demo-product-4.jpg);"> </div>
              </div>
              <div class="product__img-grand">
                <div class="img-grand" style="background-image: url(/assets/img/demo/demo-product.jpg)">
                </div> 
              </div>
            </div>
            <div class="product__card-title"> Свитшот женский Kulonga Raeglan Bicolor, серый меланж с черным </div>
            <div class="proudct__card-atribute">
              <div class="card-atribute__item"> Артикул: 31138.31 </div>
              <div class="card-atribute__item"> Всего доступно: 51 </div>
              <div class="card-atribute__item"> Бренд: Unit </div>
            </div>
            <div class="proudct__card-cart">
              <div class="product__card-price"> От 23 948 ₽ </div> 
              <div class="product__card-button"> <button class="button bg-blue-1"><img src="/assets/img/icons/cart-button.svg"> В корзину </button> </div>
            </div>
          </div>
        </div>
        <div class="product product__card col-lg-3">
          <div class="product__card-overlay">
            <div class="product__img-gallery">
              <div class="product__img-thumbs">
                <div class="img-thumbs" data-img="/assets/img/demo/demo-product-1.jpg" style="background-image: url(/assets/img/demo/demo-product-1.jpg);"> </div>
                <div class="img-thumbs" data-img="/assets/img/demo/demo-product-2.jpg" style="background-image: url(/assets/img/demo/demo-product-2.jpg);"> </div>
                <div class="img-thumbs" data-img="/assets/img/demo/demo-product-3.jpg" style="background-image: url(/assets/img/demo/demo-product-3.jpg);"> </div>
                <div class="img-thumbs" data-img="/assets/img/demo/demo-product-4.jpg" style="background-image: url(/assets/img/demo/demo-product-4.jpg);"> </div>
              </div>
              <div class="product__img-grand">
                <div class="img-grand" style="background-image: url(/assets/img/demo/demo-product.jpg)">
                </div> 
              </div>
            </div>
            <div class="product__card-title"> Свитшот женский Kulonga Raeglan Bicolor, серый меланж с черным </div>
            <div class="proudct__card-atribute">
              <div class="card-atribute__item"> Артикул: 31138.31 </div>
              <div class="card-atribute__item"> Всего доступно: 51 </div>
              <div class="card-atribute__item"> Бренд: Unit </div>
            </div>
            <div class="proudct__card-cart">
              <div class="product__card-price"> От 23 948 ₽ </div> 
              <div class="product__card-button"> <button class="button bg-blue-1"><img src="/assets/img/icons/cart-button.svg"> В корзину </button> </div>
            </div>
          </div>
        </div>
        <div class="product product__card col-lg-3">
          <div class="product__card-overlay">
            <div class="product__img-gallery">
              <div class="product__img-thumbs">
                <div class="img-thumbs" data-img="/assets/img/demo/demo-product-1.jpg" style="background-image: url(/assets/img/demo/demo-product-1.jpg);"> </div>
                <div class="img-thumbs" data-img="/assets/img/demo/demo-product-2.jpg" style="background-image: url(/assets/img/demo/demo-product-2.jpg);"> </div>
                <div class="img-thumbs" data-img="/assets/img/demo/demo-product-3.jpg" style="background-image: url(/assets/img/demo/demo-product-3.jpg);"> </div>
                <div class="img-thumbs" data-img="/assets/img/demo/demo-product-4.jpg" style="background-image: url(/assets/img/demo/demo-product-4.jpg);"> </div>
              </div>
              <div class="product__img-grand">
                <div class="img-grand" style="background-image: url(/assets/img/demo/demo-product.jpg)">
                </div> 
              </div>
            </div>
            <div class="product__card-title"> Свитшот женский Kulonga Raeglan Bicolor, серый меланж с черным </div>
            <div class="proudct__card-atribute">
              <div class="card-atribute__item"> Артикул: 31138.31 </div>
              <div class="card-atribute__item"> Всего доступно: 51 </div>
              <div class="card-atribute__item"> Бренд: Unit </div>
            </div>
            <div class="proudct__card-cart">
              <div class="product__card-price"> От 23 948 ₽ </div> 
              <div class="product__card-button"> <button class="button bg-blue-1"><img src="/assets/img/icons/cart-button.svg"> В корзину </button> </div>
            </div>
          </div>
        </div>
        <div class="product product__card col-lg-3">
          <div class="product__card-overlay">
            <div class="product__img-gallery">
              <div class="product__img-thumbs">
                <div class="img-thumbs" data-img="/assets/img/demo/demo-product-1.jpg" style="background-image: url(/assets/img/demo/demo-product-1.jpg);"> </div>
                <div class="img-thumbs" data-img="/assets/img/demo/demo-product-2.jpg" style="background-image: url(/assets/img/demo/demo-product-2.jpg);"> </div>
                <div class="img-thumbs" data-img="/assets/img/demo/demo-product-3.jpg" style="background-image: url(/assets/img/demo/demo-product-3.jpg);"> </div>
                <div class="img-thumbs" data-img="/assets/img/demo/demo-product-4.jpg" style="background-image: url(/assets/img/demo/demo-product-4.jpg);"> </div>
              </div>
              <div class="product__img-grand">
                <div class="img-grand" style="background-image: url(/assets/img/demo/demo-product.jpg)">
                </div> 
              </div>
            </div>
            <div class="product__card-title"> Свитшот женский Kulonga Raeglan Bicolor, серый меланж с черным </div>
            <div class="proudct__card-atribute">
              <div class="card-atribute__item"> Артикул: 31138.31 </div>
              <div class="card-atribute__item"> Всего доступно: 51 </div>
              <div class="card-atribute__item"> Бренд: Unit </div>
            </div>
            <div class="proudct__card-cart">
              <div class="product__card-price"> От 23 948 ₽ </div> 
              <div class="product__card-button"> <button class="button bg-blue-1"><img src="/assets/img/icons/cart-button.svg"> В корзину </button> </div>
            </div>
          </div>
        </div>
        <div class="product product__card col-lg-3">
          <div class="product__card-overlay">
            <div class="product__img-gallery">
              <div class="product__img-thumbs">
                <div class="img-thumbs" data-img="/assets/img/demo/demo-product-1.jpg" style="background-image: url(/assets/img/demo/demo-product-1.jpg);"> </div>
                <div class="img-thumbs" data-img="/assets/img/demo/demo-product-2.jpg" style="background-image: url(/assets/img/demo/demo-product-2.jpg);"> </div>
                <div class="img-thumbs" data-img="/assets/img/demo/demo-product-3.jpg" style="background-image: url(/assets/img/demo/demo-product-3.jpg);"> </div>
                <div class="img-thumbs" data-img="/assets/img/demo/demo-product-4.jpg" style="background-image: url(/assets/img/demo/demo-product-4.jpg);"> </div>
              </div>
              <div class="product__img-grand">
                <div class="img-grand" style="background-image: url(/assets/img/demo/demo-product.jpg)">
                </div> 
              </div>
            </div>
            <div class="product__card-title"> Свитшот женский Kulonga Raeglan Bicolor, серый меланж с черным </div>
            <div class="proudct__card-atribute">
              <div class="card-atribute__item"> Артикул: 31138.31 </div>
              <div class="card-atribute__item"> Всего доступно: 51 </div>
              <div class="card-atribute__item"> Бренд: Unit </div>
            </div>
            <div class="proudct__card-cart">
              <div class="product__card-price"> От 23 948 ₽ </div> 
              <div class="product__card-button"> <button class="button bg-blue-1"><img src="/assets/img/icons/cart-button.svg"> В корзину </button> </div>
            </div>
          </div>
        </div>
        <div class="product product__card col-lg-3">
          <div class="product__card-overlay">
            <div class="product__img-gallery">
              <div class="product__img-thumbs">
                <div class="img-thumbs" data-img="/assets/img/demo/demo-product-1.jpg" style="background-image: url(/assets/img/demo/demo-product-1.jpg);"> </div>
                <div class="img-thumbs" data-img="/assets/img/demo/demo-product-2.jpg" style="background-image: url(/assets/img/demo/demo-product-2.jpg);"> </div>
                <div class="img-thumbs" data-img="/assets/img/demo/demo-product-3.jpg" style="background-image: url(/assets/img/demo/demo-product-3.jpg);"> </div>
                <div class="img-thumbs" data-img="/assets/img/demo/demo-product-4.jpg" style="background-image: url(/assets/img/demo/demo-product-4.jpg);"> </div>
              </div>
              <div class="product__img-grand">
                <div class="img-grand" style="background-image: url(/assets/img/demo/demo-product.jpg)">
                </div> 
              </div>
            </div>
            <div class="product__card-title"> Свитшот женский Kulonga Raeglan Bicolor, серый меланж с черным </div>
            <div class="proudct__card-atribute">
              <div class="card-atribute__item"> Артикул: 31138.31 </div>
              <div class="card-atribute__item"> Всего доступно: 51 </div>
              <div class="card-atribute__item"> Бренд: Unit </div>
            </div>
            <div class="proudct__card-cart">
              <div class="product__card-price"> От 23 948 ₽ </div> 
              <div class="product__card-button"> <button class="button bg-blue-1"><img src="/assets/img/icons/cart-button.svg"> В корзину </button> </div>
            </div>
          </div>
        </div>
        <div class="product product__card col-lg-3">
          <div class="product__card-overlay">
            <div class="product__img-gallery">
              <div class="product__img-thumbs">
                <div class="img-thumbs" data-img="/assets/img/demo/demo-product-1.jpg" style="background-image: url(/assets/img/demo/demo-product-1.jpg);"> </div>
                <div class="img-thumbs" data-img="/assets/img/demo/demo-product-2.jpg" style="background-image: url(/assets/img/demo/demo-product-2.jpg);"> </div>
                <div class="img-thumbs" data-img="/assets/img/demo/demo-product-3.jpg" style="background-image: url(/assets/img/demo/demo-product-3.jpg);"> </div>
                <div class="img-thumbs" data-img="/assets/img/demo/demo-product-4.jpg" style="background-image: url(/assets/img/demo/demo-product-4.jpg);"> </div>
              </div>
              <div class="product__img-grand">
                <div class="img-grand" style="background-image: url(/assets/img/demo/demo-product.jpg)">
                </div> 
              </div>
            </div>
            <div class="product__card-title"> Свитшот женский Kulonga Raeglan Bicolor, серый меланж с черным </div>
            <div class="proudct__card-atribute">
              <div class="card-atribute__item"> Артикул: 31138.31 </div>
              <div class="card-atribute__item"> Всего доступно: 51 </div>
              <div class="card-atribute__item"> Бренд: Unit </div>
            </div>
            <div class="proudct__card-cart">
              <div class="product__card-price"> От 23 948 ₽ </div> 
              <div class="product__card-button"> <button class="button bg-blue-1"><img src="/assets/img/icons/cart-button.svg"> В корзину </button> </div>
            </div>
          </div>
        </div>
        <div class="product product__card col-lg-3">
          <div class="product__card-overlay">
            <div class="product__img-gallery">
              <div class="product__img-thumbs">
                <div class="img-thumbs" data-img="/assets/img/demo/demo-product-1.jpg" style="background-image: url(/assets/img/demo/demo-product-1.jpg);"> </div>
                <div class="img-thumbs" data-img="/assets/img/demo/demo-product-2.jpg" style="background-image: url(/assets/img/demo/demo-product-2.jpg);"> </div>
                <div class="img-thumbs" data-img="/assets/img/demo/demo-product-3.jpg" style="background-image: url(/assets/img/demo/demo-product-3.jpg);"> </div>
                <div class="img-thumbs" data-img="/assets/img/demo/demo-product-4.jpg" style="background-image: url(/assets/img/demo/demo-product-4.jpg);"> </div>
              </div>
              <div class="product__img-grand">
                <div class="img-grand" style="background-image: url(/assets/img/demo/demo-product.jpg)">
                </div> 
              </div>
            </div>
            <div class="product__card-title"> Свитшот женский Kulonga Raeglan Bicolor, серый меланж с черным </div>
            <div class="proudct__card-atribute">
              <div class="card-atribute__item"> Артикул: 31138.31 </div>
              <div class="card-atribute__item"> Всего доступно: 51 </div>
              <div class="card-atribute__item"> Бренд: Unit </div>
            </div>
            <div class="proudct__card-cart">
              <div class="product__card-price"> От 23 948 ₽ </div> 
              <div class="product__card-button"> <button class="button bg-blue-1"><img src="/assets/img/icons/cart-button.svg"> В корзину </button> </div>
            </div>
          </div>
        </div>
   
      </div>
</div>
</section>
<? $APPLICATION->IncludeComponent(
							"bitrix:main.include",
							"",
							array(
								"AREA_FILE_SHOW" => "file",
								"PATH" => SITE_DIR . "include/foz-section.php"
							),
							false
						); ?> 
<section class="portfolio__section">
  <div class="container">
    <div class="slider__with-arrow">
      <div class="col-lg-6">
        <h2> Компания CNRG - надёжный партнёр с 15 летним опытом  </h2>
      </div>
      <div class="title-with-arrow">
        <div class="col-lg-5">
          <p> Отлаженная система логистики и доставки позволяет быть уверенным в том, что заказ будет в срок и с оговоренным качеством товара. Никаких сюрпризов </p>
        </div>
        <div class="slider__arrow ">
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
    </div>
  </div>
  <div class="portfolio__slider">
    <div class="portfolio__item" >
      <div class="portfolio__item-block" style="background-image: url(/assets/img/portfolio/nexign.jpg);">
        <div class="portfolio__item-overlay">
          <img src="/assets/img/portfolio/logo-nexign.png" class="portfolio__item-img">
          <div class="portfolio__item-descript">
            Компания по разработке программного обеспечения. Сувенирная продукция
          </div>
        </div>
      </div>
    </div>
    <div class="portfolio__item" >
      <div class="portfolio__item-block" style="background-image: url(/assets/img/portfolio/nexign.jpg);">
        <div class="portfolio__item-overlay">
          <img src="/assets/img/portfolio/logo-nexign.png" class="portfolio__item-img">
          <div class="portfolio__item-descript">
            Компания по разработке программного обеспечения. Сувенирная продукция
          </div>
        </div>
      </div>
    </div>
    <div class="portfolio__item" >
      <div class="portfolio__item-block" style="background-image: url(/assets/img/portfolio/nexign.jpg);">
        <div class="portfolio__item-overlay">
          <img src="/assets/img/portfolio/logo-nexign.png" class="portfolio__item-img">
          <div class="portfolio__item-descript">
            Компания по разработке программного обеспечения. Сувенирная продукция
          </div>
        </div>
      </div>
    </div>
    <div class="portfolio__item" >
      <div class="portfolio__item-block" style="background-image: url(/assets/img/portfolio/nexign.jpg);">
        <div class="portfolio__item-overlay">
          <img src="/assets/img/portfolio/logo-nexign.png" class="portfolio__item-img">
          <div class="portfolio__item-descript">
            Компания по разработке программного обеспечения. Сувенирная продукция
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="print__section">
  <div class="row print__row-overlay"> 
    <div class="col-lg-6 colbg"> 
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-lg-6 order-2">
        <div class="print__arrow">
          <div class="slider__arrow ">
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
      </div>
      <div class="offset-lg-1 col-lg-5 order-1 order-lg-2">
        <h2 class="text-lg-end"> Методы печати, которые мы используем </h2>
        <p class="text-lg-end"> В описании товаров на сайте вы встретите коды и краткие наименования методов печати логотипов. Вот их более подробные расшифровки с описанием. </p>
      </div>
    </div>
  </div>
  <div class="slider__print">
    <div class="slider__print-item">
      <div class="print__item-overlay" style="background-image: url(/assets/img/demo/demo-print-method.jpg);">
        <p> Шелкография </p>
      </div>
    </div>
    <div class="slider__print-item">
      <div class="print__item-overlay" style="background-image: url(/assets/img/demo/demo-print-method.jpg);">
        <p> Шелкография </p>
      </div>
    </div>
    <div class="slider__print-item">
      <div class="print__item-overlay" style="background-image: url(/assets/img/demo/demo-print-method.jpg);">
        <p> Шелкография </p>
      </div>
    </div>
    <div class="slider__print-item">
      <div class="print__item-overlay" style="background-image: url(/assets/img/demo/demo-print-method.jpg);">
        <p> Шелкография </p>
      </div>
    </div>
    <div class="slider__print-item">
      <div class="print__item-overlay" style="background-image: url(/assets/img/demo/demo-print-method.jpg);">
        <p> Шелкография </p>
      </div>
    </div>
    <div class="slider__print-item">
      <div class="print__item-overlay" style="background-image: url(/assets/img/demo/demo-print-method.jpg);">
        <p> Шелкография </p>
      </div>
    </div>
    <div class="slider__print-item">
      <div class="print__item-overlay" style="background-image: url(/assets/img/demo/demo-print-method.jpg);">
        <p> Шелкография </p>
      </div>
    </div>

  </div>
</section>
<?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"reviews", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "7",
		"IBLOCK_TYPE" => "content",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "20",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(
			0 => "REVIEWDATE",
			1 => "",
		),
		"SET_BROWSER_TITLE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N",
		"COMPONENT_TEMPLATE" => "reviews",
		"TEMPLATE_THEME" => "blue",
		"MEDIA_PROPERTY" => "",
		"SLIDER_PROPERTY" => "",
		"SEARCH_PAGE" => "/search/",
		"USE_RATING" => "N",
		"USE_SHARE" => "N"
	),
	false
);?>
<section class="foz2__section">
  <div class="container">
    <div class="row">
      <div class="col-xl-8">
        <h2> Получите консультацию </h2>
        <p> Мы перезвоним и подробно ответим на все вопросы. Подберём решение под ваш бюджет </p>
        <?$APPLICATION->IncludeComponent(
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
		"WEB_FORM_ID" => "1",
		"VARIABLE_ALIASES" => array(
			"action" => "action",
		)
	),
	false
);?>
      </div>
    </div>
  </div>
</section>
<section class="news__section">
  <div class="container">
  <div class="title-with-arrow">
	<h2> Новости </h2>
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
  <?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"news_homepage", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => $_REQUEST["ID"],
		"IBLOCK_TYPE" => "news",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MEDIA_PROPERTY" => "",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "20",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"SEARCH_PAGE" => "/search/",
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SLIDER_PROPERTY" => "",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N",
		"TEMPLATE_THEME" => "blue",
		"USE_RATING" => "N",
		"USE_SHARE" => "N",
		"COMPONENT_TEMPLATE" => "news_homepage"
	),
	false
);?>


</div>
</section>
<section class="map__section">
  <div class="map__overlay">
    <div class="map__contacts-block">
      <div class="container">
        <div class="map__contacts">
          <h2> Контакты </h2>
          <div class="map__contacts-item">
            <div class="map__phone">
              <div class="map__contact-icon">
                <img src="/assets/img/icons/phone.svg">
              </div>
              <div class="map__contact-item">
                <a href="tel:+7 (812) 309-88-11" > +7 (812) 309-88-11 </a>
                <a href="#" class="link" data-bs-toggle="modal" data-bs-target="#callme"> Перезвоните мне </a>
              </div> 
            </div>
            <div class="map__email">
              <div class="map__contact-icon">
                <img src="/assets/img/icons/email.svg">
              </div>
              <div class="map__contact-item">
                <a href="mailto:gifts@cnrg.pro" >gifts@cnrg.pro</a>
              </div>
            </div>

            <div class="map__adress">
             <div class="map__contact-icon">
              <img src="/assets/img/icons/adress.svg">
            </div>
            <div class="map__contact-item">
              <p> 194044, г. Санкт-Петербург, Пироговская наб., 21, <br>
              БЦ "Нобель", офис 30 </p>
              <span> с 10:00 до 18:00, пн-пт. </span>
            </div>
          </div>
        </div>
        <div class="map__social-block">
          <p> Подписывайтесь на наши соцсети: </p> 
          <div class="map__social">
            <a href="#" class="social__item"><img src="/assets/img/icons/facebook.svg"></a>
            <a href="#" class="social__item"><img src="/assets/img/icons/vk.svg"></a>
            <a href="#" class="social__item"><img src="/assets/img/icons/instagram.svg"></a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A161c938017d5229b07b33b3cf9f70675227807bc4085e3aecd26b3903fc5f2dc&amp;width=100%25&amp;height=657&amp;lang=ru_RU&amp;scroll=true"></script>
</div>
</section>

 <?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
</body>
</html>