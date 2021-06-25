<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Интернет-магазин \"Одежда\"");
?>
<main>

  <header>
    <div class="header__top-info bg-gray py-2">
      <div class="container-xl container-fluid text-center">
        <div class="top-info__block d-flex justify-content-center">
          <img src="/assets/img/icons/information.svg" class="img top-info__icon">
          <div class="top-info__text d-none d-lg-block">Работаем только с юридическими лицами. Минимальный заказ от 20 000 руб.</div>
          <div class="top-info__text d-block d-lg-none">Работаем только с юр.лицами. Мин.заказ от 20тыс.руб.</div>
        </div>
      </div>
    </div>
    <div class="container-xxl container-fluid">
      <div class="row align-items-center header__first-section">
        <div class="col-lg-1 col order-lg-1 order-3 text-center">
          <a href="/"><img src="/assets/img/logo.svg" class="header__logo"></a>
        </div>
        <div class="col-auto col-lg-1 col-xl-6 order-lg-2 order-4 text-end">
          <nav class="header__navbar d-xl-block d-none">
            <ul>
              <li><a href="#"> Нанесение логотипа</a></li>
              <li><a href="#"> Как заказать</a></li>
              <li><a href="#"> Оплата </a></li>
              <li><a href="#"> Доставка </a></li>
              <li><a href="#"> О нас </a></li>
              <li><a href="#"> Контакты </a></li>
            </ul>
          </nav>
          <div class="header__navbar-mobile d-xl-none d-block">
            <ul>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <img src="/assets/img/icons/mobilemenu.svg">
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown" style="">
                  <li><a class="dropdown-item" href="#"> Нанесение логотипа</a></li>
                  <li><a class="dropdown-item" href="#"> Как заказать</a></li>
                  <li><a class="dropdown-item" href="#"> Оплата </a></li>
                  <li><a class="dropdown-item" href="#"> Доставка </a></li>
                  <li><a class="dropdown-item" href="#"> О нас </a></li>
                  <li><a class="dropdown-item" href="#"> Контакты </a></li>
                </ul>
              </li>
            </ul>

          </div>
        </div>
        <div class="offset-xl-0 offset-lg-4 col-5 col-xl-4 d-lg-block d-none order-4">
          <div class="header__contacts">
            <div class="contacts__phone">
              <a href="tel:+7 (812) 309-88-11" class="fcond"> +7 (812) 309-88-11 </a>
              <a href="#" class="link" data-bs-toggle="modal" data-bs-target="#callme"> Перезвоните мне </a>
            </div>
            <div class="contacts__email">
              <a href="mailto:gifts@cnrg.pro" class="fcond">gifts@cnrg.pro</a>
              <span> с 10:00 до 18:00, пн-пт. </span>
            </div>
          </div>
        </div>
        <div class="col-lg-1 d-lg-block d-none order-4">
          <div class="header__socials">
            <a href="#" class="social__item"><img src="/assets/img/icons/facebook.svg"></a>
            <a href="#" class="social__item"><img src="/assets/img/icons/vk.svg"></a>
            <a href="#" class="social__item"><img src="/assets/img/icons/instagram.svg"></a>
          </div>
        </div>
        <div class="col-lg-2 col-sm-auto order-lg-4 order-sm-2 order-4 pt-2 pt-sm-0 mt-lg-4 dropdown">
          <button class="button button__catalog bg-blue-2 dropdown-toggle" id="dropdownCatalog" data-bs-toggle="dropdown" aria-expanded="false"><img src="/assets/img/icons/menu.svg">
            <span class="d-none d-xxl-block"> Каталог товаров</span>
            <span class="d-block d-xxl-none"> Каталог </span>
          </button>

          <div class="dropdown-menu catalog__dropdown-menu" aria-labelledby="dropdownCatalog">
            <div class="d-flex dropdown__catalog-overlay">
              <div class="dropdown__catalog-col">
                <div class="dropdown__catalog-item">
                  <a class="dropdown-item" href="#"><img src="/assets/img/icons/catalog/odejda.svg">Одежда</a>
                  <div class="dropdown__catalog-item-list">
                    <a href="#">Футболки</a>
                    <a href="#">Рубашки поло</a>
                    <a href="#">Футболки для промо</a>
                    <a href="#">Кепки и бейсболки</a>
                    <a href="#">Панамы</a>
                  </div>
                </div>
              </div>
              <div class="dropdown__catalog-col">
                <div class="dropdown__catalog-item">
                  <a class="dropdown-item" href="#"><img src="/assets/img/icons/catalog/posuda.svg">Посуда</a>
                  <div class="dropdown__catalog-item-list">
                    <a href="#"> Кружки </a>
                    <a href="#"> Бокалы</a>
                    <a href="#"> Чайные наборы</a>
                    <a href="#"> Кофейные наборы</a>
                    <a href="#"> Столовые тарелки </a>
                  </div>
                </div>
              </div>
              <div class="dropdown__catalog-col">
                <div class="dropdown__catalog-item">
                  <a class="dropdown-item" href="#"><img src="/assets/img/icons/catalog/ruchki.svg">Ручки</a>
                  <div class="dropdown__catalog-item-list">
                    <a href="#"> Пластиковые ручки </a>
                    <a href="#"> Металлические ручки </a>
                    <a href="#"> Эко ручки </a>
                    <a href="#"> Карандаши </a>
                    <a href="#"> Текстовыделители </a>
                  </div>
                </div>
              </div>
              <div class="dropdown__catalog-col">
                <div class="dropdown__catalog-item">
                  <a class="dropdown-item" href="#"><img src="/assets/img/icons/catalog/zonty.svg">Зонты</a>
                  <div class="dropdown__catalog-item-list">
                    <a href="#">Футболки</a>
                    <a href="#">Рубашки поло</a>
                    <a href="#">Футболки для промо</a>
                    <a href="#">Кепки и бейсболки</a>
                    <a href="#">Панамы</a>
                  </div>
                </div>
              </div>
              <div class="dropdown__catalog-col">
                <div class="dropdown__catalog-item">
                  <a class="dropdown-item" href="#"><img src="/assets/img/icons/catalog/sumki.svg">Сумки</a>
                  <div class="dropdown__catalog-item-list">
                    <a href="#"> Кружки </a>
                    <a href="#"> Бокалы</a>
                    <a href="#"> Чайные наборы</a>
                    <a href="#"> Кофейные наборы</a>
                    <a href="#"> Столовые тарелки </a>
                  </div>
                </div>
              </div>
              <div class="dropdown__catalog-col">
                <div class="dropdown__catalog-item">
                  <a class="dropdown-item" href="#"><img src="/assets/img/icons/catalog/dom.svg">Дом</a>
                  <div class="dropdown__catalog-item-list">
                    <a href="#"> Пластиковые ручки </a>
                    <a href="#"> Металлические ручки </a>
                    <a href="#"> Эко ручки </a>
                    <a href="#"> Карандаши </a>
                    <a href="#"> Текстовыделители </a>
                  </div>
                </div>
              </div>
              <div class="dropdown__catalog-col">
                <div class="dropdown__catalog-item">
                  <a class="dropdown-item" href="#"><img src="/assets/img/icons/catalog/otdyh.svg">Отдых</a>
                  <div class="dropdown__catalog-item-list">
                    <a href="#">Футболки</a>
                    <a href="#">Рубашки поло</a>
                    <a href="#">Футболки для промо</a>
                    <a href="#">Кепки и бейсболки</a>
                    <a href="#">Панамы</a>
                  </div>
                </div>
              </div>
              <div class="dropdown__catalog-col">
                <div class="dropdown__catalog-item">
                  <a class="dropdown-item" href="#"><img src="/assets/img/icons/catalog/electronika.svg">Электроника</a>
                  <div class="dropdown__catalog-item-list">
                    <a href="#"> Кружки </a>
                    <a href="#"> Бокалы</a>
                    <a href="#"> Чайные наборы</a>
                    <a href="#"> Кофейные наборы</a>
                    <a href="#"> Столовые тарелки </a>
                  </div>
                </div>
              </div>
              <div class="dropdown__catalog-col">
                <div class="dropdown__catalog-item">
                  <a class="dropdown-item" href="#"><img src="/assets/img/icons/catalog/korppodarki.svg">Корпоративные подарки</a>
                  <div class="dropdown__catalog-item-list">
                    <a href="#"> Пластиковые ручки </a>
                    <a href="#"> Металлические ручки </a>
                    <a href="#"> Эко ручки </a>
                    <a href="#"> Карандаши </a>
                    <a href="#"> Текстовыделители </a>
                  </div>
                </div>
              </div>
              <div class="dropdown__catalog-col">
                <div class="dropdown__catalog-item">
                  <a class="dropdown-item" href="#"><img src="/assets/img/icons/catalog/ejednevnik.svg">Ежедневники и блокноты</a>
                  <div class="dropdown__catalog-item-list">
                    <a href="#"> Пластиковые ручки </a>
                    <a href="#"> Металлические ручки </a>
                    <a href="#"> Эко ручки </a>
                    <a href="#"> Карандаши </a>
                    <a href="#"> Текстовыделители </a>
                  </div>
                </div>
              </div>
              <div class="dropdown__catalog-col">
                <div class="dropdown__catalog-item">
                  <a class="dropdown-item" href="#"><img src="/assets/img/icons/catalog/podnabor.svg">Подарочные наборы</a>
                  <div class="dropdown__catalog-item-list">
                    <a href="#"> Пластиковые ручки </a>
                    <a href="#"> Металлические ручки </a>
                    <a href="#"> Эко ручки </a>
                    <a href="#"> Карандаши </a>
                    <a href="#"> Текстовыделители </a>
                  </div>
                </div>
              </div>
              <div class="dropdown__catalog-col">
                <div class="dropdown__catalog-item">
                  <a class="dropdown-item" href="#"><img src="/assets/img/icons/catalog/nagrada.svg">Наградная продукция</a>
                  <div class="dropdown__catalog-item-list">
                    <a href="#"> Пластиковые ручки </a>
                    <a href="#"> Металлические ручки </a>
                    <a href="#"> Эко ручки </a>
                    <a href="#"> Карандаши </a>
                    <a href="#"> Текстовыделители </a>
                  </div>
                </div>
              </div>
              <div class="dropdown__catalog-col">
                <div class="dropdown__catalog-item">
                  <a class="dropdown-item" href="#"><img src="/assets/img/icons/catalog/upakovka.svg">Упаковка</a>
                  <div class="dropdown__catalog-item-list">
                    <a href="#"> Пластиковые ручки </a>
                    <a href="#"> Металлические ручки </a>
                    <a href="#"> Эко ручки </a>
                    <a href="#"> Карандаши </a>
                    <a href="#"> Текстовыделители </a>
                  </div>
                </div>
              </div>
              <div class="dropdown__catalog-col">
                <div class="dropdown__catalog-item">
                  <a class="dropdown-item" href="#"><img src="/assets/img/icons/catalog/novyygod.svg">Новогодние подарки</a>
                  <div class="dropdown__catalog-item-list">
                    <a href="#"> Пластиковые ручки </a>
                    <a href="#"> Металлические ручки </a>
                    <a href="#"> Эко ручки </a>
                    <a href="#"> Карандаши </a>
                    <a href="#"> Текстовыделители </a>
                  </div>
                </div>
              </div>
              <div class="dropdown__catalog-col">
                <div class="dropdown__catalog-item">
                  <a class="dropdown-item" href="#"><img src="/assets/img/icons/catalog/suvenir.svg">Сувениры на заказ</a>
                  <div class="dropdown__catalog-item-list">
                    <a href="#"> Пластиковые ручки </a>
                    <a href="#"> Металлические ручки </a>
                    <a href="#"> Эко ручки </a>
                    <a href="#"> Карандаши </a>
                    <a href="#"> Текстовыделители </a>
                  </div>
                </div>
              </div>
              <div class="dropdown__catalog-col">
                <div class="dropdown__catalog-item">
                  <a class="dropdown-item" href="#"><img src="/assets/img/icons/catalog/prazdniki.svg">Праздники</a>
                  <div class="dropdown__catalog-item-list">
                    <a href="#"> Пластиковые ручки </a>
                    <a href="#"> Металлические ручки </a>
                    <a href="#"> Эко ручки </a>
                    <a href="#"> Карандаши </a>
                    <a href="#"> Текстовыделители </a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="header__catalog catalog__hide">
            <div class="catalog__list">
            </div>
          </div>
        </div>
        <div class="col-lg-9 col-auto order-lg-4 order-sm-2 ps-sm-0 mt-lg-4">
          <div class="header__search">
            <div class="search__overlay">
              <form class="form">
                <label> <img src="/assets/img/icons/search.svg">
                  <input type="text" class="input search__input" placeholder="Например: Флешка "> </label>
                <input type="submit" class="button button__submit bg-blue-2 " value="Поиск">
              </form>
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
          <div class="header__cart-block">

            <a href="/cart.php" class="cart-block_item">
              <div class="cart__quanity">150</div>
              <img src="/assets/img/icons/cart.svg">
              <span> Корзина </span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </header>

  <div class="sticky__module">
    <div class="sticky__module-items">
      <a href="#" class="cart-block_item">
        <div class="cart__quanity">150</div>
        <img src="/assets/img/icons/cart.svg">
        <span> Корзина </span>
      </a>
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
          <form class="form foz__form-modal">
            <input type="text" class="input input__style-2" placeholder="Имя">
            <input type="text" class="input input__style-2" placeholder="+7 (___)-___-__">
            <input type="submit" class="button bg-blue-1" value="Получить консультацию">
          </form>
        </div>

      </div>
    </div>
  </div>

    <div class="breadcrumbs">
      <div class="container"> <a href="#"> Главная</a> <span> /</span>  Каталог </div> 
    </div>
