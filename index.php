<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Интернет-магазин \"Одежда\"");
?>


    <main>
      <section class="banner__section">
        <div class="banner__overlay">
          <div class="container">
            <h1>Производим  сувениры, подарки и<br> промо-одежду для увеличения продаж <br> в вашем бизнесе </h1>
            <div class="banner__info"><img src="/assets/img/icons/information-c2.svg"><p> Работаем только с юридическими лицами. Минимальный заказ от 20 000 руб. </p> </div>
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
                <p> Нам доверяют </p>
                <span> Europa Plus, Royal Canin, Yota, Норникель, Lavazza, Nexign</span>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-12 ps-md-2 inner-block__col-1">
           <div class="inner-block__overlay">
            <div class="inner-block__text">
              <p> Умеем выполнять срочные заказы </p>
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
<section class="collections__section">
  <div class="container">
   <div class="slider__with-arrow">
    <div class="title-with-arrow">
      <h2> Подборки товаров </h2>
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
    <div class="d-none d-lg-block">
      <div class="row">
        <div  class="col-lg-4">
          <img src="/assets/img/demo/demo-podborka-1.jpg" class="collections__img" width="100%">
          <div class="collections__title"> 8 марта </div>
          <div class="collections__button"> <button class="button bg-blue-1">Смотреть </button> </div>
        </div>
        <div class="col-lg-4">
          <img src="/assets/img/demo/demo-podborka-2.jpg" class="collections__img" width="100%">
          <div class="collections__title"> 23 февраля  </div>
          <div class="collections__button"> <button class="button bg-blue-1">Смотреть </button> </div>
        </div>
        <div class="col-lg-4">
          <img src="/assets/img/demo/demo-podborka-3.jpg" class="collections__img" width="100%">
          <div class="collections__title"> Эко-товары </div>
          <div class="collections__button"> <button class="button bg-blue-1">Смотреть </button> </div>
        </div>
      </div>
    </div>
    <div class="d-block d-lg-none">
      <div class="collection__slider">
        <div class="collection__slider-item">
          <img src="/assets/img/demo/demo-podborka-1.jpg" class="collections__img" width="100%">
          <div class="collections__title"> 8 марта </div>
          <div class="collections__button"> <button class="button bg-blue-1">Смотреть </button> </div>
        </div>
        <div class="collection__slider-item">
          <img src="/assets/img/demo/demo-podborka-2.jpg" class="collections__img" width="100%">
          <div class="collections__title"> 23 февраля </div>
          <div class="collections__button"> <button class="button bg-blue-1">Смотреть </button> </div>
        </div>
        <div class="collection__slider-item">
          <img src="/assets/img/demo/demo-podborka-3.jpg" class="collections__img" width="100%">
          <div class="collections__title"> Эко-товары </div>
          <div class="collections__button"> <button class="button bg-blue-1">Смотреть </button> </div>
        </div>
      </div>
    </div>
    <div class="slider__dots d-block d-lg-none"></div>
  </div>
</div>
</section>
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
<section class="foz__section">
  <div class="container">
    <div class="overlay__foz">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <div class="foz__title"> Получите точный расчет стоимости&nbsp;и&nbsp;сроки на ваш заказ </div> 
        </div>
        <div class="col-lg-6">
         <div class="foz__description"> Не знаете какой товар выбрать под задачи? Что нужно учитывать в Вашей сфере, чтобы достичь результата? во сколько всё в итоге обойдётся? </div>
       </div>
     </div>
   </div>
   <div class="row foz__row">
    <div class="col-12">
      <div class="foz__title2"> Оставьте заявку, чтобы получить: </div>
    </div>
    <div class="col-lg-4 foz__item">
      <div class="foz__img"><img src="/assets/img/foz-1.png"></div>
      <div class="foz__text-item">
        Стоимость и сроки <br> готового заказа
      </div>
    </div>
    <div class="col-lg-4 foz__item">
      <div class="foz__img"><img src="/assets/img/foz-2.png"></div>
      <div class="foz__text-item">
        Помощь с подготовкой <br>дизайн-макета для печати
      </div>
    </div>
    <div class="col-lg-4 foz__item">
      <div class="foz__img"><img src="/assets/img/foz-3.png"></div>
      <div class="foz__text-item">
        Индивидуальное коммерческое<br> предложение под ваш бюджет
      </div>
    </div>
    <div class="col-12 foz__button"> 
      <button class="button bg-gray" data-bs-toggle="modal" data-bs-target="#foz">Оставить заявку и получить все бонусы</button>
    </div>
  </div>
