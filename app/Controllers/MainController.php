<?php

  namespace Pokedex\Controllers;

  use Pokedex\Models\Pokemon;

  class MainController {

    public function home() {

      // j'instancie mon pokemon Model
      $pokemonModel = new Pokemon();
      // j'appelle la méthode pour récupérer tous mes pokemons
      $pokemons = $pokemonModel->findAll();

      // je stocke tous mes objets dans mon tableau afin d'y avoir accès dans ma page home
      $viewVars = [
        'pokemons' => $pokemons
      ];

      $this->show('home', $viewVars);
    }

    public function details() {

      $this->show('details');
    }

    private function show($viewName, $viewVars = []) {

      global $router;

      require_once __DIR__."/../views/inc/header.tpl.php";
      require_once __DIR__."/../views/$viewName.tpl.php";
      require_once __DIR__."/../views/inc/footer.tpl.php";
    }
  }