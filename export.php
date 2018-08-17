<?php
require_once "oop/classes/htmlExport.php";
require_once "oop/classes/jsonExport.php";
require_once "oop/classes/xmlExport.php";

$export = "html";

$handler = $export."Export";

$handlerObject = new $handler;
//$handlerObject->export();


class exportHandler{
    public function doExport(canExport $handler)
    {
        $handler->export();
    }
}


$object = new exportHandler();

$object->doExport($handlerObject);