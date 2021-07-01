<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();
/**
 * @global array $arParams
 * @global CUser $USER
 * @global CMain $APPLICATION
 * @global string $cartId
 */
$compositeStub = (isset($arResult['COMPOSITE_STUB']) && $arResult['COMPOSITE_STUB'] == 'Y');
$arResult['BASKET_COUNT_DESCRIPTION'] =  preg_replace('/[^0-9]/', '', $arResult['BASKET_COUNT_DESCRIPTION']);
?>
<?if($arParams['MOBILE'] == 'false'){?>
	<div class="header__cart-block">
				<?
				
				?>
		<a href="<?= $arParams['PATH_TO_BASKET'] ?>" class="cart-block_item">
			<div class="cart__quanity"><?echo $arResult['BASKET_COUNT_DESCRIPTION']?></div>
			<img src="/assets/img/icons/cart.svg">
			<span> <?= GetMessage('TSB1_CART') ?> </span>
		</a>
	</div>
<?}else{?>
	<a href="<?= $arParams['PATH_TO_BASKET'] ?>" class="cart-block_item">
				<div class="cart__quanity"><?echo $arResult['BASKET_COUNT_DESCRIPTION']?></div>
				<img src="/assets/img/icons/cart.svg">
				<span> <?= GetMessage('TSB1_CART') ?> </span>
			</a>
<?}?>