<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<html>
<head>
<meta name="robots" content="noindex, follow" />
<?$APPLICATION->ShowHead()?>
<title><?$APPLICATION->ShowTitle()?></title>
</head>

<body>

<?
$APPLICATION->ShowPanel();
?>
<div id="container">
<div id="header">
	<div id="header_text">
		<?$APPLICATION->IncludeFile(
			$APPLICATION->GetTemplatePath("include_areas/company_name.php"),
			Array(),
			Array("MODE"=>"html")
		);?>
	</div>

	

	<div id="search">
		&nbsp;Поиск на сайте
		<?$APPLICATION->IncludeComponent("bitrix:search.form", "flat", Array(
			"PAGE"	=>	"/search/"
			)
	);?>
	</div>




</div>

	<h1><?$APPLICATION->ShowTitle(false)?></h1>