<!--     <section class="topbar__page topbar__catalog">
      <div class="container">
        <div class="title-topbar"><h1> Каталог </h1></div>
      </div>
    </section> -->
    <section class="catalog__page-block catalog__page-title">
      <div class="container">
       <div class="title-topbar"><h1> Каталог </h1></div>
       <div class="row g-0 catalog__list">

        <div class="col-lg-3">
          <div class="catalog-list__overlay category__odejda">
            <div class="catalog-list__wrapper">           
              <div class="catalog-list__img">
                <img src="/assets/img/icons/catalog/odejda.svg">
              </div>
              <div class="catalog-list__title">
                Одежда
              </div>
              <div class="catalog-list__link">
                <a href="#">Футболки</a>
                <a href="#">Рубашки поло</a>
                <a href="#">Футболки для промо </a>
                <a href="#">Кепки и бейсболки </a>
                <a href="#">Панамы</a>
                <a href="#">Футболки</a>
                <a href="#">Рубашки поло</a>
                <a href="#">Футболки для промо </a>
                <a href="#">Кепки и бейсболки </a>
                <a href="#">Панамы</a>
              </div>

            </div><div class="catalog-list__showfull">
              +7 категорий
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="catalog-list__overlay category__posuda">
            <div class="catalog-list__wrapper">           
              <div class="catalog-list__img">
                <img src="/assets/img/icons/catalog/posuda.svg">
              </div>
              <div class="catalog-list__title">
                Посуда
              </div>
              <div class="catalog-list__link">
                <a href="#">Кружки</a>
                <a href="#">Бокалы</a>
                <a href="#">Чайные наборы </a>
                <a href="#">Кофейные наборы </a>
                <a href="#">Столовые тарелки</a>
                <a href="#">Кружки</a>
                <a href="#">Бокалы</a>
                <a href="#">Чайные наборы </a>
                <a href="#">Кофейные наборы </a>
                <a href="#">Столовые тарелки</a>
              </div>

            </div><div class="catalog-list__showfull">
              +7 категорий
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="catalog-list__overlay category__ruchki">
            <div class="catalog-list__wrapper">           
              <div class="catalog-list__img">
                <img src="/assets/img/icons/catalog/ruchki.svg">
              </div>
              <div class="catalog-list__title">
                Ручки
              </div>
              <div class="catalog-list__link">
                <a href="#">Кружки</a>
                <a href="#">Бокалы</a>
                <a href="#">Чайные наборы </a>
                <a href="#">Кофейные наборы </a>
                <a href="#">Столовые тарелки</a>
                <a href="#">Кружки</a>
                <a href="#">Бокалы</a>
                <a href="#">Чайные наборы </a>
                <a href="#">Кофейные наборы </a>
                <a href="#">Столовые тарелки</a>
              </div>

            </div><div class="catalog-list__showfull">
              +7 категорий
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="catalog-list__overlay category__zonty">
            <div class="catalog-list__wrapper">           
              <div class="catalog-list__img">
                <img src="/assets/img/icons/catalog/odejda.svg">
              </div>
              <div class="catalog-list__title">
                Зонты
              </div>
              <div class="catalog-list__link">
                <a href="#">Футболки</a>
                <a href="#">Рубашки поло</a>
                <a href="#">Футболки для промо </a>

              </div>

            </div><div class="catalog-list__showfull">

            </div>
          </div>
        </div>

        <div class="col-lg-3">
          <div class="catalog-list__overlay category__sumki">
            <div class="catalog-list__wrapper">           
              <div class="catalog-list__img">
                <img src="/assets/img/icons/catalog/sumki.svg">
              </div>
              <div class="catalog-list__title">
                Сумки
              </div>
              <div class="catalog-list__link">
                <a href="#">Футболки</a>
                <a href="#">Рубашки поло</a>
                <a href="#">Футболки для промо </a>
                <a href="#">Кепки и бейсболки </a>
                <a href="#">Панамы</a>
                <a href="#">Футболки</a>
                <a href="#">Рубашки поло</a>
                <a href="#">Футболки для промо </a>
                <a href="#">Кепки и бейсболки </a>
                <a href="#">Панамы</a>
              </div>

            </div><div class="catalog-list__showfull">
              +7 категорий
            </div>
          </div>
        </div>

        <div class="col-lg-3">
          <div class="catalog-list__overlay category__dom">
            <div class="catalog-list__wrapper">           
              <div class="catalog-list__img">
                <img src="/assets/img/icons/catalog/dom.svg">
              </div>
              <div class="catalog-list__title">
                Дом
              </div>
              <div class="catalog-list__link">
                <a href="#">Футболки</a>
                <a href="#">Рубашки поло</a>
                <a href="#">Футболки для промо </a>
                <a href="#">Кепки и бейсболки </a>
                <a href="#">Панамы</a>
                <a href="#">Футболки</a>
                <a href="#">Рубашки поло</a>
                <a href="#">Футболки для промо </a>
                <a href="#">Кепки и бейсболки </a>
                <a href="#">Панамы</a>
              </div>

            </div><div class="catalog-list__showfull">
              +7 категорий
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="catalog-list__overlay category__otdyh">
            <div class="catalog-list__wrapper">           
              <div class="catalog-list__img">
                <img src="/assets/img/icons/catalog/otdyh.svg">
              </div>
              <div class="catalog-list__title">
                Отдых
              </div>
              <div class="catalog-list__link">
                <a href="#">Футболки</a>
                <a href="#">Рубашки поло</a>
                <a href="#">Футболки для промо </a>
                <a href="#">Кепки и бейсболки </a>
                <a href="#">Панамы</a>
                <a href="#">Футболки</a>
                <a href="#">Рубашки поло</a>
                <a href="#">Футболки для промо </a>
                <a href="#">Кепки и бейсболки </a>
                <a href="#">Панамы</a>
              </div>

            </div><div class="catalog-list__showfull">
              +7 категорий
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="catalog-list__overlay category__electronika">
            <div class="catalog-list__wrapper">           
              <div class="catalog-list__img">
                <img src="/assets/img/icons/catalog/electronika.svg">
              </div>
              <div class="catalog-list__title">
                Электроника
              </div>
              <div class="catalog-list__link">
                <a href="#">Футболки</a>
                <a href="#">Рубашки поло</a>
                <a href="#">Футболки для промо </a>
                <a href="#">Кепки и бейсболки </a>
                <a href="#">Панамы</a>
                <a href="#">Футболки</a>
                <a href="#">Рубашки поло</a>
                <a href="#">Футболки для промо </a>
                <a href="#">Кепки и бейсболки </a>
                <a href="#">Панамы</a>
              </div>

            </div><div class="catalog-list__showfull">
              +7 категорий
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="catalog-list__overlay category__korppodarki">
            <div class="catalog-list__wrapper">           
              <div class="catalog-list__img">
                <img src="/assets/img/icons/catalog/korppodarki.svg">
              </div>
              <div class="catalog-list__title">
                Корпоративные подарки
              </div>
              <div class="catalog-list__link">
                <a href="#">Футболки</a>
                <a href="#">Рубашки поло</a>
                <a href="#">Футболки для промо </a>
                <a href="#">Кепки и бейсболки </a>
                <a href="#">Панамы</a>
                <a href="#">Футболки</a>
                <a href="#">Рубашки поло</a>
                <a href="#">Футболки для промо </a>
                <a href="#">Кепки и бейсболки </a>
                <a href="#">Панамы</a>
              </div>

            </div><div class="catalog-list__showfull">
              +7 категорий
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="catalog-list__overlay category__ejednevnik">
            <div class="catalog-list__wrapper">           
              <div class="catalog-list__img">
                <img src="/assets/img/icons/catalog/ejednevnik.svg">
              </div>
              <div class="catalog-list__title">
                Ежедневники и блокноты
              </div>
              <div class="catalog-list__link">
                <a href="#">Футболки</a>
                <a href="#">Рубашки поло</a>
                <a href="#">Футболки для промо </a>
                <a href="#">Кепки и бейсболки </a>
                <a href="#">Панамы</a>
                <a href="#">Футболки</a>
                <a href="#">Рубашки поло</a>
                <a href="#">Футболки для промо </a>
                <a href="#">Кепки и бейсболки </a>
                <a href="#">Панамы</a>
              </div>

            </div><div class="catalog-list__showfull">
              +7 категорий
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="catalog-list__overlay category__podnabor">
            <div class="catalog-list__wrapper">           
              <div class="catalog-list__img">
                <img src="/assets/img/icons/catalog/podnabor.svg">
              </div>
              <div class="catalog-list__title">
                Подарочные наборы
              </div>
              <div class="catalog-list__link">
                <a href="#">Футболки</a>
                <a href="#">Рубашки поло</a>
                <a href="#">Футболки для промо </a>
                <a href="#">Кепки и бейсболки </a>
                <a href="#">Панамы</a>
                <a href="#">Футболки</a>
                <a href="#">Рубашки поло</a>
                <a href="#">Футболки для промо </a>
                <a href="#">Кепки и бейсболки </a>
                <a href="#">Панамы</a>
              </div>

            </div><div class="catalog-list__showfull">
              +7 категорий
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="catalog-list__overlay category__nagrada">
            <div class="catalog-list__wrapper">           
              <div class="catalog-list__img">
                <img src="/assets/img/icons/catalog/nagrada.svg">
              </div>
              <div class="catalog-list__title">
                Наградная продукция
              </div>
              <div class="catalog-list__link">
                <a href="#">Футболки</a>
                <a href="#">Рубашки поло</a>
                <a href="#">Футболки для промо </a>
                <a href="#">Кепки и бейсболки </a>
                <a href="#">Панамы</a>
                <a href="#">Футболки</a>
                <a href="#">Рубашки поло</a>
                <a href="#">Футболки для промо </a>
                <a href="#">Кепки и бейсболки </a>
                <a href="#">Панамы</a>
              </div>

            </div><div class="catalog-list__showfull">
              +7 категорий
            </div>
          </div>
        </div>     
        <div class="col-lg-3">
          <div class="catalog-list__overlay category__upakovka">
            <div class="catalog-list__wrapper">           
              <div class="catalog-list__img">
                <img src="/assets/img/icons/catalog/upakovka.svg">
              </div>
              <div class="catalog-list__title">
                Упаковка
              </div>
              <div class="catalog-list__link">
                <a href="#">Футболки</a>
                <a href="#">Рубашки поло</a>
                <a href="#">Футболки для промо </a>
                <a href="#">Кепки и бейсболки </a>
                <a href="#">Панамы</a>
                <a href="#">Футболки</a>
                <a href="#">Рубашки поло</a>
                <a href="#">Футболки для промо </a>
                <a href="#">Кепки и бейсболки </a>
                <a href="#">Панамы</a>
              </div>

            </div><div class="catalog-list__showfull">
              +7 категорий
            </div>
          </div>
        </div>
         <div class="col-lg-3">
          <div class="catalog-list__overlay category__novyygod">
            <div class="catalog-list__wrapper">           
              <div class="catalog-list__img">
                <img src="/assets/img/icons/catalog/novyygod.svg">
              </div>
              <div class="catalog-list__title">
                Новогодние подарки
              </div>
              <div class="catalog-list__link">
                <a href="#">Футболки</a>
                <a href="#">Рубашки поло</a>
                <a href="#">Футболки для промо </a>
                <a href="#">Кепки и бейсболки </a>
                <a href="#">Панамы</a>
                <a href="#">Футболки</a>
                <a href="#">Рубашки поло</a>
                <a href="#">Футболки для промо </a>
                <a href="#">Кепки и бейсболки </a>
                <a href="#">Панамы</a>
              </div>

            </div><div class="catalog-list__showfull">
              +7 категорий
            </div>
          </div>
        </div> 
         <div class="col-lg-3">
          <div class="catalog-list__overlay category__suvenir">
            <div class="catalog-list__wrapper">           
              <div class="catalog-list__img">
                <img src="/assets/img/icons/catalog/suvenir.svg">
              </div>
              <div class="catalog-list__title">
                Сувениры на заказ
              </div>
              <div class="catalog-list__link">
                <a href="#">Футболки</a>
                <a href="#">Рубашки поло</a>
                <a href="#">Футболки для промо </a>
                <a href="#">Кепки и бейсболки </a>
                <a href="#">Панамы</a>
                <a href="#">Футболки</a>
                <a href="#">Рубашки поло</a>
                <a href="#">Футболки для промо </a>
                <a href="#">Кепки и бейсболки </a>
                <a href="#">Панамы</a>
              </div>

            </div><div class="catalog-list__showfull">
              +7 категорий
            </div>
          </div>
        </div> 
        <div class="col-lg-3">
          <div class="catalog-list__overlay category__prazdniki">
            <div class="catalog-list__wrapper">           
              <div class="catalog-list__img">
                <img src="/assets/img/icons/catalog/prazdniki.svg">
              </div>
              <div class="catalog-list__title">
                Праздники
              </div>
              <div class="catalog-list__link">
                <a href="#">Футболки</a>
                <a href="#">Рубашки поло</a>
                <a href="#">Футболки для промо </a>
                <a href="#">Кепки и бейсболки </a>
                <a href="#">Панамы</a>
                <a href="#">Футболки</a>
                <a href="#">Рубашки поло</a>
                <a href="#">Футболки для промо </a>
                <a href="#">Кепки и бейсболки </a>
                <a href="#">Панамы</a>
              </div>

            </div><div class="catalog-list__showfull">
              +7 категорий
            </div>
          </div>
        </div>  


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
      <button class="button bg-gray">Оставить заявку и получить все бонусы</button>
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
        <form class="form foz2__form">
          <input type="text" class="input input__style-2" placeholder="Имя">
          <input type="text" class="input input__style-2" placeholder="+7 (___)-___-__">
          <input type="submit" class="button bg-blue-1" value="Получить консультацию">
        </form>
      </div>
    </div>
  </div>
</section>
</main>

<? include 'footer.php'; ?>
</body>
</html>