<?
/*
You can place here your functions and event handlers

AddEventHandler("module", "EventName", "FunctionName");
function FunctionName(params)
{
	//code
}
*/
// пример 1 - вызов кастомной ошибки при определенном условии
AddEventHandler("iblock", "OnBeforeIBlockElementAdd", Array("MyClass", "OnBeforeIBlockElementAddHandler"));

class MyClass
{
    // создаем обработчик события "OnBeforeIBlockElementAdd"
    function OnBeforeIBlockElementAddHandler(&$arFields)
    {
        if(strlen($arFields["CODE"])<=0)
        {
            global $APPLICATION;
            $APPLICATION->throwException("Введите мнемонический код.");
            return false;
        }
        
	if(strlen($arFields["NAME"])<=5)
        {
            global $APPLICATION;
            $APPLICATION->throwException("Название должно быть больше пяти символов");
            return false;
        }
    }
}

// пример 2 - добавим дату к символьному коду при создании элемента инфоблока
AddEventHandler("iblock", "OnBeforeIBlockElementAdd", Array("SimCode", "OnBeforeElementAddHandler")); 
 
class SimCode { 
 
	function OnBeforeElementAddHandler(&$arFields) {
	   if ( strlen($arFields["CODE"]) != 0 ) {
		  $arFields["CODE"] .= date('dmY');
		  return;
	   } 
	} 
}

?>