<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("test-vlad");
?><?$APPLICATION->IncludeComponent(
	"bitrix:form",
	"consultation_form",
	Array(
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_TIME" => "3600",
		"CACHE_TYPE" => "A",
		"CHAIN_ITEM_LINK" => "",
		"CHAIN_ITEM_TEXT" => "",
		"COMPONENT_TEMPLATE" => "consultation_form",
		"EDIT_ADDITIONAL" => "N",
		"EDIT_STATUS" => "N",
		"IGNORE_CUSTOM_TEMPLATE" => "N",
		"NAME_TEMPLATE" => "",
		"NOT_SHOW_FILTER" => array(0=>"",1=>"",),
		"NOT_SHOW_TABLE" => array(0=>"",1=>"",),
		"RESULT_ID" => $_REQUEST[RESULT_ID],
		"SEF_MODE" => "N",
		"SHOW_ADDITIONAL" => "N",
		"SHOW_ANSWER_VALUE" => "N",
		"SHOW_EDIT_PAGE" => "N",
		"SHOW_LIST_PAGE" => "N",
		"SHOW_STATUS" => "N",
		"SHOW_VIEW_PAGE" => "N",
		"START_PAGE" => "new",
		"SUCCESS_URL" => "",
		"USE_EXTENDED_ERRORS" => "N",
		"VARIABLE_ALIASES" => array("action"=>"action",),
		"WEB_FORM_ID" => "1"
	)
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>