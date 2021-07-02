<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Оплата");
?>
 <section class="topbar__page">
        <div class="container">
            <div class="title-topbar">
                <h1>  <? $APPLICATION->ShowTitle() ?> </h1>
            </div>
        </div>
    </section>
    <section class="page__content how__page">
        <div class="container">
         


            <div class="row mb-5 mt-4">
                <div class="col-lg-6 mb-4">
                    <div class="bg-blue-3 text-white overlay-block p-4">
                        
					<? $APPLICATION->IncludeComponent(
								"bitrix:main.include",
								"",
								array(
									"AREA_FILE_SHOW" => "file",
									"PATH" => SITE_DIR . "include/pay-1.php"
								),
								false
							); ?>
                       

                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="bg-gray-2 overlay-block p-4">
                    <? $APPLICATION->IncludeComponent(
								"bitrix:main.include",
								"",
								array(
									"AREA_FILE_SHOW" => "file",
									"PATH" => SITE_DIR . "include/pay-2.php"
								),
								false
							); ?>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="bg-gray-2 overlay-block p-4">
                    <? $APPLICATION->IncludeComponent(
								"bitrix:main.include",
								"",
								array(
									"AREA_FILE_SHOW" => "file",
									"PATH" => SITE_DIR . "include/pay-3.php"
								),
								false
							); ?>
                       
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