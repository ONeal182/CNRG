<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);

$strSectionEdit = CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "SECTION_EDIT");
$strSectionDelete = CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "SECTION_DELETE");
$arSectionDeleteParams = array("CONFIRM" => GetMessage('CT_BCSL_ELEMENT_DELETE_CONFIRM'));

?>
<div class="col-lg-2 col-sm-auto order-lg-4 order-sm-2 order-4 pt-2 pt-sm-0 mt-lg-4 dropdown">
					<button class="button button__catalog bg-blue-2 dropdown-toggle" id="dropdownCatalog" data-bs-toggle="dropdown" aria-expanded="false"><img src="/assets/img/icons/menu.svg">
						<span class="d-none d-xxl-block"> Каталог товаров</span>
						<span class="d-block d-xxl-none"> Каталог </span>
					</button>

					<div class="dropdown-menu catalog__dropdown-menu" aria-labelledby="dropdownCatalog">
						<div class="d-flex dropdown__catalog-overlay">
            <?php foreach ($arResult['SECTIONS'] as &$arSection) { ?>
							<div class="dropdown__catalog-col">
								<div class="dropdown__catalog-item">
									<a class="dropdown-item" href="#"><img src="/assets/img/icons/catalog/odejda.svg"><?= $arSection["~NAME"] ?></a>
									<div class="dropdown__catalog-item-list">
                  <?php if ($arSection['SUBS']) { ?>
                    <?php $showedSubsCount = 0; ?>
                    <?php foreach ($arSection['SUBS'] as $subSection) { ?>
                      <?php if (($subSection["DEPTH_LEVEL"] - $arSection["DEPTH_LEVEL"]) == 1) { ?>
                        <?php $showedSubsCount++; ?>
										<a href="<?= $subSection["~SECTION_PAGE_URL"] ?>"><?= $subSection["NAME"] ?></a>
                    <?}?>
                    <?}?>
                    <?}?>
									</div>
								</div>
							</div>
							<?}?>
						</div>
					</div>

					<div class="header__catalog catalog__hide">
						<div class="catalog__list">
						</div>
					</div>
				</div>
