<?php

use core as c;
require_once('core/controler/AutoLoaderClass.php') ;

$autoLoader = new c\AutoLoaderClass ();
$autoLoader->registerPath ( 'app/controller' ) ;
$autoLoader->registerPath ( 'app/model' ) ;

$app = new c\DataFlowClass();
/*
echo "<pre>";
var_dump($autoLoader);
echo "</pre>";
exit;


$app->getModule();
$app->getAction();
*/



/*
	Niezbêdne klasy
	1. generowanie view
	2. po laczenie z baz¹
	3. dodawanie dynamiczne plików css js jako link oraz jako kod w zale¿noœci od funkcji
	4. narzêdzia obróbki tekstu, kodowania itp.
	5. configuracja systemu
	6. klasa zarz¹dzaj¹ca rutingiem po dodaniu do indeksu modu³ odwo³uje siê do odpowiednich modu³ów 
	7. htaccess przekierowuje na index zawsze który obs³uguje wszystko za pomoc¹ routingu
	8. debugowanie frameworku zmiennych oraz bazy
*/