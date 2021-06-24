<!doctype html>
<html lang="ru">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">
  <!-- Bootstrap CSS -->
  <link href="assets/fonts/fonts.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

  <link href="assets/css/slick.css" rel="stylesheet">
  <link href="assets/css/slick-theme.css" rel="stylesheet">
  <link href="assets/css/multiple-select.min.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/responsive.css" rel="stylesheet">
  <title>CNRG</title>
</head>

<body class="page">
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