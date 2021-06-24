<? include 'header.php'; ?>
<main>

  <div class="breadcrumbs">
    <div class="container"> <a href="#"> Главная</a> <span> /</span> Одежда </div>
  </div>
  <section class="topbar__page topbar__catalog">
    <div class="container">
      <div class="title-topbar">
        <h1> Одежда </h1>
      </div>
    </div>
  </section>
  <section class="category__page-block">
    <div class="container">
      <div class="category__wrapper">
        <div class="category__left-side">
          <div class="category__subcategory">
            <a href="#" class="selected-category">
              Одежда
            </a>
            <ul>
              <li><a href="#">Футболки</a></li>
              <li><a href="#">Поло</a></li>
              <li><a href="#">Ветровки, куртки, жилеты</a></li>
              <li><a href="#">Джемперы и кардиганы</a></li>
              <li><a href="#">Вязаные комплекты</a></li>
            </ul>
          </div>
        </div>
        <div class="category__right-side">
          <div class="category__filter">
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
          </div>
          <div class="category__sorting">
            <div class="sorting__left">
              <div class="sorting__item active totop"> По остатку </div>
              <div class="sorting__item"> По цене </div>
              <div class="sorting__item"> По популярности </div>
            </div>
            <div class="form-check">
    <input type="checkbox" class="form-check-input" id="instock">
    <label class="form-check-label" for="instock">В наличии</label>
  </div>
          </div>
          <div class="row g-3 category__product-list">
            <div class="product product__card col-lg-4 col-sm-6">
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
                  <div class="product__card-button"> <button class="button bg-blue-1"><img src="assets/img/icons/cart-button.svg"> В корзину </button> </div>
                </div>
              </div>
            </div>
            <div class="product product__card col-lg-4 col-sm-6">
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
                  <div class="product__card-button"> <button class="button bg-blue-1"><img src="assets/img/icons/cart-button.svg"> В корзину </button> </div>
                </div>
              </div>
            </div>
            <div class="product product__card col-lg-4 col-sm-6">
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
                  <div class="product__card-button"> <button class="button bg-blue-1"><img src="assets/img/icons/cart-button.svg"> В корзину </button> </div>
                </div>
              </div>
            </div>
          </div>
          <div class="pagination__block">
            <a href="#" class="pagination__showmore"> Загрузить еще </a>
            <div class="pagination__page">

              <div class="pagination__list-page"><a href="#"> 1 </a> <a href="#"> 2 </a> <a href="#"> 3 </a></div>
              <div class="pagination__next-page"><a href="#">Следующая ></a></div>
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
          <div class="foz__img"><img src="assets/img/foz-1.png"></div>
          <div class="foz__text-item">
            Стоимость и сроки <br> готового заказа
          </div>
        </div>
        <div class="col-lg-4 foz__item">
          <div class="foz__img"><img src="assets/img/foz-2.png"></div>
          <div class="foz__text-item">
            Помощь с подготовкой <br>дизайн-макета для печати
          </div>
        </div>
        <div class="col-lg-4 foz__item">
          <div class="foz__img"><img src="assets/img/foz-3.png"></div>
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