<?php

  namespace Pokedex\Controllers;

  class CoreController {

    protected function show($viewName, $viewVars = [])
    {

      global $router;
      
      require_once __DIR__ . "/../views/inc/header.tpl.php";
      require_once __DIR__ . "/../views/$viewName.tpl.php";
      require_once __DIR__ . "/../views/inc/footer.tpl.php";
    }
  }

?>