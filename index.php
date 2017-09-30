<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Демонстрационная версия продукта «1С-Битрикс: Управление сайтом»");
$APPLICATION->SetPageProperty("NOT_SHOW_NAV_CHAIN", "Y");
$APPLICATION->SetTitle("Статьи");
?><!-- --> <?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"articles",
	Array(
		"ACTIVE_DATE_FORMAT" => "M j, Y, H:m",
		"ADD_SECTIONS_CHAIN" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_TIME" => "3600",
		"CACHE_TYPE" => "A",
		"DETAIL_URL" => "/content/articles/#ELEMENT_ID#/",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PANEL" => "N",
		"DISPLAY_PICTURE" => "N",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "2",
		"IBLOCK_TYPE" => "articles",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"NEWS_COUNT" => "5",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => "",
		"PAGER_TITLE" => "Статьи",
		"PARENT_SECTION" => "",
		"PREVIEW_TRUNCATE_LEN" => "0",
		"PROPERTY_CODE" => array(0=>"FORUM_MESSAGE_CNT",1=>"rating",),
		"SET_TITLE" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC"
	)
);?> <!-- --> <!-- -->
<h1>Новости</h1>
 <?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"CACHE_FILTER" => "N",
		"CACHE_TIME" => "3600",
		"DETAIL_URL" => "/content/news/#SECTION_ID#/#ELEMENT_ID#/",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PANEL" => "N",
		"DISPLAY_PICTURE" => "N",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => Array("",""),
		"FILTER_NAME" => "",
		"IBLOCK_ID" => "3",
		"IBLOCK_TYPE" => "news",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"NEWS_COUNT" => "5",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => "",
		"PAGER_TITLE" => "Новости",
		"PREVIEW_TRUNCATE_LEN" => "0",
		"PROPERTY_CODE" => Array("",""),
		"SET_TITLE" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC"
	)
);?> <!-- -->
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
		"PATH" => "/upload/intro.flv",
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
);?> <!-- -->
<h2>Новые фотографии</h2>
 <?$APPLICATION->IncludeComponent(
	"bitrix:photogallery.detail.list",
	".default",
	Array(
		"ADDITIONAL_SIGHTS" => array(),
		"BEHAVIOUR" => "USER",
		"CACHE_TIME" => "3600",
		"CACHE_TYPE" => "A",
		"COMMENTS_TYPE" => "none",
		"DATE_TIME_FORMAT" => "d.m.Y",
		"DETAIL_SLIDE_SHOW_URL" => "/content/gallery/#USER_ALIAS#/#SECTION_ID#/#ELEMENT_ID#/slide_show/",
		"DETAIL_URL" => "/content/gallery/#USER_ALIAS#/#SECTION_ID#/#ELEMENT_ID#/",
		"ELEMENT_LAST_TYPE" => "none",
		"ELEMENT_SORT_FIELD" => "sort",
		"ELEMENT_SORT_ORDER" => "asc",
		"GROUP_PERMISSIONS" => array(0=>"1",1=>"",),
		"IBLOCK_ID" => "11",
		"IBLOCK_TYPE" => "photos",
		"MAX_VOTE" => "5",
		"PAGE_ELEMENTS" => "6",
		"PAGE_NAVIGATION_TEMPLATE" => "",
		"PICTURES_SIGHT" => "",
		"SEARCH_URL" => "/content/gallery/search/",
		"SECTION_ID" => $_REQUEST["SECTION_ID"],
		"SET_TITLE" => "N",
		"SHOW_COMMENTS" => "N",
		"SHOW_CONTROLS" => "N",
		"SHOW_PAGE_NAVIGATION" => "none",
		"SHOW_RATING" => "N",
		"SHOW_SHOWS" => "N",
		"SHOW_TAGS" => "N",
		"THUMBNAIL_SIZE" => "90",
		"USER_ALIAS" => $_REQUEST["USER_ALIAS"],
		"USE_DESC_PAGE" => "N",
		"USE_PERMISSIONS" => "N",
		"VOTE_NAMES" => array(0=>"1",1=>"2",2=>"3",3=>"4",4=>"5",5=>"",)
	)
);?><!-- --> <br>
<h2>Наши клиенты</h2>
 <?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"template1", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "N",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "25",
		"IBLOCK_TYPE" => "portfolio",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "3",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"SET_BROWSER_TITLE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"COMPONENT_TEMPLATE" => "template1"
	),
	false
);?><br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>