<?php

  namespace Pokedex\Controllers;

  class MainController {

    public function home() {

      $this->show('home');
    }

    public function details() {

      $this->show('details');
    }

    private function show($viewName) {

      global $router;

      require_once __DIR__."/../views/inc/header.tpl.php";
      require_once __DIR__."/../views/$viewName.tpl.php";
      require_once __DIR__."/../views/inc/footer.tpl.php";
    }
  }