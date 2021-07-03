<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<div class="smart-filter-parameters-box <?// $arItem["DISPLAY_EXPANDED"]== "Y" ? 'bx-active' : '' ?>">
	<div class="smart-filter-parameters-box-title" onclick="smartFilter.hideFilterProps(this)">
		<span class="smart-filter-parameters-box-title-text"><?=$arItem["NAME"]?></span>
		<span data-role="prop_angle" class="smart-filter-angle smart-filter-angle-<?= $arItem["DISPLAY_EXPANDED"]== "Y"? 'up' : 'down' ?>"><span class="smart-filter-angles"></span></span>
	</div>
	<div class="smart-filter-block" data-role="bx_filter_block">
		<div class="smart-filter-parameters-box-container">
			<div class="smart-filter-input-group-checkbox-list">
				<?foreach($arItem["VALUES"] as $val => $ar):?>
					<div class="form-group form-check">
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
							   class="smart-filter-checkbox-text form-check-label"
							   for="<? echo $ar["CONTROL_ID"] ?>">
							<?=$ar["VALUE"];
							if ($arParams["DISPLAY_ELEMENT_COUNT"] !== "N" && isset($ar["ELEMENT_COUNT"])){?>
								(<span data-role="count_<?=$ar["CONTROL_ID"]?>"><?= $ar["ELEMENT_COUNT"]; ?></span>)
							<?}?>
						</label>
					</div>
				<?endforeach;?>
			</div>
		</div>
	</div>
</div>