<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("О нас");
?>

<section class="topbar__page">
        <div class="container">
            <div class="title-topbar">
			<h1> <? $APPLICATION->ShowTitle() ?>  </h1>
            </div>
        </div>
    </section>
    <section class="page__content about__page">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
				<div class="img-background" style="background-image:url(/assets/img/team.jpg)">
                       
                    </div>
                   
					<? $APPLICATION->IncludeComponent(
								"bitrix:main.include",
								"",
								array(
									"AREA_FILE_SHOW" => "file",
									"PATH" => SITE_DIR . "include/about.php"
								),
								false
							); ?>
                    
                </div>
               
            </div>
  
    </section>

    <section class="portfolio__section bg-gray pb-5 pt-5">
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