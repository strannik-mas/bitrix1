<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
	 <?$APPLICATION->IncludeComponent("bitrix:map.google.view","",Array(
			"API_KEY" => "",
			"INIT_MAP_TYPE" => "MAP",
			"MAP_DATA" => "a:4:{s:10:
				\"google_lat\";d:50.049689;s:10:
				\"google_lon\";d:36.286602;s:12:
				\"google_scale\";i:10;s:10:
				\"PLACEMARKS\";a:1:{i:0;a:3:{s:4:
				\"TEXT\";s:99:
				\"тутычки\";s:3:
				\"LON\";d:36.286602;s:3:
				\"LAT\";d:50.049689;}}}",
			"MAP_WIDTH" => "600",
			"MAP_HEIGHT" => "400",
			"CONTROLS" => array(
				"SMALL_ZOOM_CONTROL",
				"TYPECONTROL",
				"SCALELINE"
			),
			"OPTIONS" => array(
				"ENABLE_SCROLL_ZOOM",
				"ENABLE_DBLCLICK_ZOOM",
				"ENABLE_DRAGGING",
				"ENABLE_KEYBOARD"
			),
			
		)
	);?> 


</div>
</body>
</html>