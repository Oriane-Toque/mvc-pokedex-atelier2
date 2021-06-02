<?php

  namespace Pokedex\Controllers;

  use Pokedex\Models\Pokemon;
  use Pokedex\Models\Type;

  class CatalogController extends CoreController {

    public function types() {

      // j'instancie mon model
      $typesModel = new Type();
      // je fais appelle à ma méthode pour récupérer la liste complète des types
      $types = $typesModel->findAll();

      // je stocke tous mes objets dans un tableau
      $viewVars = [
        'types' => $types
      ];

      $this->show('list.types', $viewVars);
    }

    public function pokemon($routeVarInfos) {

      // j'instancie mon model
      $pokemonsModel = new Pokemon();
      // j'appelle la fonction findAllByType afin qu'elle me retourne la liste des pokemons selon leur type_id
      $pokemons = $pokemonsModel->findAllByType($routeVarInfos['id']);

      // je stocke mes objets dans mon tableau
      $viewVars = [
        'pokemons' => $pokemons
      ];

      if(empty($pokemons)) {

        http_response_code(404);
        echo "404, page introuvable";
        exit();

      } else {

        $this->show('list.pokemon', $viewVars);
      }
    }
  }

?>