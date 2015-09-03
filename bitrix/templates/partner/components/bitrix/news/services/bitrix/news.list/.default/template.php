<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
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
?>
<div class="tab-content">
	<?php ?>
	<div role="tabpanel" class="tab-pane active tab_services" id="home">
		<?php $i=1;
		$isEmpty=true;
		?>
		<?foreach($arResult["ITEMS"] as $arItem):?>
			<?php if($arItem['PROPERTIES']['urfizSelect']['VALUE_XML_ID']=='urlic'){?>
				<?
				$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
				$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNI_ELEMENT_DELETE_CONFIRM')));
				?>

					<div class="col-xs-4 col-lg-4 col-sm-4 col-md-4 servicesItem <?php echo $i%3==0 ? 'margin_right_none':''?>" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
						<div class="col-xs-2 col-lg-2 col-sm-2 col-md-2 padding_left_right_none services_icon">
							<img
								class="preview_picture"
								border="0"
								src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
								width="<?=$arItem["PREVIEW_PICTURE"]["WIDTH"]?>"
								height="<?=$arItem["PREVIEW_PICTURE"]["HEIGHT"]?>"
								alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
								title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>"
								style="float:left"
								/>
						</div>
						<div class="col-xs-10 col-lg-10 col-sm-10 col-md-10 padding_left_right_none servicesItemContent">
							<span class="title"><?echo $arItem["NAME"]?></span>
							<ul class="item">
								<?echo $arItem["PREVIEW_TEXT"];?>
								<a href="<?=$arItem["DETAIL_PAGE_URL"]?>">Подробнее</a>
							</ul>
						</div>
					</div>
					<?php
					$isEmpty=false;
					$i++;
				}?>

			<?php endforeach;?>
		<?php if($isEmpty){?>
			<div class="col-xs-12 col-lg-12 col-sm-12 col-md-12" style="margin-top: 30px;">
				<p>Здесь пока нет услуг для Юредических лиц</p>
			</div>
		<?php }?>

	</div>
	<div role="tabpanel" class="tab-pane tab_services" id="profile">
		<?php $i=1;
		$isEmpty=true;
		?>
		<?foreach($arResult["ITEMS"] as $arItem):?>
			<?php if($arItem['PROPERTIES']['urfizSelect']['VALUE_XML_ID']=='fizlic'){?>
			<?
			$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
			$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNI_ELEMENT_DELETE_CONFIRM')));
			?>

				<div class="col-xs-4 col-lg-4 col-sm-4 col-md-4 servicesItem <?php echo $i%3==0 ? 'margin_right_none':''?>" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
					<div class="col-xs-2 col-lg-2 col-sm-2 col-md-2 padding_left_right_none services_icon">
						<img
							class="preview_picture"
							border="0"
							src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
							width="<?=$arItem["PREVIEW_PICTURE"]["WIDTH"]?>"
							height="<?=$arItem["PREVIEW_PICTURE"]["HEIGHT"]?>"
							alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
							title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>"
							style="float:left"
							/>
					</div>
					<div class="col-xs-10 col-lg-10 col-sm-10 col-md-10 padding_left_right_none servicesItemContent">
						<span class="title"><?echo $arItem["NAME"]?></span>
						<ul class="item">
							<?echo $arItem["PREVIEW_TEXT"];?>
							<a href="<?=$arItem["DETAIL_PAGE_URL"]?>">Подробнее</a>
						</ul>
					</div>
				</div>
				<?php
				$isEmpty=false;
				$i++;
			}?>

		<?php endforeach;?>
		<?php if($isEmpty){?>
			<div class="col-xs-12 col-lg-12 col-sm-12 col-md-12" style="margin-top: 30px;">
				<p>Здесь пока нет услуг для физических лиц</p>
			</div>
		<?php }?>
	</div>
</div>
<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12 clearfix">

	<a href="./yuridicheskie-uslugi/"><button class="btn btn-lazur  center hvr-fade">Остальные услуги</button></a>
</div>