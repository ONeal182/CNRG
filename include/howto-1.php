<p class="mb-5"> В нашем каталоге - более 100 000 сувениров и подарков для бизнеса. <br>
                Мы работаем только с юр. лицами по безналичному расчету. Все цены указаны с учётом НДС.
            </p>


            <ul class="list">
                <li> выберете артикул и добавьте его в корзину </li>
                <li>нажмите кнопку "Оформить"</li>
                <li>укажите контакты для связи</li>
                <li>нажмите кнопку "Сделать заказ"</li>
                <li>ждите звонка менеджера "CNRG" </li>
            </ul>
            <p> Если у вас появились вопросы, свяжитесь с нами по телефону: <? $APPLICATION->IncludeComponent(
								"bitrix:main.include",
								"",
								array(
									"AREA_FILE_SHOW" => "file",
									"PATH" => SITE_DIR . "include/telephone.php"
								),
								false
							); ?> <br>
                Также вы можете просто отправить заказ нам на почту: <? $APPLICATION->IncludeComponent(
								"bitrix:main.include",
								"", 
								array(
									"AREA_FILE_SHOW" => "file",
									"PATH" => SITE_DIR . "include/email.php"
								),
								false
							); ?></p>