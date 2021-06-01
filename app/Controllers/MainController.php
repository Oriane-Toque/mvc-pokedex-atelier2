<?php

  namespace Pokedex\Controllers;

  use Pokedex\Models\Pokemon;

  class MainController {

    public function home() {

      // j'instancie mon pokemon Model
      $pokemonsModel = new Pokemon();
      // j'appelle la méthode pour récupérer tous mes pokemons
      $pokemons = $pokemonsModel->findAll();

      // je stocke tous mes objets dans mon tableau afin d'y avoir accès dans ma page home
      $viewVars = [
        'pokemons' => $pokemons
      ];

      $this->show('home', $viewVars);
    }

    public function details($routeVarInfos) {

      /* dump($routeVarInfos); */

      // j'instancie mon pokemon Model
      $pokemonModel = new Pokemon();
      // j'appelle la méthode find() pour récupérer tous les éléments de mon pokemon selon son id
      // qu'on peut récupérer grace à $routeInfo['params'] dans index.php
      $pokemon = $pokemonModel->find($routeVarInfos['id']);

      // je stocke mes informations dans mon tableau afin d'y avoir accès dans ma page details
      $viewVars = [
        'pokemon' => $pokemon
      ];

      /* dump($viewVars); */

      $this->show('details', $viewVars);
    }

    private function show($viewName, $viewVars = []) {

      global $router;

      require_once __DIR__."/../views/inc/header.tpl.php";
      require_once __DIR__."/../views/$viewName.tpl.php";
      require_once __DIR__."/../views/inc/footer.tpl.php";
    }
  }