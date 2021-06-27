<?require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");

$success = [
	'hasError' => false,
	'msg' => "Товар успешно добавлен в корзину.",
];
$fail = [
	'hasError' => true,
	'msg' => "К сожалению, что-то пошло не так.",
];

CModule::IncludeModule("sale");
CModule::IncludeModule("catalog");

$offerID = intval(htmlspecialchars($_REQUEST["offerID"]));
$quantity = intval(htmlspecialchars($_REQUEST["quantity"]));

if ($offerID < 1) {
	echo json_encode($fail);
	die();
};

$result = Add2BasketByProductID($offerID, $quantity, array());
$response = $result ? $success : $fail;

echo json_encode($response);
die();