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
	Niezb�dne klasy
	1. generowanie view
	2. po laczenie z baz�
	3. dodawanie dynamiczne plik�w css js jako link oraz jako kod w zale�no�ci od funkcji
	4. narz�dzia obr�bki tekstu, kodowania itp.
	5. configuracja systemu
	6. klasa zarz�dzaj�ca rutingiem po dodaniu do indeksu modu� odwo�uje si� do odpowiednich modu��w 
	7. htaccess przekierowuje na index zawsze kt�ry obs�uguje wszystko za pomoc� routingu
	8. debugowanie frameworku zmiennych oraz bazy
*/