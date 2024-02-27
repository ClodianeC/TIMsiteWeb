<?php
declare(strict_types=1);

namespace App\Modeles;
use App\App;
use \PDO;

// Classe modèle
class Cours {
    private int $id = 0;
    private string $nom = '';
    private int $session = 0;
    private int $annee = 0;

    // Méthodes statiques
    public function __construct() {

    }

    public static function trouverTout():array{
        // Définir la chaine SQL
        $chaineSQL = 'SELECT * FROM cours';
        // Préparer la requête (optimisation)
        $requetePreparee = App::getPDO()->prepare($chaineSQL);
        // Définir le mode de récupération
        $requetePreparee->setFetchMode(PDO::FETCH_CLASS, "App\Modeles\Cours");
        // Exécuter la requête
        $requetePreparee->execute();
        // Récupérer le résultat
        $cours = $requetePreparee->fetchAll();

        return $cours;
    }
    public static function trouverParId(int $unIdCours):Cours{

        // Définir la chaine SQL
        $chaineSQL = 'SELECT * FROM cours WHERE id=:idCours';
        // Préparer la requête (optimisation)
        $requetePreparee = App::getPDO()->prepare($chaineSQL);
        // BindParam
        $requetePreparee->bindParam('idCours', $unIdCours);
        // Définir le mode de récupération
        $requetePreparee->setFetchMode(PDO::FETCH_CLASS, "App\Modeles\Cours");
        // Exécuter la requête
        $requetePreparee->execute();
        // Récupérer le résultat
        $cours= $requetePreparee->fetch();

        return $cours;
    }

    public function getId():int{
        return $this->id;
    }
    public function getNom():string{
        return $this->nom;
    }
    public function getSession():int{
        return $this->session;
    }
    public function getAnnee():int{
        return $this->annee;
    }
}