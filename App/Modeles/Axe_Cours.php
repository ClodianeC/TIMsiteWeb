<?php
declare(strict_types=1);

namespace App\Modeles;
use App\App;
use \PDO;

// Classe modèle
class Axe_Cours {
    private int $id = 0;
    private int $axe_id = 0;
    private int $cours_id = 0;

    // Méthodes statiques
    public function __construct() {

    }

    public static function trouverTout():array{
        // Définir la chaine SQL
        $chaineSQL = 'SELECT * FROM axes_cours';
        // Préparer la requête (optimisation)
        $requetePreparee = App::getPDO()->prepare($chaineSQL);
        // Définir le mode de récupération
        $requetePreparee->setFetchMode(PDO::FETCH_CLASS, "App\Modeles\Axe_Cours");
        // Exécuter la requête
        $requetePreparee->execute();
        // Récupérer le résultat
        $axes_cours = $requetePreparee->fetchAll();

        return $axes_cours;
    }
    public static function trouverParId(int $unIdAxe_Cours):Axe_Cours{

        // Définir la chaine SQL
        $chaineSQL = 'SELECT * FROM axes_cours WHERE id=:idAxe_Cours';
        // Préparer la requête (optimisation)
        $requetePreparee = App::getPDO()->prepare($chaineSQL);
        // BindParam
        $requetePreparee->bindParam('idAxe_Cours', $unIdAxe_Cours);
        // Définir le mode de récupération
        $requetePreparee->setFetchMode(PDO::FETCH_CLASS, "App\Modeles\Axe_Cours");
        // Exécuter la requête
        $requetePreparee->execute();
        // Récupérer le résultat
        $axe_cours= $requetePreparee->fetch();

        return $axe_cours;
    }

    public function getId():int{
        return $this->id;
    }
    public function getIdAxe():int{
        return $this->axe_id;
    }
    public function getIdCours():int{
        return $this->cours_id;
    }
}