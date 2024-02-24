<?php
declare(strict_types=1);

namespace App\Modeles;
use App\App;
use \PDO;

// Classe modèle
class Axe {
    private int $id = 0;
    private string $nom = '';

    // Méthodes statiques
    public function __construct() {

    }

    public static function trouverTout():array{
        // Définir la chaine SQL
        $chaineSQL = 'SELECT * FROM axes';
        // Préparer la requête (optimisation)
        $requetePreparee = App::getPDO()->prepare($chaineSQL);
        // Définir le mode de récupération
        $requetePreparee->setFetchMode(PDO::FETCH_CLASS, "App\Modeles\Axe");
        // Exécuter la requête
        $requetePreparee->execute();
        // Récupérer le résultat
        $axes = $requetePreparee->fetchAll();

        return $axes;
    }
    public static function trouverParId(int $unIdAxe):Axe{

        // Définir la chaine SQL
        $chaineSQL = 'SELECT * FROM axes WHERE id=:idAxe';
        // Préparer la requête (optimisation)
        $requetePreparee = App::getPDO()->prepare($chaineSQL);
        // BindParam
        $requetePreparee->bindParam('idAxe', $unIdAxe);
        // Définir le mode de récupération
        $requetePreparee->setFetchMode(PDO::FETCH_CLASS, "App\Modeles\Axe");
        // Exécuter la requête
        $requetePreparee->execute();
        // Récupérer le résultat
        $axe= $requetePreparee->fetch();

        return $axe;
    }

    public function getId():int{
        return $this->id;
    }
    public function getNom():string{
        return $this->nom;
    }
}