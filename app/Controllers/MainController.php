<?php

  namespace Pokedex\Controllers;

  use Pokedex\Models\Pokemon;
  use Pokedex\Models\Type;

  class MainController extends CoreController {

    public function home()
    {

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

    public function details($routeVarInfos)
    {

      // j'instancie mon pokemon Model
      $pokemonModel = new Pokemon();
      // j'appelle la méthode find() pour récupérer tous les éléments de mon pokemon selon son id
      // qu'on peut récupérer grace à $routeInfo['params'] dans index.php
      $pokemon = $pokemonModel->find($routeVarInfos['id']);

      // j'instancie mon type Model
      $typeModel = new Type();
      // j'appelle la méthode findTypesPokemon() pour récupérer tous les types de mon pokemon selon son id
      $types = $typeModel->findTypesPokemon($routeVarInfos['id']);

      // je stocke mes informations dans mon tableau afin d'y avoir accès dans ma page details
      $viewVars = [
        'pokemon' => $pokemon,
        'types' => $types
      ];

      /* dump($viewVars); */

      $this->show('details', $viewVars);
    }
  }
