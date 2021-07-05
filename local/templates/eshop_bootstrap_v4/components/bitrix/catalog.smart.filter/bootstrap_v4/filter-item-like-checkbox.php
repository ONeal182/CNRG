<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<div class="smart-filter-parameters-box">
	<?foreach($arItem["VALUES"] as $val => $ar):?>
		<div class="form-group form-check
                  <?= $ar["CHECKED"]? 'active': '' ?> <?= $ar["DISABLED"] ? 'disabled': '' ?>">
			<input
				type="checkbox"
				value="<? echo $ar["HTML_VALUE"] ?>"
				name="<? echo $ar["CONTROL_NAME"] ?>"
				id="<? echo $ar["CONTROL_ID"] ?>"
				class="form-check-input"
				<?= $ar["CHECKED"]? 'checked="checked"': '' ?>
				<?= $ar["DISABLED"] ? 'disabled': '' ?>
				onclick="smartFilter.click(this)"
			/>
			<label data-role="label_<?=$ar["CONTROL_ID"]?>"
				   class="smart-filter-checkbox-text filter__product"
				   for="<? echo $ar["CONTROL_ID"] ?>">
				<?=$arItem['NAME'];
				if ($arParams["DISPLAY_ELEMENT_COUNT"] !== "N" && isset($ar["ELEMENT_COUNT"])){?>
					(<span data-role="count_<?=$ar["CONTROL_ID"]?>"><?= $ar["ELEMENT_COUNT"]; ?></span>)
				<?}?>
			</label>
		</div>
	<?endforeach;?>
</div>
