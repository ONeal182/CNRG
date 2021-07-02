<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");
?>
<section class="page__content contact__page mb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-5">
                    <h1> <? $APPLICATION->ShowTitle() ?>  </h1>
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
								); ?>  </p>
                                <span><? $APPLICATION->IncludeComponent(
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
                <div class="col-lg-6 mb-5">
                    <h1> Напишите нам </h1>
                    <p> подробно ответим на все вопросы. <br>
                        Подберём решение под ваш бюджет </p>
                    <form class="form form__contact">
                        <div class="mb-3"><textarea class="input input__style-2" placeholder="Ваше сообщение"></textarea></div>
                        <div class="mb-3"><input type="text" class="input input__style-2" placeholder="Имя"></div>
                        <div class="mb-3"><input type="text" class="input input__style-2" placeholder="Номер телефона"></div>
                        <div class="mb-3"><input type="text" class="input input__style-2" placeholder="E-mail"></div>
                        <input type="submit" class="button bg-blue-1" value="Отправить">
                        <div class="mt-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1"> Я даю согласие на обработку персональных данных в соответствии <a href="/policy"> с правилами использования сайта.</a></label>
                        </div>
                        
                    </form>
                </div>
                <div class="social__contact-page">
                    <p>Подписывайтесь на наши соцсети:</p>
                    <div class="map__social">
                        <a href="#" class="social__item"><img src="/assets/img/icons/facebook.svg"></a>
                        <a href="#" class="social__item"><img src="/assets/img/icons/vk.svg"></a>
                        <a href="#" class="social__item"><img src="/assets/img/icons/instagram.svg"></a>
                        <a href="#" class="social__item"><img src="/assets/img/icons/tiktok.svg"></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A161c938017d5229b07b33b3cf9f70675227807bc4085e3aecd26b3903fc5f2dc&amp;width=100%25&amp;height=657&amp;lang=ru_RU&amp;scroll=true"></script>

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