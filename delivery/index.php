<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Доставка");
?>
<section class="topbar__page">
        <div class="container">
            <div class="title-topbar">
                <h1> <? $APPLICATION->ShowTitle() ?>  </h1>
            </div>
        </div>
    </section>
    <section class="page__content delivery__page">
        <div class="container">
            <div class="row mb-5 mt-4">
                <div class="col-lg-6">
                    <h3> Доставка по санкт-Петербургу </h3>
                    <p class="mt-4"> <strong> Дни доставки: </strong> Понедельник — Пятница. <br>
                        <strong> Часы доставки: </strong>с 10:00 до 18:00
                    </p>
                    <div class="delivery__blocks">
                        <div class="delivery__item">
                            <div class="delivery__price">
                                <span> Сумма заказа </span>
                                от 30 000 рублей
                            </div>
                            <div class="delivery__tax">
                                бесплатно в пределах КАД
                            </div>
                        </div>
                        <div class="delivery__item">
                            <div class="delivery__price">
                                <span> Сумма заказа </span>
                                до 30 000 рублей
                            </div>
                            <div class="delivery__tax">
                                Доставка 700 руб. в пределах КАД
                            </div>
                        </div>
                    </div>
                    <h3>Доставка в регионы</h3>
                    <p  class="mt-4"> Осуществляется курьерскими службами и оплачивается отдельно в соответствии с тарифами ТК. </p>
                </div>
                <div class="col-lg-6">
                    <h3> Самовывоз из офиса в Санкт-Петербурге
                    </h3>
                    <div class="map__contacts-item mt-4">
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
                    <div class="map__delivery">
                        <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A8f923b8b55d963a077d38cea2adfae62e9e27c2b1f519647cbc58f2c23b29647&amp;width=100%25&amp;height=400&amp;lang=ru_RU&amp;scroll=true"></script>

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
                    <button class="button bg-gray" data-bs-toggle="modal" data-bs-target="#callme">Оставить заявку и получить все бонусы</button>
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
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>