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

    public function findAll()
    {

      $pdo = Database::getPDO();

      // requete permettant de récupérer tous les pokemons dans la table pokemon
      // par numéro dans l'ordre ascendant
      $sql = "
            SELECT *
            FROM `pokemon`
            ORDER BY `numero`
            ASC
          ";

      // execution de la requete
      $pdoStatment = $pdo->query($sql);
      // je récupère le resultat sous forme d'objets
      $result = $pdoStatment->fetchAll(PDO::FETCH_CLASS, '\Pokedex\models\Pokemon');

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
