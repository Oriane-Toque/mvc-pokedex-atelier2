<?php

  namespace Pokedex\Controllers;

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

    public function pokemon() {

      $this->show('list.pokemon');
    }
  }