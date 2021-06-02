<?php

  namespace Pokedex\Models;

  use \PDO;
  use Pokedex\utils\Database;

class Type {

    private $id;
    private $name;
    private $color;

    /* Méthode qui retourne tous les types d'un pokemon selon son id */
    public function findTypesPokemon($id) {

      $pdo = Database::getPDO();

      $sql = "
        SELECT `type`.`name`, `color`
        FROM `type`
        INNER JOIN `pokemon_type`
        ON `type`.`id` = `pokemon_type`.`type_id`
        INNER JOIN `pokemon`
        ON `pokemon_type`.`pokemon_numero` = `pokemon`.`numero`
        WHERE `pokemon`.`id` = $id
      ";

      $pdoStatment = $pdo->query($sql);
      $result = $pdoStatment->fetchAll(PDO::FETCH_CLASS, '\Pokedex\Models\Type');

      return $result;
    }

    /* Méthode qui retourne tous les types */
    public function findAll() {

      $pdo = Database::getPDO();

      $sql = "
        SELECT *
        FROM `type`
        ORDER BY `id`
        ASC
      ";

      $pdoStatment = $pdo->query($sql);
      $result = $pdoStatment->fetchAll(PDO::FETCH_CLASS, '\Pokedex\Models\Type');

      return $result;
    }

    /**
     * Get the value of color
     */ 
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }
  }