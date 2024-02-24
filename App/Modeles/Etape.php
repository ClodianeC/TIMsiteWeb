<?php
declare(strict_types=1);

namespace App\Modeles;
use App\App;
use \PDO;

// Classe modèle
class Etape {
    private int $id = 0;
    private string $nom = '';
    private int $ordre = 0;
    private string $description = '';
    private int $projet_id = 0;

    // Méthodes statiques
    public function __construct() {

    }

    public static function trouverTout():array{
        // Définir la chaine SQL
        $chaineSQL = 'SELECT * FROM etapes';
        // Préparer la requête (optimisation)
        $requetePreparee = App::getPDO()->prepare($chaineSQL);
        // Définir le mode de récupération
        $requetePreparee->setFetchMode(PDO::FETCH_CLASS, "App\Modeles\Etape");
        // Exécuter la requête
        $requetePreparee->execute();
        // Récupérer le résultat
        $etapes = $requetePreparee->fetchAll();

        return $etapes;
    }
    public static function trouverParId(int $unIdEtape):Etape{

        // Définir la chaine SQL
        $chaineSQL = 'SELECT * FROM etapes WHERE id=:idEtape';
        // Préparer la requête (optimisation)
        $requetePreparee = App::getPDO()->prepare($chaineSQL);
        // BindParam
        $requetePreparee->bindParam('idEtape', $unIdEtape);
        // Définir le mode de récupération
        $requetePreparee->setFetchMode(PDO::FETCH_CLASS, "App\Modeles\Etape");
        // Exécuter la requête
        $requetePreparee->execute();
        // Récupérer le résultat
        $etape= $requetePreparee->fetch();

        return $etape;
    }
    public static function trouverParProjet(int $unIdProjet) {

        // Définir la chaine SQL
        $chaineSQL = 'SELECT * FROM etapes WHERE projet_id=:idProjet';
        // Préparer la requête (optimisation)
        $requetePreparee = App::getPDO()->prepare($chaineSQL);
        // BindParam
        $requetePreparee->bindParam('idProjet', $unIdProjet);
        // Définir le mode de récupération
        $requetePreparee->setFetchMode(PDO::FETCH_CLASS, "App\Modeles\Etape");
        // Exécuter la requête
        $requetePreparee->execute();
        // Récupérer le résultat
        $etapes= $requetePreparee->fetchAll();

        return $etapes;
    }

    public function getId():int{
        return $this->id;
    }
    public function getNom():string{
        return $this->nom;
    }
    public function getOrdre():int{
        return $this->ordre;
    }
    public function getDescription():string{
        return $this->description;
    }
    public function getIdProjet():int{
        return $this->projet_id;
    }
}