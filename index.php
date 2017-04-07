<?php 

// inclui o autoloader do Composer 

require 'vendor/autoload.php'; 


// inclui o arquivo de inicialização 

require 'init.php';

// instancia o Slim, habilitando os erros (útil para debug, em desenvolvimento) 

$app = new \Slim\App([ 'settings' => [
        'displayErrorDetails' => true,
        'debug' => true
    ]
]);


$app->add(new Zeuxisoo\Whoops\Provider\Slim\WhoopsMiddleware);

$app->get('/', function(){

	$index = new \App\Controllers\IndexController;
	$index->index();

});






$app->run();