</div>
</section>
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
<section class="reviews__section">
  <div class="container">
   <div class="slider__with-arrow">
    <div class="title-with-arrow">
      <h2> Отзывы  </h2>
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
  </div>
  <div class="reviews__slider">
    <div class="reviews__item">
      <div class="reviews__overlay">
        <div class="reviews__img-block">
          <img src="/assets/img/demo/demo-reviews-1.jpg">
          <div class="reviews__img-name">
            <p> Юрий Щербаков </p>
            <span> 20 декабря, 2019 </span>
          </div>
        </div>
        <div class="reviews__text"> Давно работаем, качество работы всегда устраивало, заказываю 
          не  первый раз различную полиграфию и сувенирку. Мне нравится, что не нужно нанимать дополнительных людей для создания дизайна, если не могу выбрать 
        подходящий шаблон или возникла сложная идея - просто заказываю дизайн и достаточно быстро получаю макет на утверждение. </div>
      </div>
    </div>
    <div class="reviews__item">
      <div class="reviews__overlay">
        <div class="reviews__img-block">
          <img src="/assets/img/demo/demo-reviews-1.jpg">
          <div class="reviews__img-name">
            <p> Юрий Щербаков </p>
            <span> 20 декабря, 2019 </span>
          </div>
        </div>
        <div class="reviews__text"> Давно работаем, качество работы всегда устраивало, заказываю 
          не  первый раз различную полиграфию и сувенирку. Мне нравится, что не нужно нанимать дополнительных людей для создания дизайна, если не могу выбрать 
        подходящий шаблон или возникла сложная идея - просто заказываю дизайн и достаточно быстро получаю макет на утверждение. </div>
      </div>
    </div>
    <div class="reviews__item">
      <div class="reviews__overlay">
        <div class="reviews__img-block">
          <img src="/assets/img/demo/demo-reviews-1.jpg">
          <div class="reviews__img-name">
            <p> Юрий Щербаков </p>
            <span> 20 декабря, 2019 </span>
          </div>
        </div>
        <div class="reviews__text"> Давно работаем, качество работы всегда устраивало, заказываю 
          не  первый раз различную полиграфию и сувенирку. Мне нравится, что не нужно нанимать дополнительных людей для создания дизайна, если не могу выбрать 
        подходящий шаблон или возникла сложная идея - просто заказываю дизайн и достаточно быстро получаю макет на утверждение. </div>
      </div>
    </div>
    <div class="reviews__item">
      <div class="reviews__overlay">
        <div class="reviews__img-block">
          <img src="/assets/img/demo/demo-reviews-1.jpg">
          <div class="reviews__img-name">
            <p> Юрий Щербаков </p>
            <span> 20 декабря, 2019 </span>
          </div>
        </div>
        <div class="reviews__text"> Давно работаем, качество работы всегда устраивало, заказываю 
          не  первый раз различную полиграфию и сувенирку. Мне нравится, что не нужно нанимать дополнительных людей для создания дизайна, если не могу выбрать 
        подходящий шаблон или возникла сложная идея - просто заказываю дизайн и достаточно быстро получаю макет на утверждение. </div>
      </div>
    </div>
  </div>
</section>
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
    <h2> Новости  </h2>
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
  <!--end row-->
<? $APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	array(
		"AREA_FILE_SHOW" => "sect",
		"AREA_FILE_SUFFIX" => "bottom",
		"AREA_FILE_RECURSIVE" => "N",
		"EDIT_MODE" => "html",
	),
	false,
	array('HIDE_ICONS' => 'Y')
); ?>

  <div class="news__slider">
    <a href="#" class="news__item">
      <div class="news__img" style="background-image: url(/assets/img/demo/demonews.jpg)">
      </div>
      <div class="news__overlay">
        <div class="news__meta"> <p> 10.01.2020 </p> <span>|</span> <p>Новости</p></div>
        <div class="news__title"> Вниманию новых клиентов </div>
        <p class="news__text"> Уважаемые клиенты! Доводим до вашего сведения, что мы работаем исключительно с юридическими лицами. Напоминаем, что все финансовые расчёты осуществляются нами на основании выставления счёта вашей организации. </p>
      </div>
    </a>
    <a href="#" class="news__item">
      <div class="news__img" style="background-image: url(/assets/img/demo/demonews.jpg)">
      </div>
      <div class="news__overlay">
        <div class="news__meta"> <p> 10.01.2020 </p> <span>|</span> <p>Новости</p></div>
        <div class="news__title"> Вниманию новых клиентов </div>
        <p class="news__text"> Уважаемые клиенты! Доводим до вашего сведения, что мы работаем исключительно с юридическими лицами. Напоминаем, что все финансовые расчёты осуществляются нами на основании выставления счёта вашей организации. </p>
      </div>
    </a>
    <a href="#" class="news__item">
      <div class="news__img" style="background-image: url(/assets/img/demo/demonews.jpg)">
      </div>
      <div class="news__overlay">
        <div class="news__meta"> <p> 10.01.2020 </p> <span>|</span> <p>Новости</p></div>
        <div class="news__title"> Вниманию новых клиентов </div>
        <p class="news__text"> Уважаемые клиенты! Доводим до вашего сведения, что мы работаем исключительно с юридическими лицами. Напоминаем, что все финансовые расчёты осуществляются нами на основании выставления счёта вашей организации. </p>
      </div>
    </a>
    <a href="#" class="news__item">
      <div class="news__img" style="background-image: url(/assets/img/demo/demonews.jpg)">
      </div>
      <div class="news__overlay">
        <div class="news__meta"> <p> 10.01.2020 </p> <span>|</span> <p>Новости</p></div>
        <div class="news__title"> Вниманию новых клиентов </div>
        <p class="news__text"> Уважаемые клиенты! Доводим до вашего сведения, что мы работаем исключительно с юридическими лицами. Напоминаем, что все финансовые расчёты осуществляются нами на основании выставления счёта вашей организации. </p>
      </div>
    </a>
  </div>
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