<?php

require_once "vendor/autoload.php";

use magnusbilling\api\magnusBilling;

$marconi= new MagnusBilling('API-KEY', 'API-TOKEN');
$marconi->public_url = "https:/URL-HERE";

//passar o segundo parâmetro referente à página
$result = $marconi->read('call',1);

$finalPrint = json_encode($result, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_OBJECT_AS_ARRAY );

    echo "<pre>";
    print_r($finalPrint);
    echo"</pre>";


?>