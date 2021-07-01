<?

$_SERVER["DOCUMENT_ROOT"] = '/home/oneal/sites/CNRG';
include($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
if(!CModule::IncludeModule("iblock"))
{
   echo "Error with iblock module!";
   die;
}

$arOrder = array(
   "sort" => "inc",
);

$arFilter = array(
   "IBLOCK_ID" => 5,
);

 //Параметры функции транслитерации
$arTransParams = array(
   "max_len" => 40,
   "change_case" => false,
   "replace_space" => '-',
   "replace_other" => '-',
   "delete_repeat_replace" => true,
);

$db_elemens = CIBlockElement::GetList($arOrder, $arFilter, false, array());

$i = 0;
echo '<pre>';
while($obElement = $db_elemens->GetNextElement())
{
   $ar_res = $obElement->GetFields();
   
   $transName = CUtil::translit($ar_res["NAME"], "ru", $arTransParams); //Используем системную функцию транслитерации
   $arPropArray = Array( "CODE" => $transName, );
   
   $el = new CIBlockElement;
    $res = $el->Update($ar_res["ID"], $arPropArray);
   echo "result for ".$ar_res["NAME"]." is ".$transName.($res?"and OK":"and failed")."\r\n";
}
echo '</pre>';
?>