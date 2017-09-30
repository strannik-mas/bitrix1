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
<div class="news-detail">
	<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arResult["DETAIL_PICTURE"])):?>
		<img
			class="detail_picture"
			border="0"
			src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>"
			width="<?=$arResult["DETAIL_PICTURE"]["WIDTH"]?>"
			height="<?=$arResult["DETAIL_PICTURE"]["HEIGHT"]?>"
			alt="<?=$arResult["DETAIL_PICTURE"]["ALT"]?>"
			title="<?=$arResult["DETAIL_PICTURE"]["TITLE"]?>"
			/>
	<?endif?>
	<?if($arParams["DISPLAY_DATE"]!="N" && $arResult["DISPLAY_ACTIVE_FROM"]):?>
		<span class="news-date-time"><?=$arResult["DISPLAY_ACTIVE_FROM"]?></span>
	<?endif;?>
	<?if($arParams["DISPLAY_NAME"]!="N" && $arResult["NAME"]):?>
		<h3><?=$arResult["NAME"]?></h3>
	<?endif;?>
	<?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arResult["FIELDS"]["PREVIEW_TEXT"]):?>
		<p><?=$arResult["FIELDS"]["PREVIEW_TEXT"];unset($arResult["FIELDS"]["PREVIEW_TEXT"]);?></p>
	<?endif;?>
	<?if($arResult["NAV_RESULT"]):?>
		<?if($arParams["DISPLAY_TOP_PAGER"]):?><?=$arResult["NAV_STRING"]?><br /><?endif;?>
		<?echo $arResult["NAV_TEXT"];?>
		<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?><br /><?=$arResult["NAV_STRING"]?><?endif;?>
	<?elseif(strlen($arResult["DETAIL_TEXT"])>0):?>
		<?echo $arResult["DETAIL_TEXT"];?>
	<?else:?>
		<?echo $arResult["PREVIEW_TEXT"];?>
	<?endif?>
	<div style="clear:both"></div>
	<br />
	<?foreach($arResult["FIELDS"] as $code=>$value):
		if ('PREVIEW_PICTURE' == $code || 'DETAIL_PICTURE' == $code)
		{
			?><?=GetMessage("IBLOCK_FIELD_".$code)?>:&nbsp;<?
			if (!empty($value) && is_array($value))
			{
				?><img border="0" src="<?=$value["SRC"]?>" width="<?=$value["WIDTH"]?>" height="<?=$value["HEIGHT"]?>"><?
			}
		}
		else
		{
			?><?=GetMessage("IBLOCK_FIELD_".$code)?>:&nbsp;<?=$value;?><?
		}
		?><br />
	<?endforeach;        
        echo "<hr><p>Работа выполнена в ". $arResult["DISPLAY_PROPERTIES"]['GOD_RABOTI']['DISPLAY_VALUE']." году</p>";
        echo "<hr><p>Скачать файл: <a href='".$arResult['DISPLAY_PROPERTIES']['FILE1']['FILE_VALUE']['SRC']."'>".$arResult['DISPLAY_PROPERTIES']['FILE1']['FILE_VALUE']['FILE_NAME']."</a>";
        //echo "<span> (".round($arResult['DISPLAY_PROPERTIES']['FILE1']['FILE_VALUE']['FILE_SIZE']/pow(2, 20), 4)." МБ)</span></p>";
        echo "<span> (".CFile::FormatSize($arResult['DISPLAY_PROPERTIES']['FILE1']['FILE_VALUE']['FILE_SIZE'], 4).")</span></p>";
        
        
        //echo "<pre>";
        $res = CIBlockElement::GetByID($arResult['DISPLAY_PROPERTIES']['KLIENT']['VALUE']);
        if($ar_res = $res->GetNext()){
            echo '<hr><p>Работа выполнена для компании: ';
            echo '<a href="'.$ar_res['DETAIL_PAGE_URL'].'">';
            echo $ar_res['NAME'], CFile::ShowImage($ar_res['PREVIEW_PICTURE'], 9999, 15),'</a></p>';
            //print_r($ar_res);
        }
        //print_r($arResult["DISPLAY_PROPERTIES"]);
        //echo "</pre>";
	/*foreach($arResult["DISPLAY_PROPERTIES"] as $pid=>$arProperty):?>
            <?if ($arProperty["NAME"] == "Год работы") continue;?>
		<?=$arProperty["NAME"]?>:&nbsp;
		<?if(is_array($arProperty["DISPLAY_VALUE"])):?>
			<?=implode("&nbsp;/&nbsp;", $arProperty["DISPLAY_VALUE"]);?>
		<?else:?>
			<?=$arProperty["DISPLAY_VALUE"];?>
		<?endif?>
		<br />
	<?endforeach;*/
	if(array_key_exists("USE_SHARE", $arParams) && $arParams["USE_SHARE"] == "Y")
	{
		?>
		<div class="news-detail-share">
			<noindex>
			<?
			$APPLICATION->IncludeComponent("bitrix:main.share", "", array(
					"HANDLERS" => $arParams["SHARE_HANDLERS"],
					"PAGE_URL" => $arResult["~DETAIL_PAGE_URL"],
					"PAGE_TITLE" => $arResult["~NAME"],
					"SHORTEN_URL_LOGIN" => $arParams["SHARE_SHORTEN_URL_LOGIN"],
					"SHORTEN_URL_KEY" => $arParams["SHARE_SHORTEN_URL_KEY"],
					"HIDE" => $arParams["SHARE_HIDE"],
				),
				$component,
				array("HIDE_ICONS" => "Y")
			);
			?>
			</noindex>
		</div>
		<?
	}
	?>
</div>
<?$video='/upload/'.$_GET['video']?>
<h2>Видео-новости</h2>
 <?$APPLICATION->IncludeComponent(
	"bitrix:player",
	"",
	Array(
		"ADVANCED_MODE_SETTINGS" => "N",
		"AUTOSTART" => "N",
		"BUFFER_LENGTH" => "10",
		"CONTROLBAR" => "bottom",
		"CONTROLS_BGCOLOR" => "FFFFFF",
		"CONTROLS_COLOR" => "000000",
		"CONTROLS_OVER_COLOR" => "000000",
		"DISPLAY_CLICK" => "play",
		"DOWNLOAD_LINK_TARGET" => "_self",
		"FULLSCREEN" => "Y",
		"HEIGHT" => "324",
		"HIDE_MENU" => "N",
		"HIGH_QUALITY" => "Y",
		"MUTE" => "N",
		"PATH" => $video,
		"PLAYER_TYPE" => "auto",
		"REPEAT" => "N",
		"SCREEN_COLOR" => "000000",
		"SHOW_CONTROLS" => "Y",
		"SHOW_DIGITS" => "Y",
		"SHOW_STOP" => "N",
		"SKIN" => "bitrix.swf",
		"SKIN_PATH" => "/bitrix/components/bitrix/player/mediaplayer/skins",
		"USE_PLAYLIST" => "N",
		"VOLUME" => "90",
		"WIDTH" => "400",
		"WMODE" => "transparent",
		"WMODE_WMV" => "window"
	)
);?>