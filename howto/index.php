<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Как оформить заказ");
?>

 <section class="topbar__page">
        <div class="container">
            <div class="title-topbar">
            <h1> <? $APPLICATION->ShowTitle() ?></h1>
            
            </div>
        </div>
    </section>
    <section class="page__content how__page">
        <div class="container">
        <? $APPLICATION->IncludeComponent(
								"bitrix:main.include",
								"",
								array(
									"AREA_FILE_SHOW" => "file",
									"PATH" => SITE_DIR . "include/howto-1.php"
								),
								false
							); ?>

            <div class="row mb-5 mt-4">
                <div class="col-lg-6 mb-4">
                    <div class="bg-gray-2 overlay-block p-4">
                    <? $APPLICATION->IncludeComponent(
								"bitrix:main.include",
								"",
								array(
									"AREA_FILE_SHOW" => "file",
									"PATH" => SITE_DIR . "include/howto-2.php"
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
									"PATH" => SITE_DIR . "include/howto-3.php"
								),
								false
							); ?>
                        
                    </div>
                </div>
                <div class="col-lg-12 mb-4">
                    <div class="bg-gray-2 overlay-block p-4">
                    <? $APPLICATION->IncludeComponent(
								"bitrix:main.include",
								"",
								array(
									"AREA_FILE_SHOW" => "file",
									"PATH" => SITE_DIR . "include/howto-4.php"
								),
								false
							); ?>
                       
                       
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