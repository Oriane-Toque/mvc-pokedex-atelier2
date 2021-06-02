<?php

  namespace Pokedex\Models;

  use Pokedex\utils\Database;
  use \PDO;

  class Pokemon
  {

    private $id;
    private $nom;
    private $pv;
    private $attaque;
    private $defense;
    private $attaque_spe;
    private $defense_spe;
    private $vitesse;
    private $numero;

    // méthode permettant de récupérer tous les pokemons dans la table pokemon
    // par numéro dans l'ordre ascendant
    public function findAll()
    {

      $pdo = Database::getPDO();

      $sql = "
            SELECT *
            FROM `pokemon`
            ORDER BY `numero`
            ASC
          ";

      // execution de la requete
      $pdoStatment = $pdo->query($sql);
      // je récupère le resultat sous forme d'objets
      $result = $pdoStatment->fetchAll(PDO::FETCH_CLASS, '\Pokedex\Models\Pokemon');

      return $result;
    }

    /* Méthode permettant de récupérer un pokemon selon son id */
    public function find($id)
    {

      $pdo = Database::getPDO();

      $sql = "
        SELECT *
        FROM `pokemon`
        WHERE `id` = $id
      ";

      // execution de la requete
      $pdoStatment = $pdo->query($sql);
      // je récupère le resultat sous forme d'objets
      $result = $pdoStatment->fetchObject('\Pokedex\Models\Pokemon');

      return $result;
    }

    /* Méthode permettant de retourner le nom, le numero et l'id de tous les pokemons selon son type_id */
    public function findAllByType($id) {
      
      $pdo = Database::getPDO();

      $sql = "
        SELECT `pokemon`.`nom`,`pokemon`.`numero`, `pokemon`.`id`
        FROM `pokemon`
        INNER JOIN `pokemon_type`
        ON `pokemon`.`numero` = `pokemon_type`.`pokemon_numero`
        WHERE `type_id` = $id
        ORDER BY `pokemon`.`numero`
      ";
      
      // execution de la requête
      $pdoStatment = $pdo->query($sql);
      // récupération du résultat sous forme d'objet
      $result = $pdoStatment->fetchAll(PDO::FETCH_CLASS, '\Pokedex\Models\Pokemon');

      return $result;
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the value of nom
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Get the value of pv
     */ 
    public function getPv()
    {
        return $this->pv;
    }

    /**
     * Get the value of defense
     */ 
    public function getDefense()
    {
        return $this->defense;
    }

    /**
     * Get the value of attaque_spe
     */ 
    public function getAttaqueSpe()
    {
        return $this->attaque_spe;
    }

    /**
     * Get the value of defense_spe
     */ 
    public function getDefenseSpe()
    {
        return $this->defense_spe;
    }

    /**
     * Get the value of vitesse
     */ 
    public function getVitesse()
    {
        return $this->vitesse;
    }

    /**
     * Get the value of numero
     */ 
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Get the value of attaque
     */ 
    public function getAttaque()
    {
        return $this->attaque;
    }
  }
