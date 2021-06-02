<?php

  require_once __DIR__.'/../vendor/autoload.php';

  $router = new AltoRouter();

  $router->setBasePath($_SERVER['BASE_URI']);

  $router->map('GET', '/', 'MainController@home', 'main.home');
  $router->map('GET', '/details/[i:id]', 'MainController@details', 'main.details');
  $router->map('GET', '/types', 'CatalogController@types', 'catalog.types');
  $router->map('GET', '/types/[i:id]', 'CatalogController@pokemon', 'catalog.pokemon');

  // récupération de toutes nos routes
  $routeInfo = $router->match();

  // au cas ou l'adresse n'existe pas
  if($routeInfo === false) :
    // détection error 404 + message 404
    http_response_code(404);
    echo 'ERROR 404 : Page non trouvée';
    // on arrête l'éxecution de la page
    exit();
  endif;

  // récupération controller et method de la route
  $routeInfoArray = explode('@', $routeInfo['target']);

  $controllerName = "Pokedex\\Controllers\\".$routeInfoArray[0];
  $methodName = $routeInfoArray[1];

  // j'instancie mon controlleur
  $controller = new $controllerName();
  // j'appelle la méthode correspondant à ma route
  $controller->$methodName($routeInfo['params']);