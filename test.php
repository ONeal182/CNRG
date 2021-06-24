<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

function rus2translit($string) {
	$converter = array(
		'а' => 'a',   'б' => 'b',   'в' => 'v',
		'г' => 'g',   'д' => 'd',   'е' => 'e',
		'ё' => 'e',   'ж' => 'zh',  'з' => 'z',
		'и' => 'i',   'й' => 'y',   'к' => 'k',
		'л' => 'l',   'м' => 'm',   'н' => 'n',
		'о' => 'o',   'п' => 'p',   'р' => 'r',
		'с' => 's',   'т' => 't',   'у' => 'u',
		'ф' => 'f',   'х' => 'h',   'ц' => 'c',
		'ч' => 'ch',  'ш' => 'sh',  'щ' => 'sch',
		'ь' => '\'',  'ы' => 'y',   'ъ' => '\'',
		'э' => 'e',   'ю' => 'yu',  'я' => 'ya',

		'А' => 'A',   'Б' => 'B',   'В' => 'V',
		'Г' => 'G',   'Д' => 'D',   'Е' => 'E',
		'Ё' => 'E',   'Ж' => 'Zh',  'З' => 'Z',
		'И' => 'I',   'Й' => 'Y',   'К' => 'K',
		'Л' => 'L',   'М' => 'M',   'Н' => 'N',
		'О' => 'O',   'П' => 'P',   'Р' => 'R',
		'С' => 'S',   'Т' => 'T',   'У' => 'U',
		'Ф' => 'F',   'Х' => 'H',   'Ц' => 'C',
		'Ч' => 'Ch',  'Ш' => 'Sh',  'Щ' => 'Sch',
		'Ь' => '\'',  'Ы' => 'Y',   'Ъ' => '\'',
		'Э' => 'E',   'Ю' => 'Yu',  'Я' => 'Ya',
	);
	return strtr($string, $converter);
}
$text =  '<option value="PRODUCT_ID">ID товара</option>;
									<option value="GROUP_ID">ID группы</option>;
									<option value="NAME">Название</option>;
									<option value="FULL_NAME">Название (полное)</option>;
									<option value="DESCRIPTION">Описание</option>;
									<option value="ACTICLE">Артикул</option>;
									<option value="SIZE">Размер</option>;
									<option value="PRICE">Цена</option>;
									<option value="DISCOUNT_PRICE">Цена со скидкой</option>;
									<option value="DISCOUNT_GROUP_ID">Группа скидок</option>;
									<option value="IMAGES">Изображения</option>;
									<option value="COLORS">Цвета</option>;
									<option value="CATEGORIES">Категории</option>;
									<option value="BRAND_ID">ID бренда</option>;
									<option value="IS_VIRTUAL">Виртуальный товар</option>;
									<option value="RATING">Рейтинг</option>;
									<option value="MATERIALS">Материал</option>;
									<option value="BRAND">Бренд</option>;
									<option value="BRANDING">Брендирование</option>;
									<option value="ATTR_WEIGHT">Вес (из атрибута)</option>;
									<option value="ATTR_LENGTH">Длина (из атрибута)</option>;
									<option value="ATTR_WIDTH">Ширина (из атрибута)</option>;
									<option value="ATTR_HEIGHT">Высота (из атрибута)</option>;
									<option value="WAREHOUSE_000000027">Остаток на складе «Офис-Образцы СПб»</option>;
									<option value="WAREHOUSE_000000029">Остаток на складе «Оптовый»</option>;
									<option value="WAREHOUSE_000000034">Остаток на складе «Офис-Образцы МСК»</option>;
									<option value="WAREHOUSE_000000039">Остаток на складе «Товары в пути»</option>;
									<option value="WAREHOUSE_1-0000034">Остаток на складе «VIP Полежаевская»</option>;
									<option value="WAREHOUSE_1-0000052">Остаток на складе «Удаленные склады»</option>;
									<option value="QUANTITY">Общий остаток</option>;
									<option value="ATTRIBUTE_nfc">Атрибут «NFC»</option>;
									<option value="ATTRIBUTE_besprovodnaya_peredacha">Атрибут «Беспроводная передача»</option>;
									<option value="ATTRIBUTE_versiya_bluetooth">Атрибут «Версия Bluetooth®»</option>;
									<option value="ATTRIBUTE_ves">Атрибут «Вес»</option>;
									<option value="ATTRIBUTE_vid_zastezhki">Атрибут «Вид застежки»</option>;
									<option value="ATTRIBUTE_vid_mekhanizma">Атрибут «Вид механизма»</option>;
									<option value="ATTRIBUTE_vmestimost">Атрибут «Вместимость»</option>;
									<option value="ATTRIBUTE_vodozashchita">Атрибут «Водозащита»</option>;
									<option value="ATTRIBUTE_vodostoykost">Атрибут «Водостойкость»</option>;
									<option value="ATTRIBUTE_vozmozhnost_zameny_sterzhnya_kartridzha">Атрибут «Возможность замены стержня/картриджа»</option>;
									<option value="ATTRIBUTE_vozmozhnost_naneseniya">Атрибут «Возможность нанесения»</option>;
									<option value="ATTRIBUTE_vremya_vosproizvedeniya">Атрибут «Время воспроизведения»</option>;
									<option value="ATTRIBUTE_vkhodnye_parametry">Атрибут «Входные параметры»</option>;
									<option value="ATTRIBUTE_vysota_vorotnika">Атрибут «Высота воротника»</option>;
									<option value="ATTRIBUTE_vykhodnye_parametry">Атрибут «Выходные параметры»</option>;
									<option value="ATTRIBUTE_garantiya">Атрибут «Гарантия»</option>;
									<option value="ATTRIBUTE_germetichnost">Атрибут «Герметичность»</option>;
									<option value="ATTRIBUTE_dalnost_osveshcheniya">Атрибут «Дальность освещения»</option>;
									<option value="ATTRIBUTE_data">Атрибут «Дата»</option>;
									<option value="ATTRIBUTE_derzhatel_dlya_ruchki">Атрибут «Держатель для ручки»</option>;
									<option value="ATTRIBUTE_diagonal_ekrana">Атрибут «Диагональ экрана»</option>;
									<option value="ATTRIBUTE_diametr_vkhodnogo_zrachka">Атрибут «Диаметр входного зрачка»</option>;
									<option value="ATTRIBUTE_diametr_dinamika">Атрибут «Диаметр динамика»</option>;
									<option value="ATTRIBUTE_diametr_kupola">Атрибут «Диаметр купола»</option>;
									<option value="ATTRIBUTE_diametr_ruchki_zonta">Атрибут «Диаметр ручки зонта»</option>;
									<option value="ATTRIBUTE_dlina_izdeliya_po_tsentru_spinki">Атрибут «Длина изделия по центру спинки»</option>;
									<option value="ATTRIBUTE_dlina_kabelya">Атрибут «Длина кабеля»</option>;
									<option value="ATTRIBUTE_dlina_pereda_ot_verkhney_plechevoy_tochki">Атрибут «Длина переда от верхней плечевой точки»</option>;
									<option value="ATTRIBUTE_dlina_po_tsentru_pereda_ot_shva_vtachivaniya_vorotnika">Атрибут «Длина по центру переда от шва втачивания воротника»</option>;
									<option value="ATTRIBUTE_dlina_proymy">Атрибут «Длина проймы»</option>;
									<option value="ATTRIBUTE_dlina_rukava">Атрибут «Длина рукава»</option>;
									<option value="ATTRIBUTE_dlina_rukava_ot_tsentra_spiny">Атрибут «Длина рукава от центра спины»</option>;
									<option value="ATTRIBUTE_dlina_ruchek">Атрибут «Длина ручек»</option>;
									<option value="ATTRIBUTE_dlina_spinki_ot_verkhney_plechevoy_tochki">Атрибут «Длина спинки от верхней плечевой точки»</option>;
									<option value="ATTRIBUTE_dlina_spinki_ot_vysshey_tochki_plechevogo_shva">Атрибут «Длина спинки от высшей точки плечевого шва»</option>;
									<option value="ATTRIBUTE_dlina_shkaly">Атрибут «Длина шкалы»</option>;
									<option value="ATTRIBUTE_dopusk">Атрибут «Допуск»</option>;
									<option value="ATTRIBUTE_emkost_elementa">Атрибут «Емкость элемента»</option>;
									<option value="ATTRIBUTE_iznanka">Атрибут «Изнанка»</option>;
									<option value="ATTRIBUTE_indikatsiya">Атрибут «Индикация»</option>;
									<option value="ATTRIBUTE_instruktsiya">Атрибут «Инструкция»</option>;
									<option value="ATTRIBUTE_interfeys">Атрибут «Интерфейс»</option>;
									<option value="ATTRIBUTE_istochnik_pitaniya">Атрибут «Источник питания»</option>;
									<option value="ATTRIBUTE_karman_dlya_bumag">Атрибут «Карман для бумаг»</option>;
									<option value="ATTRIBUTE_kol_vo_vizitok_kart">Атрибут «Кол-во визиток/карт»</option>;
									<option value="ATTRIBUTE_kol_vo_lampochek">Атрибут «Кол-во лампочек»</option>;
									<option value="ATTRIBUTE_kol_vo_listov">Атрибут «Кол-во листов»</option>;
									<option value="ATTRIBUTE_kol_vo_paneley">Атрибут «Кол-во панелей»</option>;
									<option value="ATTRIBUTE_kol_vo_person">Атрибут «Кол-во персон»</option>;
									<option value="ATTRIBUTE_kol_vo_slozheniy">Атрибут «Кол-во сложений»</option>;
									<option value="ATTRIBUTE_kol_vo_spits">Атрибут «Кол-во спиц»</option>;
									<option value="ATTRIBUTE_kol_vo_fotografiy">Атрибут «Кол-во фотографий»</option>;
									<option value="ATTRIBUTE_kol_vo_tsiklov">Атрибут «Кол-во циклов»</option>;
									<option value="ATTRIBUTE_komplektnost">Атрибут «Комплектность»</option>;
									<option value="ATTRIBUTE_kontrol_gromkosti">Атрибут «Контроль громкости»</option>;
									<option value="ATTRIBUTE_koeffitsient_peredachi">Атрибут «Коэффициент передачи»</option>;
									<option value="ATTRIBUTE_kratnost_uvelichenie">Атрибут «Кратность (увеличение)»</option>;
									<option value="ATTRIBUTE_kreplenie_bloka">Атрибут «Крепление блока»</option>;
									<option value="ATTRIBUTE_lichnye_dannye">Атрибут «Личные данные»</option>;
									<option value="ATTRIBUTE_lyasse">Атрибут «Ляссе»</option>;
									<option value="ATTRIBUTE_maksimalnaya_moshchnost">Атрибут «Максимальная мощность»</option>;
									<option value="ATTRIBUTE_maksimalnaya_nagruzka">Атрибут «Максимальная нагрузка»</option>;
									<option value="ATTRIBUTE_marka_stali">Атрибут «Марка стали»</option>;
									<option value="ATTRIBUTE_massa_netto">Атрибут «Масса нетто»</option>;
									<option value="ATTRIBUTE_material_platka_sharfa">Атрибут «Материал платка/шарфа»</option>;
									<option value="ATTRIBUTE_material_ruchki">Атрибут «Материал ручки»</option>;
									<option value="ATTRIBUTE_material_sterzhnya">Атрибут «Материал стержня»</option>;
									<option value="ATTRIBUTE_material_tovara">Атрибут «Материал товара»</option>;
									<option value="ATTRIBUTE_mesto_sbora">Атрибут «Место сбора»</option>;
									<option value="ATTRIBUTE_metod_naneseniya">Атрибут «Метод нанесения»</option>;
									<option value="ATTRIBUTE_mikrofon">Атрибут «Микрофон»</option>;
									<option value="ATTRIBUTE_moshchnost">Атрибут «Мощность»</option>;
									<option value="ATTRIBUTE_nalichie_chekhla_futlyara">Атрибут «Наличие чехла/футляра»</option>;
									<option value="ATTRIBUTE_nominalnaya_moshchnost">Атрибут «Номинальная мощность»</option>;
									<option value="ATTRIBUTE_oblozhka">Атрибут «Обложка»</option>;
									<option value="ATTRIBUTE_obkhvat_golovy">Атрибут «Обхват головы»</option>;
									<option value="ATTRIBUTE_obkhvat_shei">Атрибут «Обхват шеи»</option>;
									<option value="ATTRIBUTE_obem">Атрибут «Объем»</option>;
									<option value="ATTRIBUTE_obem_pamyati">Атрибут «Объем памяти»</option>;
									<option value="ATTRIBUTE_plotnost">Атрибут «Плотность»</option>;
									<option value="ATTRIBUTE_radius_besprovodnoy_zaryadki">Атрибут «Радиус беспроводной зарядки»</option>;
									<option value="ATTRIBUTE_radius_deystviya">Атрибут «Радиус действия»</option>;
									<option value="ATTRIBUTE_razlinovka">Атрибут «Разлиновка»</option>;
									<option value="ATTRIBUTE_razmer">Атрибут «Размер»</option>;
									<option value="ATTRIBUTE_razmer_tovara_sm">Атрибут «Размер товара (см)»</option>;
									<option value="ATTRIBUTE_razmer_fotografii">Атрибут «Размер фотографии»</option>;
									<option value="ATTRIBUTE_rezinka">Атрибут «Резинка»</option>;
									<option value="ATTRIBUTE_rossiyskiy_razmer">Атрибут «Российский размер»</option>;
									<option value="ATTRIBUTE_rost">Атрибут «Рост»</option>;
									<option value="ATTRIBUTE_svetovoy_potok">Атрибут «Световой поток»</option>;
									<option value="ATTRIBUTE_sertifikaty_standarty">Атрибут «Сертификаты, стандарты»</option>;
									<option value="ATTRIBUTE_sistema_zashchity_o_vetra">Атрибут «Система защиты о ветра»</option>;
									<option value="ATTRIBUTE_skorost_vosstanovleniya_formy">Атрибут «Скорость восстановления формы»</option>;
									<option value="ATTRIBUTE_skorost_zapisi">Атрибут «Скорость записи»</option>;
									<option value="ATTRIBUTE_skorost_chteniya">Атрибут «Скорость чтения»</option>;
									<option value="ATTRIBUTE_sovmestimost">Атрибут «Совместимость»</option>;
									<option value="ATTRIBUTE_soedinitelnyy_razem">Атрибут «Соединительный разъем»</option>;
									<option value="ATTRIBUTE_soprotivlenie">Атрибут «Сопротивление»</option>;
									<option value="ATTRIBUTE_sostav">Атрибут «Состав»</option>;
									<option value="ATTRIBUTE_spravochnaya_informatsiya">Атрибут «Справочная информация»</option>;
									<option value="ATTRIBUTE_srok_godnosti">Атрибут «Срок годности»</option>;
									<option value="ATTRIBUTE_steklo">Атрибут «Стекло»</option>;
									<option value="ATTRIBUTE_tverdost">Атрибут «Твердость»</option>;
									<option value="ATTRIBUTE_telefonnaya_kniga">Атрибут «Телефонная книга»</option>;
									<option value="ATTRIBUTE_temperaturnyy_rezhim">Атрибут «Температурный режим»</option>;
									<option value="ATTRIBUTE_tip_zaryadki">Атрибут «Тип зарядки»</option>;
									<option value="ATTRIBUTE_tip_konstruktsii">Атрибут «Тип конструкции»</option>;
									<option value="ATTRIBUTE_tip_krepleniya">Атрибут «Тип крепления»</option>;
									<option value="ATTRIBUTE_tip_soedineniya">Атрибут «Тип соединения»</option>;
									<option value="ATTRIBUTE_tip_sterzhnya">Атрибут «Тип стержня»</option>;
									<option value="ATTRIBUTE_tip_ustanovki">Атрибут «Тип установки»</option>;
									<option value="ATTRIBUTE_tolshchina_uzla">Атрибут «Толщина узла»</option>;
									<option value="ATTRIBUTE_format">Атрибут «Формат»</option>;
									<option value="ATTRIBUTE_tsvet_bumagi">Атрибут «Цвет бумаги»</option>;
									<option value="ATTRIBUTE_tsvet_gravirovki">Атрибут «Цвет гравировки»</option>;
									<option value="ATTRIBUTE_tsvet_sreza">Атрибут «Цвет среза»</option>;
									<option value="ATTRIBUTE_tsvet_tovara">Атрибут «Цвет товара»</option>;
									<option value="ATTRIBUTE_tsvet_chernil">Атрибут «Цвет чернил»</option>;
									<option value="ATTRIBUTE_chastotnyy_diapazon">Атрибут «Частотный диапазон»</option>;
									<option value="ATTRIBUTE_chuvstvitelnost">Атрибут «Чувствительность»</option>;
									<option value="ATTRIBUTE_shirina_vorotnika">Атрибут «Ширина воротника»</option>;
									<option value="ATTRIBUTE_shirina_gorloviny">Атрибут «Ширина горловины»</option>;
									<option value="ATTRIBUTE_shirina_grudi_izdeliya_po_grudi">Атрибут «Ширина груди изделия (ПО груди)»</option>;
									<option value="ATTRIBUTE_shirina_izdeliya_pod_proymoy">Атрибут «Ширина изделия под проймой»</option>;
									<option value="ATTRIBUTE_shirina_niza_izdeliya_pered">Атрибут «Ширина низа изделия (перед)»</option>;
									<option value="ATTRIBUTE_shirina_plecha">Атрибут «Ширина плеча»</option>;
									<option value="ATTRIBUTE_shirina_po_talii_po_talii">Атрибут «Ширина по талии (ПО талии)»</option>;
									<option value="ATTRIBUTE_shirina_rukava_bitseps">Атрибут «Ширина рукава (бицепс)»</option>;
									<option value="ATTRIBUTE_shirina_rukava_po_nizu">Атрибут «Ширина рукава по низу»</option>;
									<option value="ATTRIBUTE_shirina_rukava_pod_proymoy">Атрибут «Ширина рукава под проймой»</option>;';
$text = strip_tags($text);
$text = explode(';', $text);

$IBLOCK_ID = 5;
$properties = CIBlockProperty::GetList(Array("sort"=>"asc", "name"=>"asc"), Array("ACTIVE"=>"Y", "IBLOCK_ID"=>$IBLOCK_ID));
while ($prop_fields = $properties->GetNext())
{
  $arr_prop[] = $prop_fields["NAME"];
}



foreach ($text as $key => $test) {
	$test = trim($test);
	$name = $test;

	$code = preg_replace('/[^0-9a-zA-Z]/', '', rus2translit($test));
	if(in_array($name,$arr_prop)){
		echo 'Элемент есть';
	}else{
		$arFields = Array(
			"NAME" => $name,
			"ACTIVE" => "Y",
			"SORT" => "600",
			"CODE" => $code,
			"PROPERTY_TYPE" => "S",
			"USER_TYPE" => "text", 
			"IBLOCK_ID" => 5,
			);
		  
		  $ibp = new CIBlockProperty;
		  $PropID = $ibp->Add($arFields);
	}

}